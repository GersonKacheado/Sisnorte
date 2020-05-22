<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    
    function solicito()
    {
        return $this->hasOne(Solicito::class);
    }
}
