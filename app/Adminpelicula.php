<?php

namespace moviexpert;

use Illuminate\Database\Eloquent\Model;

class Adminpelicula extends Model
{
    //
    //protected $table = 'adminpeliculas';
    protected $fillable = [
        'titulo', 'anio', 'pais','director','guion','reparto','sinopsis','trailer','cartelera','genero',
    ];
}
