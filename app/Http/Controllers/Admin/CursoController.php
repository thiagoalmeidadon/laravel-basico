<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    // método index lista cursos
    public function index()
    {
        // armazenando os registros na variavel
        $registros = Curso::all();
        return view('admin.cursos.index', compact('registros'));
    }

    // método Adicionar
    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();

        if(isset($dados['publicado']))
        {
            $dados['publicado'] = 'sim';
        }else {
            $dados['publicado'] = 'nao';
        }


        // tratamento de imagem
        if($req->hasFile('imagem'))
        {
            // traz o arquivo e atribui
            $imagem = $req->file('imagem');
            //renomear o arquivo com numero randomico
            $num = rand(1111,9999);
            // configurar o diretorio para salvar
            $dir = "img/cursos/";
            // extensao do arquivo  guessClientExtension() traz a extensao do arquivo
            $ex = $imagem->guessClientExtension();
            // criando o nome do arquivo
            $nomeImagem = "imagem_".$num.".".$ex;

            // mover para o diretorio  1 parametro diretorio 2 parametro o nome do arquivo
            $imagem->move($dir,$nomeImagem);
            // atribui o caminho da imagem
            $dados['imagem'] = $dir."/".$nomeImagem;
        }


        // salvar os dados
        Curso::create($dados);

        // redireciona o usuario para a pagina de cursos
        return redirect()->route('admin.cursos');
    }


    public function editar($id)
    {
        // find vai buscar o registro pelo id
        $registro = Curso::find($id);
        return view('admin.cursos.editar', compact('registro'));
    }


    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        if(isset($dados['publicado']))
        {
            $dados['publicado'] = 'sim';
        }else {
            $dados['publicado'] = 'nao';
        }


        // tratamento de imagem
        if($req->hasFile('imagem'))
        {
            // traz o arquivo e atribui
            $imagem = $req->file('imagem');
            //renomear o arquivo com numero randomico
            $num = rand(1111,9999);
            // configurar o diretorio para salvar
            $dir = "img/cursos/";
            // extensao do arquivo  guessClientExtension() traz a extensao do arquivo
            $ex = $imagem->guessClientExtension();
            // criando o nome do arquivo
            $nomeImagem = "imagem_".$num.".".$ex;

            // mover para o diretorio  1 parametro diretorio 2 parametro o nome do arquivo
            $imagem->move($dir,$nomeImagem);
            // atribui o caminho da imagem
            $dados['imagem'] = $dir."/".$nomeImagem;
        }


        // atualizar os dados pela id fornecida
        Curso::find($id)->update($dados);

        // redireciona o usuario para a pagina de cursos
        return redirect()->route('admin.cursos');
    }

    
    public function deletar($id)
    {
        Curso::find($id)->delete();
        redirect()->route('admin.cursos');
    }



}
