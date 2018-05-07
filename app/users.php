<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table ="users";
    protected $fillable = [
        'id', 'name', 'email','password','remember_token','created_at','update_at',
    ];
}
