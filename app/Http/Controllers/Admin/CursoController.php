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


}
