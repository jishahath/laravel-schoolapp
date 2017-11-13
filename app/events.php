<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    //
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'date'
    ];

}
