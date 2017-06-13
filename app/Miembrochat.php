<?php

namespace moviexpert;

use Illuminate\Database\Eloquent\Model;
use DB;
class Miembrochat extends Model
{
    //
    protected $fillable = [
        'idchat',
        'idusuario',
        'tipomiembro',
    ];
    static public function tipomiembro($tipomiembro){

      return DB::select("SELECT * FROM miembrochats WHERE tipomiembro like '".$tipomiembro."%';");
   }
}
