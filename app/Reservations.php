<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    /**
     * @var string
     */
    protected $table= "reservation";
    
    protected $fillable= [
        'date','time','people','message'
    ];
}
