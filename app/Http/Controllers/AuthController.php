<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return "login teste";
    }

    public function logout(){
        return "logout teste";
    }
}
