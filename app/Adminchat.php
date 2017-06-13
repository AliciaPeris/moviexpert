<?php

namespace moviexpert;

use Illuminate\Database\Eloquent\Model;
use DB;
class Adminchat extends Model
{
    //
    //protected $table = 'adminchats';
    protected $fillable = [
        'nombre',
        'descripcion',
        'numguionistas',
        'numactores',
        'numdirectores',
        'numcamaras',
        'creadorchat',
    ];
    static public function nombre($nombre){

      return DB::select("SELECT * FROM adminchats WHERE nombre like '".$nombre."%';");
   }
  

}
