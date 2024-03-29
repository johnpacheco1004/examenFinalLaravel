<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'fnIndex'] ) ->name('xIndex');
Route::post('/', [PagesController::class, 'fnRegistrar'] ) ->name('Estudiante.xRegistrar');
Route::put('/actualizar/{id}', [PagesController::class, 'fnUpdate'] ) ->name('Estudiante.xUpdate');
Route::get('/actualizar/{id}', [PagesController::class, 'fnEstActualizar'])->name('Estudiante.xActualizar');
Route::delete('/eliminar/{id}', [PagesController::class, 'fnEliminar'])->name('Estudiante.xEliminar');
Route::get('/detalle/{id}', [PagesController::class, 'fnEstDetalle'])->name('Estudiante.xDetalle');
Route::get('/galeria/{numero?}', [PagesController::class, 'fnGaleria'])->where('numero', '[0-9]+')->name('xGaleria');
Route::get('/lista',[PagesController::class, 'fnLista'] )->name('xLista');



Route::get('/curso',[PagesController::class, 'fnCurso'] )->name('xCurso');
Route::post('/', [PagesController::class, 'fnRegistrarCurso'] ) ->name('Curso.xRegistrarCurso');
Route::put('/actualizarCurso/{id}', [PagesController::class, 'fnUpdateCurso'] ) ->name('Curso.xUpdateCurso');
Route::get('/actualizarCurso/{id}', [PagesController::class, 'fnCurActualizar'])->name('Curso.xActualizarCurso');
Route::delete('/eliminarCurso/{id}', [PagesController::class, 'fnEliminarCurso'])->name('Curso.xEliminarCurso');
Route::get('/detalleCurso/{id}', [PagesController::class, 'fnCurDetalle'])->name('Curso.xDetalleCurso');