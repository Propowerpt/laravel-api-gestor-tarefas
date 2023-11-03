<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        //NO POSTMAN PREENCHER cOM EMAIL VALIDO E PASSWORD POR ALGUMA RAZAO O POSTMAN NÃO DEVOLVE 
        //ERRO CASO OS CAMPOS NÃO ESTEJAM VALIDOS
        if (Auth::attempt($credentials)) {
            $token = $request->user()->createToken('invoice');
            return response()->json(['sucesso' => 'Entrada autorizada','token' => $token->plainTextToken], 200);
        }else{
            return response()->json(['error' => 'Credenciais erradas'], 400);
        }
    }

    public function logout(){
        return "logout teste";
    }
}
