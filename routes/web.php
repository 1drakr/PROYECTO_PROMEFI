<?php
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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas accesibles por el rol Administrador
Route::group(['middleware' => ['auth', 'role:Administrador']], function () {
    Route::resource('/rol', RolController::class);
    Route::get('/rol/search', [RolController::class, 'search'])->name('rol.search');
    Route::resource('/perfil', PerfilController::class);
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
    Route::get('/evaluarproyecto/{id}/generate-evaluation-report', [ProjectEvaluationController::class, 'generateEvaluationReport'])->name('evaluarproyecto.generateEvaluationReport');
    Route::resource('/evaluarproyecto', EvaluarproyectoController::class);
    Route::get('evaluarproyecto/{id}/download', [EvaluarproyectoController::class, 'downloadProjectDocument'])->name('evaluarproyecto.download');
    Route::get('evaluarproyecto/{id}/evaluate', [EvaluarproyectoController::class, 'evaluate'])->name('evaluarproyecto.evaluate');
    Route::post('evaluarproyecto/{id}/storeEvaluation', [EvaluarproyectoController::class, 'storeEvaluation'])->name('evaluarproyecto.storeEvaluation');
    Route::get('/evaluarproyecto/search', [EvaluarproyectoController::class, 'search'])->name('evaluarproyecto.search');
    Route::get('evaluarproyecto/{id}/generate-evaluation', [ProjectEvaluationController::class, 'generateEvaluationReport'])->name('evaluarproyecto.generate-evaluation');
    Route::resource('/validacionproyecto', ValidacionproyectoController::class);
    Route::resource('/finalizacionproyecto', FinalizacionproyectoController::class);
    Route::get('finalizacionproyecto/{id}/apelacion', [FinalizacionproyectoController::class, 'apelacion'])->name('finalizacionproyecto.apelacion');
    Route::post('finalizacionproyecto/{id}/storeApelacion', [FinalizacionproyectoController::class, 'storeApelacion'])->name('finalizacionproyecto.storeApelacion');
    Route::resource('/pagopatrocinador', PagoPatrocinadorController::class);
    Route::resource('/pagocreador', PagoCreadorController::class);
    Route::resource('/estado', EstadoController::class);
});

// Rutas accesibles por el rol Evaluador
Route::group(['middleware' => ['auth', 'role:Evaluador']], function () {
    Route::resource('/evaluarproyecto', EvaluarproyectoController::class);
    Route::get('evaluarproyecto/{id}/download', [EvaluarproyectoController::class, 'downloadProjectDocument'])->name('evaluarproyecto.download');
    Route::get('evaluarproyecto/{id}/evaluate', [EvaluarproyectoController::class, 'evaluate'])->name('evaluarproyecto.evaluate');
    Route::post('evaluarproyecto/{id}/storeEvaluation', [EvaluarproyectoController::class, 'storeEvaluation'])->name('evaluarproyecto.storeEvaluation');
    Route::get('/evaluarproyecto/search', [EvaluarproyectoController::class, 'search'])->name('evaluarproyecto.search');
    Route::get('evaluarproyecto/{id}/generate-evaluation', [ProjectEvaluationController::class, 'generateEvaluationReport'])->name('evaluarproyecto.generate-evaluation');
});

// Rutas accesibles por el rol Creador
Route::group(['middleware' => ['auth', 'role:Creador']], function () {
    Route::resource('/proyecto', ProyectoController::class);
    Route::get('/solicitudproyecto/evaluar/{id}', [SolicitudproyectoController::class, 'evaluar'])->name('solicitudproyecto.evaluar');
});

// Rutas accesibles por el rol Usuario
Route::group(['middleware' => ['auth', 'role:Usuario']], function () {
    Route::resource('/proyecto', ProyectoController::class);Route::resource('/proyecto', ProyectoController::class);
});

// Rutas accesibles por el rol Donador
Route::group(['middleware' => ['auth', 'role:Donador']], function () {
    Route::resource('/pagopatrocinador', PagoPatrocinadorController::class);
    Route::resource('/pagocreador', PagoCreadorController::class);
});
