<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PredictionController extends Controller
{
    public function index() {
        return view('mlalgoritmo.result');
    }
    public function predict(Request $request)
    {
        $client = new Client();
        $response = $client->post('https://http://127.0.0.1:5000//predict', [
            'json' => [
                'categoria_master' => 'teatros',
                'nombre_de_la_categoria' => 'obras',
                'pais' => 'US',
                'Objetivo_en_USD' => 5000,
                'Lanzado' => '2024-07-02',
                'propaganda' => 'Este es un proyecto innovador de cine y vídeo en la categoría de comedia.'
            ]
        ]);

        $prediction = json_decode($response->getBody()->getContents(), true);

        return view('mlalgoritmo.result', ['prediction' => $prediction['prediction']]);
    }
}
