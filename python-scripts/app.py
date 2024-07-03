from flask import Flask, request, jsonify
import pickle
import pandas as pd
import joblib
import os

app = Flask(__name__)

features = ["categoria_master", "nombre_de_la_categoria", "pais", "Objetivo_en_USD", "Año_lanzado", "propaganda"]

@app.route("/")
def index():
    return 'pagina'

@app.route("/predict", methods=['POST'])
def predict():
    try:
        data = request.json
        df = pd.DataFrame([data])

        # Utilizar ruta relativa al script
        model_path = os.path.join(os.path.dirname(__file__), 'best_model.pkl')
        print("Model path:", model_path)  # Agregar impresión de la ruta del modelo
        Cls = joblib.load(model_path)

        # Preprocesar los datos de entrada
        df['Lanzado'] = pd.to_datetime(df['Lanzado'])
        df['Año_lanzado'] = df['Lanzado'].dt.year
        df = df.drop(columns='Lanzado')

        for col in features:
            if col not in df.columns:
                df[col] = 0

        prediction = Cls.predict_proba(df[features])[0][1] * 100

        return jsonify({'prediction': prediction})
    except Exception as e:
        return jsonify({'error': str(e)}), 500

if __name__ == '__main__':
    app.run(debug=True)
