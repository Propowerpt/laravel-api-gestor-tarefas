<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\PrioridadeController;
use App\Http\Controllers\TesteController;
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

//ROTAS DE AUTENTICAÇÃO
Route::post('/auth', [AuthController::class, 'login']);

//ROTAS DAS TAREFAS
Route::get('/tarefas', [TarefaController::class, 'index']);
Route::post('/tarefas', [TarefaController::class, 'store']);
Route::get('/tarefas/{id}/edit', [TarefaController::class, 'edit']);
Route::put('/tarefas/{id}', [TarefaController::class, 'update']);
Route::delete('/tarefas/{id}', [TarefaController::class, 'destroy']);
Route::post('/tarefas/{id}/claim', [TarefaController::class, 'claimTask']);


//ROTAS DAS PRIORIDADES
Route::get('/prioridades', [PrioridadeController::class, 'index']);


//ROTAS PARA TESTES
Route::get('/teste', [TesteController::class, 'index']);