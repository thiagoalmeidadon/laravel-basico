<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function entrar(Request $req)
    {
        $dados = $req->all();

        // verificacao de login de usuario
        if(Auth::attempt([ 'email'=>$dados['email'], 'password' => $dados['senha'] ]))
        {
            return redirect()->route('admin.cursos');
        } else {
            return redirect()->route('login.index');
        }


    }


    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }

}
