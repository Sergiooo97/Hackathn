<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idea extends Model
{
    protected $fillable = [
        'tituloIdea','userName','equipoNumber','descripcion', 
    ];
}
