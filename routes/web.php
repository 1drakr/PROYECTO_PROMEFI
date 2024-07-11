<?php

use App\Http\Controllers\AlgoritmoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\SolicitudproyectoController;
use App\Http\Controllers\EvaluarproyectoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectEvaluationController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\PagoPatrocinadorController;
use App\Http\Controllers\PagoCreadorController;
use \App\Http\Controllers\HomeController;
use App\Http\Controllers\RecompensaController;
use App\Http\Controllers\ComplementoController;
use App\Http\Controllers\HistoriumController;
use App\Http\Controllers\PreguntafrecuenteController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\FinalizacionproyectoController;
use  App\Http\Controllers\ValidacionproyectoController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\PredictionController;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('perfils/edit', [PerfilController::class, 'editUsuario'])->name('perfils.edit');
Route::patch('perfils/{perfil}', [PerfilController::class, 'updateUsuario'])->name('perfils.update');

// Rutas accesibles por el rol Administrador
Route::group(['middleware' => ['auth', 'role:Administrador']], function () {
    Route::resource('/rol', RolController::class);
    Route::get('/rol/search', [RolController::class, 'search'])->name('rol.search');

    Route::resource('/perfil', PerfilController::class);
    Route::get('perfil/asignarRolForm/{id}', [PerfilController::class, 'asignarRolForm'])->name('perfil.asignarRolForm');
    Route::post('perfil/asignarRol/{id}', [PerfilController::class, 'asignarRol'])->name('perfil.asignarRol');

    Route::resource('/proyecto', ProyectoController::class);
    Route::post('proyecto/{id}/finalizar', [ProyectoController::class, 'finalizar'])->name('proyecto.finalizar');
    Route::resource('/recompensa', RecompensaController::class);
    Route::resource('/complemento', ComplementoController::class);
    Route::resource('/historium', HistoriumController::class);
    Route::resource('/preguntafrecuente', PreguntafrecuenteController::class);
    Route::resource('/persona', PersonaController::class);
    Route::resource('/colaborador', ColaboradorController::class);
    Route::resource('/pago', PagoController::class);
    Route::resource('/solicitudproyecto', SolicitudproyectoController::class);
    Route::post('/solicitudproyecto/storeEvaluacion/{id}', [SolicitudproyectoController::class, 'storeEvaluacion'])->name('solicitudproyecto.storeEvaluacion');
    Route::get('/solicitudproyecto/evaluar/{id}', [SolicitudproyectoController::class, 'evaluar'])->name('solicitudproyecto.evaluar');

    Route::resource('/evaluarproyecto', EvaluarproyectoController::class);
    Route::get('evaluarproyecto/{id}/download', [EvaluarproyectoController::class, 'downloadProjectDocument'])->name('evaluarproyecto.download');
    Route::get('evaluarproyecto/{id}/evaluate', [EvaluarproyectoController::class, 'evaluate'])->name('evaluarproyecto.evaluate');
    Route::post('evaluarproyecto/{id}/storeEvaluation', [EvaluarproyectoController::class, 'storeEvaluation'])->name('evaluarproyecto.storeEvaluation');
    Route::get('/evaluarproyecto/search', [EvaluarproyectoController::class, 'search'])->name('evaluarproyecto.search');
    Route::resource('/validacionproyecto', ValidacionproyectoController::class);
    Route::resource('/finalizacionproyecto', FinalizacionproyectoController::class);
    Route::get('finalizacionproyecto/{id}/apelacion', [FinalizacionproyectoController::class, 'apelacion'])->name('finalizacionproyecto.apelacion');
    Route::post('finalizacionproyecto/{id}/storeApelacion', [FinalizacionproyectoController::class, 'storeApelacion'])->name('finalizacionproyecto.storeApelacion');
    Route::resource('/pagopatrocinador', PagoPatrocinadorController::class);
    Route::resource('/pagocreador', PagoCreadorController::class);
    Route::resource('/estado', EstadoController::class);
    Route::resource('/algoritmo', AlgoritmoController::class);
    Route::get('/algoritmo/predict', [AlgoritmoController::class, 'predict'])->name('algoritmo.predict');

    // COMENTARIO
    Route::resource('comentario', ComentarioController::class);
    Route::get('comentario/{comentario}/respuesta', [ComentarioController::class, 'createResponse'])->name('respuesta.create');
    Route::post('comentario/respuesta', [ComentarioController::class, 'storeResponse'])->name('respuesta.store');
    Route::get('respuesta/{respuesta}/edit', [ComentarioController::class, 'editResponse'])->name('respuesta.edit');
    Route::patch('respuesta/{respuesta}', [ComentarioController::class, 'updateResponse'])->name('respuesta.update');
    Route::delete('respuesta/{respuesta}', [ComentarioController::class, 'destroyResponse'])->name('respuesta.destroy');
});

// Rutas accesibles por el rol Evaluador
Route::group(['middleware' => ['auth', 'role:Evaluador']], function () {
    Route::resource('/evaluarproyecto', EvaluarproyectoController::class);
    Route::get('evaluarproyecto/{id}/download', [EvaluarproyectoController::class, 'downloadProjectDocument'])->name('evaluarproyecto.download');
    Route::get('evaluarproyecto/{id}/evaluate', [EvaluarproyectoController::class, 'evaluate'])->name('evaluarproyecto.evaluate');
    Route::post('evaluarproyecto/{id}/storeEvaluation', [EvaluarproyectoController::class, 'storeEvaluation'])->name('evaluarproyecto.storeEvaluation');
    Route::get('/evaluarproyecto/search', [EvaluarproyectoController::class, 'search'])->name('evaluarproyecto.search');
});

// Rutas accesibles por el rol Creador y  Usuario
Route::group(['middleware' => ['auth', 'role:Creador|Usuario']], function () {
    Route::resource('/proyecto', ProyectoController::class);
    Route::resource('/recompensa', RecompensaController::class);
    Route::resource('/pago', PagoController::class); // Ruta para pagos
});

// Rutas accesibles por el rol Donador
Route::group(['middleware' => ['auth', 'role:Donador']], function () {
    Route::resource('/pagopatrocinador', PagoPatrocinadorController::class);
    Route::resource('/pagocreador', PagoCreadorController::class);
});
