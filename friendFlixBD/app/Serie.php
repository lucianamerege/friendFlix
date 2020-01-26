<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Serie as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Serie extends Model
{
    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
