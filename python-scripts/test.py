import requests

url = 'http://127.0.0.1:5000/predict'

data = {
    'categoría_master': 'teatros',
    'nombre de la categoría': 'obras',
    'Pais': 'US',
    'Objetivo en USD\n': 5000,
    'Lanzado': '2024-07-02',
    'propaganda': 'Este es un proyecto innovador de cine y vídeo en la categoría de comedia.'
}

response = requests.post(url, json=data)

try:
    response_json = response.json()
    print(response_json)
except requests.exceptions.JSONDecodeError:
    print("La respuesta no es un JSON válido:", response.text)
