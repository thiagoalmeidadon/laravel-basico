<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    
    public function index()
    {
        return "Index m�todo GET";
    }
    
    // trazendo os dados do formulario
    public function criar(Request $request)
    {
        // dd($request['nome']);
        dd($request->all());
        return "Criar m�todo POST";
    }
    
    public function editar()
    {
        return "Editar m�todo PUT";
    }
    
}
