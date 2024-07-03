<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Perfil;
use App\Models\RespuestaComentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends Controller
{
    public function index()
    {
        $comentarios = Comentario::with('respuestas')->paginate(10);

        return view('comentario.index', compact('comentarios'))
            ->with('i', (request()->input('page', 1) - 1) * $comentarios->perPage());
    }

    public function create()
    {
        $comentario = new Comentario();
        $perfil = Perfil::where('id_users', Auth::id())->first();
        return view('comentario.create', compact('comentario', 'perfil'));
    }

    public function store(Request $request)
    {
        request()->validate(Comentario::$rules);

        $perfil = Perfil::where('id_users', Auth::id())->first();
        $comentario = Comentario::create([
            'id_proyecto' => $request->id_proyecto,
            'id_perfil' => $perfil->id_perfil,
            'contenido' => $request->contenido,
        ]);

        return redirect()->route('comentario.index')
            ->with('success', 'Comentario created successfully.');
    }

    public function show($id)
    {
        $comentario = Comentario::with('respuestas')->find($id);

        return view('comentario.show', compact('comentario'));
    }

    public function edit($id)
    {
        $comentario = Comentario::find($id);
        $perfil = Perfil::where('id_users', Auth::id())->first();
        return view('comentario.edit', compact('comentario', 'perfil'));
    }

    public function update(Request $request, $id)
    {
        request()->validate(Comentario::$rules);

        $comentario = Comentario::find($id);
        $comentario->update($request->all());

        return redirect()->route('comentarios.index')
            ->with('success', 'Comentario actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $comentario = Comentario::find($id)->delete();

        return redirect()->route('comentario.index')
            ->with('success', 'Comentario eliminado exitosamente');
    }

    public function createResponse($comentario_id)
    {
        $respuesta = new RespuestaComentario();
        $respuesta->id_comentario = $comentario_id;
        $perfil = Perfil::where('id_users', Auth::id())->first();
        return view('respuesta.create_response', compact('respuesta', 'perfil'));
    }

    public function storeResponse(Request $request)
    {
        request()->validate(RespuestaComentario::$rules);

        $perfil = Perfil::where('id_users', Auth::id())->first();
        $respuesta = RespuestaComentario::create([
            'id_comentario' => $request->id_comentario,
            'id_perfil' => $perfil->id_perfil,
            'contenido' => $request->contenido,
        ]);

        return redirect()->route('comentario.index')
            ->with('success', 'Respuesta created successfully.');
    }

    public function editResponse($id)
    {
        $respuesta = RespuestaComentario::find($id);
        $perfil = Perfil::where('id_users', Auth::id())->first();
        return view('respuesta.edit', compact('respuesta', 'perfil'));
    }

    public function updateResponse(Request $request, $id)
    {
        request()->validate(RespuestaComentario::$rules);

        $respuesta = RespuestaComentario::find($id);
        $respuesta->update($request->all());

        return redirect()->route('comentarios.index')
            ->with('success', 'Respuesta actualizada exitosamente.');
    }

    public function destroyResponse($id)
    {
        $respuesta = RespuestaComentario::find($id);
        $respuesta->delete();

        return redirect()->route('comentarios.index')
            ->with('success', 'Respuesta eliminada exitosamente.');
    }

}
