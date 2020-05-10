<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solicito extends Model
{
    function cliente()
    {
        return $this->belongsTo('App\User');
    }
}
