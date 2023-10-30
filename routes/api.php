<?php

use App\Http\Controllers\TarefaController;
use App\Http\Controllers\PrioridadeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//ROTAS DAS TAREFAS
Route::get('/tarefas', [TarefaController::class, 'index']);
Route::post('/tarefas', [TarefaController::class, 'store']);
Route::get('/tarefas/{id}/edit', [TarefaController::class, 'edit']);
Route::put('/tarefas/{id}', [TarefaController::class, 'update']);
Route::delete('/tarefas/{id}', [TarefaController::class, 'destroy']);

//ROTAS DAS PRIORIDADES
Route::get('/prioridades', [PrioridadeController::class, 'index']);