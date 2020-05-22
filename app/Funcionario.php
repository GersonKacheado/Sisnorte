<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    function solicito()
    {
        return $this->hasOne(Solicito::class);
    }

}
