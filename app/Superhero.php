<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    protected $fillable = [
        'real_name',
        'superhero_name',
        'super_powers', // Make sure to include this if you intend to use it
    ];
}
