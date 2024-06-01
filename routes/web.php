<?php
use App\Http\Controllers\RolController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\SolicitudproyectoController;
use App\Http\Controllers\EvaluarproyectoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectEvaluationController;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/rol', RolController::class);
Route::get('/rol/search', [RolController::class, 'search'])->name('rol.search');

Route::resource('/perfil', PerfilController::class);

Route::resource('/proyecto', App\Http\Controllers\ProyectoController::class);
Route::resource('/recompensa', App\Http\Controllers\RecompensaController::class);
Route::resource('/complemento', App\Http\Controllers\ComplementoController::class);
Route::resource('/historium', App\Http\Controllers\HistoriumController::class);
Route::resource('/preguntafrecuente', App\Http\Controllers\PreguntafrecuenteController::class);
Route::resource('/persona', App\Http\Controllers\PersonaController::class);
Route::resource('/colaborador', App\Http\Controllers\ColaboradorController::class);
Route::resource('/pago', App\Http\Controllers\PagoController::class);
Route::resource('/solicitudproyecto', SolicitudproyectoController::class);
Route::get('/solicitudproyecto/evaluar/{id}', [SolicitudproyectoController::class, 'evaluar'])->name('solicitudproyecto.evaluar');
Route::get('/evaluarproyecto/{id}/generate-evaluation-report', [ProjectEvaluationController::class, 'generateEvaluationReport'])->name('evaluarproyecto.generateEvaluationReport');

Route::resource('/evaluarproyecto', EvaluarproyectoController::class);
Route::get('evaluarproyecto/{id}/download', [EvaluarproyectoController::class, 'downloadProjectDocument'])->name('evaluarproyecto.download');
Route::get('evaluarproyecto/{id}/evaluate', [EvaluarproyectoController::class, 'evaluate'])->name('evaluarproyecto.evaluate');
Route::post('evaluarproyecto/{id}/storeEvaluation', [EvaluarproyectoController::class, 'storeEvaluation'])->name('evaluarproyecto.storeEvaluation');
Route::get('/evaluarproyecto/search', [EvaluarproyectoController::class, 'search'])->name('evaluarproyecto.search');
Route::get('evaluarproyecto/{id}/generate-evaluation', [ProjectEvaluationController::class, 'evaluarproyecto.generateEvaluationReport'])->name('evaluarproyecto.generate-evaluation');

Route::resource('/validacionproyecto', App\Http\Controllers\ValidacionproyectoController::class);
Route::resource('/finalizacionproyecto', App\Http\Controllers\FinalizacionproyectoController::class);
Route::resource('/pagopatrocinador', App\Http\Controllers\PagoPatrocinadorController::class);
Route::resource('/pagocreador', App\Http\Controllers\PagoCreadorController::class);
Route::resource('/proyecto', App\Http\Controllers\ProyectoController::class);
Route::resource('/estado', App\Http\Controllers\EstadoController::class);


