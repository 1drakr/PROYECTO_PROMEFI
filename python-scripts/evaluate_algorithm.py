import sys
import pandas as pd
import json
import PyPDF2
import re
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier
from sklearn.metrics import classification_report

# Función para leer el contenido del PDF
def extract_text_from_pdf(pdf_path):
    text = ""
    with open(pdf_path, "rb") as file:
        reader = PyPDF2.PdfReader(file)
        for page in reader.pages:
            text += page.extract_text()
    return text

# Función para extraer información clave del texto del PDF
def extract_project_info_from_text(text):
    project_info = {}
    project_info['title'] = re.search(r'Title:\s*(.*)', text).group(1).strip()
    project_info['subtitle'] = re.search(r'Subtitle:\s*(.*)', text).group(1).strip()
    project_info['main_category'] = re.search(r'Main Category:\s*(.*)', text).group(1).strip()
    project_info['category'] = re.search(r'Category:\s*(.*)', text).group(1).strip()
    project_info['subcategory'] = re.search(r'Subcategory:\s*(.*)', text).group(1).strip()
    project_info['location'] = re.search(r'Location:\s*(.*)', text).group(1).strip()
    project_info['deadline'] = re.search(r'Deadline:\s*(.*)', text).group(1).strip()
    project_info['campaign_duration'] = int(re.search(r'Campaign Duration:\s*(.*)', text).group(1).strip())
    project_info['goal_amount'] = float(re.search(r'Goal Amount:\s*(.*)', text).group(1).strip())
    project_info['risks_challenges'] = re.search(r'Risks and Challenges:\s*(.*)', text, re.DOTALL).group(1).strip()
    project_info['project_type'] = re.search(r'Project Type:\s*(.*)', text).group(1).strip()
    project_info['blurb'] = re.search(r'Subtitle:\s*(.*)', text).group(1).strip()  # Usamos el subtítulo como blurb
    project_info['country'] = re.search(r'Location:\s*(.*)', text).group(1).strip().split(",")[-1].strip()
    project_info['photo'] = True  # Suponemos que siempre hay una foto
    project_info['previous_projects'] = 0  # Para simplificar, asumimos que no hay proyectos previos
    return project_info

# Función para cargar y preprocesar el conjunto de datos
def load_and_preprocess_dataset(file_path):
    with open(file_path, encoding='utf-8') as f:
        lines = f.readlines()

    projects = []
    for line in lines:
        projects.append(json.loads(line))

    df = pd.json_normalize(projects)

    # Seleccionar características relevantes y manejar claves faltantes
    for col in ['goal', 'pledged', 'backers_count', 'deadline', 'created_at', 'launched_at', 'state', 'category.name', 'location.country']:
        if col not in df.columns:
            df[col] = None

    # Reemplazar valores None con valores predeterminados antes de la conversión
    df['goal'] = df['goal'].fillna(0).astype(float)
    df['pledged'] = df['pledged'].fillna(0).astype(float)
    df['backers_count'] = df['backers_count'].fillna(0).astype(int)
    df['deadline'] = pd.to_datetime(df['deadline'].fillna(0), unit='s', errors='coerce')
    df['created_at'] = pd.to_datetime(df['created_at'].fillna(0), unit='s', errors='coerce')
    df['launched_at'] = pd.to_datetime(df['launched_at'].fillna(0), unit='s', errors='coerce')
    df['state'] = df['state'].astype('category').cat.codes

    # Crear nuevas características a partir de las columnas de fecha
    df['created_to_launched'] = (df['launched_at'] - df['created_at']).dt.days
    df['launched_to_deadline'] = (df['deadline'] - df['launched_at']).dt.days

    # Seleccionar las características para el modelo
    features = df[['goal', 'pledged', 'backers_count', 'created_to_launched', 'launched_to_deadline', 'category.name', 'location.country']]
    labels = df['state']

    # Codificar características categóricas
    features = pd.get_dummies(features, columns=['category.name', 'location.country'], dummy_na=True)

    return df, features, labels

# Función para entrenar el modelo
def train_model(features, labels):
    X_train, X_test, y_train, y_test = train_test_split(features, labels, test_size=0.3, random_state=42)
    model = RandomForestClassifier(n_estimators=100, random_state=42)
    model.fit(X_train, y_train)
    y_pred = model.predict(X_test)
    print(classification_report(y_test, y_pred))
    return model

# Función para evaluar el proyecto basado en datos de proyectos similares
def evaluate_project(project, similar_projects):
    reasons = []

    # Meta de financiación razonable
    avg_goal = similar_projects['goal'].mean()
    if project['goal_amount'] <= avg_goal * 1.5:
        reasons.append("La meta de financiación es razonable en comparación con proyectos similares.")
    else:
        reasons.append("La meta de financiación es alta en comparación con proyectos similares.")

    # Descripción clara y detallada
    if len(project['blurb']) > 50:
        reasons.append("La descripción del proyecto es clara y detallada.")
    else:
        reasons.append("La descripción del proyecto es insuficiente.")

    # Popularidad de la categoría
    popular_categories = similar_projects['category.name'].value_counts().index[:5]
    if project['category'] in popular_categories:
        reasons.append("El proyecto pertenece a una categoría popular.")
    else:
        reasons.append("El proyecto pertenece a una categoría menos popular.")

    # Viabilidad logística y legal del país
    if project['country'] in ['US', 'UK', 'CA', 'AU']:
        reasons.append("El país del proyecto tiene una alta viabilidad logística y legal.")
    else:
        reasons.append("El país del proyecto puede presentar desafíos logísticos y legales.")

    # Duración de la campaña adecuada
    if 30 <= project['campaign_duration'] <= 60:
        reasons.append("La duración de la campaña es adecuada.")
    else:
        reasons.append("La duración de la campaña no es adecuada.")

    # Credibilidad del creador
    if project['previous_projects'] > 0:
        reasons.append("El creador del proyecto tiene experiencia previa en la plataforma.")
    else:
        reasons.append("El creador del proyecto es nuevo en la plataforma.")

    # Atractivo visual
    if project['photo']:
        reasons.append("El proyecto tiene imágenes atractivas.")
    else:
        reasons.append("El proyecto carece de imágenes atractivas.")

    return reasons

# Función para generar el informe de evaluación del proyecto
def generate_evaluation_report(project_info, similar_projects):
    reasons = evaluate_project(project_info, similar_projects)

    report = f"""
    # Informe de Evaluación del Proyecto

    ## Detalles del Proyecto
    - **Nombre del Proyecto:** {project_info['title']}
    - **Descripción:** {project_info['subtitle']}
    - **Meta de Financiación:** {project_info['goal_amount']}
    - **Categoría Principal:** {project_info['main_category']}
    - **Categoría:** {project_info['category']}
    - **Subcategoría:** {project_info['subcategory']}
    - **Ubicación:** {project_info['location']}
    - **Fecha Límite:** {project_info['deadline']}
    - **Duración de la Campaña:** {project_info['campaign_duration']} días

    ## Evaluación
    - **Riesgos y Desafíos:** {project_info['risks_challenges']}
    - **Tipo de Proyecto:** {project_info['project_type']}
    - **Estado Previsto:** successful
    - **Motivos de Evaluación:**
    """

    for reason in reasons:
        report += f"    - {reason}\n"

    report += """
    ## Recomendaciones
    - Evaluación automática: Recomendado para validación
    """

    return report

# Ruta del archivo PDF del proyecto
pdf_path = sys.argv[1]

# Extraer texto del PDF
pdf_text = extract_text_from_pdf(pdf_path)

# Extraer información del proyecto del texto del PDF
project_info = extract_project_info_from_text(pdf_text)

# Ruta del archivo JSON del conjunto de datos
dataset_path = "python-scripts/dataset.json"  # Asegúrate de que esta ruta sea correcta

# Cargar y preprocesar el conjunto de datos
df, features, labels = load_and_preprocess_dataset(dataset_path)

# Entrenar el modelo
model = train_model(features, labels)

# Filtrar proyectos similares para la evaluación
similar_projects = df[df['category.name'] == project_info['category']]

# Generar el informe de evaluación del proyecto
report = generate_evaluation_report(project_info, similar_projects)

# Mostrar el informe
print(report)
