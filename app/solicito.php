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

    protected $fillable = [
        'users_id', 'tipo', 'estado', 'municipio','bairro','rua','numero','complemento','data','aceito',
    ];

    public function getDataAttribute()
	{
    $data = explode('-', $this->attributes['data']);
	if(count($data) != 3)
        return "";
    $dia_hora = explode(' ', $data[2]);

    $data = $dia_hora[0] .'/' . $data[1] . '/' . $data[0];
     return $data;
    
    }
}
//$data = $data[2] .'/' . $data[1] . '/' . $data[0]; //.'às'. $data[3] . $data[4] . $data[5];
