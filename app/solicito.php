<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solicito extends Model
{
    function users()
    {
        return $this->belongsTo('App\User');
    }
}
