<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\PrioridadeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ROTAS DAS TAREFAS
Route::get('/tarefas', [TarefaController::class, 'index']);
Route::get('/tarefas/create', [TarefaController::class, 'create']);
Route::post('/tarefas', [TarefaController::class, 'store']);
Route::get('/tarefas/{id}', [TarefaController::class, 'show']);
Route::get('/tarefas/{id}/edit', [TarefaController::class, 'edit']);
Route::put('/tarefas/{id}', [TarefaController::class, 'update']);
Route::delete('/tarefas/{id}', [TarefaController::class, 'destroy']);

//ROTAS DAS PRIORIDADES
Route::get('/prioridades', [PrioridadeController::class, 'index']);
