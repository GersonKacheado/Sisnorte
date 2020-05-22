<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicito extends Model
{
    function users()
    {
        return $this->belongsTo('App\User');
    }

    function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }

    function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

  /*  protected $fillable = [
        'users_id', 'tipo', 'estado', 'municipio','bairro','rua','numero','complemento','data','aceito',
    ];*/
}
