<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSewa extends Model
{
    use HasFactory;

    public function consoles(){
        return $this->hasMany('App\Models\Consoles');
    }

    public function user(){
        return $this->belongsTo('App\Models\Users');
    }

    protected $dates = [
        'deleted_at'
    ];
}
