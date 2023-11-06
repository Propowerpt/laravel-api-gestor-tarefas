<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Prioridade;
use App\Models\Tarefa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TesteController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        if ($user->tokenCan('roleAdmin')) {
            return "isto é um administrado";
        } else if ($user->tokenCan('roleUser')) {
            return "isto é um utilizador normal";
        }
    }

    public function indexAdmin(){
        return "Entrei no indexAdmin";
    }

    public function indexUser(){
        return "Entrei no indexUser";
    }

    public function getTeste(){
        /*
        $tarefa = Tarefa::find(1);
        $prioridade = $tarefa->prioridade;
        dump($prioridade->nome);die();
        */
        /*
        $prioridade = Prioridade::find(3);
        $tarefas=$prioridade->tarefas;
        dump($tarefas);die();
        */

        /*
        $user=User::find(1);
        $tarefas=$user->tarefas;
        dump($tarefas);die();
        */

        
        $tarefa=Tarefa::find(2);
        $users=$tarefa->users;
        dump($users);die();
        
    }
}
