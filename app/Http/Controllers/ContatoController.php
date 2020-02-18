<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// outra maneira de instanciar o objeto é importando ele no topo
use \App\Contato;

class ContatoController extends Controller
{

    public function index()
    {
        $contatos = [
            (object)['nome'=>'Joao', 'email'=>'joao@email.com'],
            (object)['nome'=>'maria', 'email'=>'maria@email.com']
        ];

        // uma das maneiras de instanciar um objeto contato model
        // $contato = new \App\Contato();

        $contato = new Contato();

        // listar somente o nome 
        $rec = $contato->listar()->nome;


        // metodo compact()  permite acesso da view aos dados
        return view('contato.index', compact('contatos', 'rec'));
    }

    // trazendo os dados do formulario
    public function criar(Request $request)
    {
        // dd($request['nome']);
        dd($request->all());
        return "Criar metodo POST";
    }

    public function editar()
    {
        return "Editar metodo PUT";
    }

}
