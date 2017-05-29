<?php

namespace moviexpert;

use Illuminate\Database\Eloquent\Model;

class votosconcurso extends Model
{
    //
    protected $fillable = [
        'id',
        'idcortoconcurso',
        'idusuario',
        'voto',
        'fechavoto',
    ];
}
