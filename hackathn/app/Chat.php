<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'usuario','mensaje','equipoNumber','id_re','id_env','avatar',
    ];
}
