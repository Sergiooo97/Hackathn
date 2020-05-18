<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    
    protected $fillable = [
        'proyectoName','equipoNumber','modifico', 'categoria','problematica','innovacion','propuestaValor','canalesDistribucion','segmentoMercado', 'recusosClave', 'sociosClave',
    ];

}
