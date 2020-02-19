<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class HomeController extends Controller
{
    public function index()
    {
        // adiciona paginação no laravel paginate(numero de itens por pagina)
        // é necessário adicionar os itens de paginação na view 
        $cursos = Curso::paginate(3);
        return view('home', compact('cursos'));
    }
}
