<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    public function userSewa(){
        return $this->hasMany('App\Models\UserSewa');
    }

    public function role(){
        return $this->hasOne('App\Models\Roles');
    }

    protected $dates = [
        'deleted_at'
    ];
}
