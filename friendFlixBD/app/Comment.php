<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Comment as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Comment extends Model
{
    public function users(){
        return $this->belongsTo('App\User');
    }
}
