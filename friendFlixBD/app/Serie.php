<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public function users(){
        return $this->hasMany('App\User');
    }
}
