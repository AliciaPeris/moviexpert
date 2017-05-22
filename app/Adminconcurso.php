<?php

namespace moviexpert;

use Illuminate\Database\Eloquent\Model;

class Adminconcurso extends Model
{
    //
    //protected $table = 'adminconcursos';
    protected $fillable = [
        'nombre',
        'descripcion',
        'fechainicioinscripcion',
        'fechafininscripcion',
        'fechafinconcurso',
    ];
}
