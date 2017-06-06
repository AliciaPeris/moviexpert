<?php

namespace moviexpert;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //
    protected $fillable = [
        'id',
        'usuario',
        'comentario',
    ];
}
