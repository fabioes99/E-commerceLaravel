<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $table = 'events';

    public $timestamps = false;

    protected $softDelete = false;

    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = [
       'date'
    ];

}
