<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duty extends Model
{
    //
    protected $fillable = [
        'id',
        'user_id',
        'date',
        'day',
        'hour'
    
    ];

}
