<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\TarefaCollection;
use App\Http\Resources\TarefaResource;
use App\Http\Resources\TarefaUserResource;
use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\TarefaUser;

class TarefaController extends Controller
{
    public function index(Request $request)
    {
        $termoDePesquisa = $request->input('titulo');

        if ($termoDePesquisa) {
            $tarefasJson = TarefaResource::collection(Tarefa::where('titulo', 'like', '%' . $termoDePesquisa . '%')->get());
        } else {
            //$tarefasJson = new TarefaCollection(Tarefa::all());
            $tarefasJson = TarefaResource::collection(Tarefa::all());
        }
        return $tarefasJson;
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $tarefa = Tarefa::create($data);
        return new TarefaResource($tarefa);
    }

    public function edit($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        return new TarefaResource($tarefa);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->update($data);
        return new TarefaResource($tarefa);
    }

    public function destroy($id)
    {
        if (Tarefa::destroy($id)) {
            return response()->json(['mensagem' => 'Apagado com sucesso']);
        } else {
            return response()->json(['mensage' => 'Falha ao apagar a tarefa']);
        }
    }

    public function claimTask($id)
    {
        $utilizador_id = 1;
        //firstOrCreate cria caso ainda não exista
        $tarefaUser = TarefaUser::firstOrCreate([
            'user_id' => $utilizador_id,
            'tarefa_id' => $id
        ]);
        if ($tarefaUser->wasRecentlyCreated) {
            return new TarefaUserResource($tarefaUser);
        } else {
            return response()->json(['error' => 'O utilizador já está atribuído a esta tarefa'], 400);
        }
    }
}
