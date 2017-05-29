<?php

namespace moviexpert;

use Illuminate\Database\Eloquent\Model;

class participanconcurso extends Model
{
    //
    protected $fillable = [
        'id',
        'idconcurso',
        'idusuario',
        'otrosparticipantes',
        'titulo',
        'descripcion',
    ];
}
