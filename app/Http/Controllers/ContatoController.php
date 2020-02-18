<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    
    public function index()
    {
        return "Index método GET";
    }
    
    // trazendo os dados do formulario
    public function criar(Request $request)
    {
        // dd($request['nome']);
        dd($request->all());
        return "Criar método POST";
    }
    
    public function editar()
    {
        return "Editar método PUT";
    }
    
}
