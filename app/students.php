<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    // 
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'age',
        'grade',
        'attendance',
        'contact'
    ];

     
}
