<?php

namespace moviexpert;

use Illuminate\Database\Eloquent\Model;

class Miembrochat extends Model
{
    //
    protected $fillable = [
        'idchat',
        'idusuario',
        'tipomiembro',
    ];
}
