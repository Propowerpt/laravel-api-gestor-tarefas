<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
}
