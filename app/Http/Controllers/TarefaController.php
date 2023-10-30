<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\TarefaCollection;
use App\Http\Resources\TarefaResource;
use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    public function index(Request $request)
    {
		$termoDePesquisa = $request->input('titulo');

		if ($termoDePesquisa) {
			$tarefasJson = TarefaResource::collection(Tarefa::where('titulo', 'like', '%'.$termoDePesquisa.'%')->get());
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

    public function edit($id){
        $tarefa=Tarefa::findOrFail($id);
        return new TarefaResource($tarefa);
    }

    public function update(Request $request,$id){
        $data = $request->all();
        $tarefa=Tarefa::findOrFail($id);
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
    /*
    public function update(Request $request,$id){
        return redirect('/produtos')->with("msg","Produto ".$produto->nome." atualizado com sucesso");

    }

    */
}
