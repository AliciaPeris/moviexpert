<?php

namespace moviexpert;

use Illuminate\Database\Eloquent\Model;
use DB;
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
        'corto',
    ];
    static public function nombre($nombre){

      return DB::select("SELECT * FROM participanconcursos WHERE titulo like '".$nombre."%';");
   }
}
