<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{

        public function listar()
        {
            return (object) [
                'nome'=>'thiago',
                'email'=>'thiago@gmail.com'
            ];
        }

}
