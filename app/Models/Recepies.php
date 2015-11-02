<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recepies extends Model
{
    protected $table = 'recepies';

    public function user()
    {
        return $this->belongsTo('App\User', 'users_id');
    }
}
