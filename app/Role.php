<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'id', 'name', 'description',
    ];

//    public function roleUser()
//    {
//        return $this->belongsToMany('App\User', 'role_id', 'id');
//    }
}


