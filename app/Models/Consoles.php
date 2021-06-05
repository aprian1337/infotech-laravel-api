<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consoles extends Model
{
    use HasFactory;

    public function status(){
        return $this->hasOne('App\Models\SewaStatus');
    }


    public function userSewa(){
        return $this->hasMany('App\Models\SewaStatus');
    }

    protected $dates = [
        'deleted_at'
    ];
}
