<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    
    public function index()
    {
        $contatos = [
            (object)['nome'=>'Joao', 'email'=>'joao@email.com'],
            (object)['nome'=>'maria', 'email'=>'maria@email.com']
        ];
        
        // método compact()  permite acesso da view aos dados
        return view('contato.index', compact('contatos'));
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
