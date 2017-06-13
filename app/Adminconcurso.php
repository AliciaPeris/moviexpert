<?php

namespace moviexpert;

use Illuminate\Database\Eloquent\Model;
use DB;
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
    static public function nombre($nombre){

      return DB::select("SELECT * FROM adminconcursos WHERE nombre like '".$nombre."%';");
   }
}
