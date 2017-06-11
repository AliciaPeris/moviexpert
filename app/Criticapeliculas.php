<?php

namespace moviexpert;

use Illuminate\Database\Eloquent\Model;

class Criticapeliculas extends Model
{
    //
    protected $fillable = [
        'id', 'idpelicula', 'idusuario','critica','fechavoto'];


     static public function findByPeli($idpeli) {
      return Criticapeliculas::where('idpelicula', '=', $idpeli)->orderBy('id', 'DESC')->get();
    }
    static public function findByPeliAndUser($idpeli,$idusuario) {
     return  Votospeliculas::where('idpelicula', '=', $idpeli)->where('idusuario', '=', $idusuario)->select('id')->take(1)->get();
   }
}
