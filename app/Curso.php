<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    // definir os fillables para que o laravel saiba quais campos pode armazenar em massa
    protected $fillable = [
        'titulo','descricao','valor','imagem','publicado'
    ];
}
