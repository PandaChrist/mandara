<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientr extends Model
{
    protected $fillable= [
        'name','email','phone'
    ];
}
