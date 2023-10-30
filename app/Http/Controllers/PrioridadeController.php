<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PrioridadeCollection;
use App\Http\Resources\PrioridadeResource;
use Illuminate\Http\Request;
use App\Models\Prioridade;

class PrioridadeController extends Controller
{
    public function index(Request $request)
    {
        //$prioridadesJson = PrioridadeResource::collection(Prioridade::all());
        $prioridadesJson = new PrioridadeCollection(Prioridade::all());
        return $prioridadesJson;
    }
}
