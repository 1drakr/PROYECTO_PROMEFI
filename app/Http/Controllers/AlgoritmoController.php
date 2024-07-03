<?php

namespace App\Http\Controllers;

use App\Models\Algoritmo;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AlgoritmoController extends Controller
{
    public function index()
    {

        return view('algoritmo.index');
    }

    public function create()
    {
        return view('algoritmo.result');
    }

    // public function store(Request $request)
    // {
    //     return view('algoritmo.index');
    // }

    public function show($id)
    {
        $client = new Client();
        $response = $client->post('http://127.0.0.1:5000/predict', [
            'json' => [
                'categoria_master' => 'teatros',
                'nombre_de_la_categoria' => 'obras',
                'pais' => 'US',
                'Objetivo_en_USD' => 5000,
                'Lanzado' => '2024-07-02',
                'propaganda' => 'Este es un proyecto innovador de cine y vídeo en la categoría de comedia.'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return view('algoritmo.result', compact('result'));
    }

    // public function edit($id)
    // {
    //     return view('algoritmo.index');
    // }

    // public function update(Request $request, Algoritmo $algoritmo)
    // {
    //     return view('algoritmo.index');
    // }

    // public function destroy($id)
    // {
    //     return view('algoritmo.index');
    // }

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

        $result = json_decode($response->getBody()->getContents(), true);

        return view('algoritmo.result', compact('result'));
    }
}
