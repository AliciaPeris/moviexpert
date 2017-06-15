<?php

namespace moviexpert;

use Illuminate\Database\Eloquent\Model;
use DB;
class Votospeliculas extends Model
{
    //
    protected $fillable = [
        'id',
        'idpelicula',
        'idusuario',
        'idusuario',
        'voto',
      ];
    static public function avgVotos($idpeli) {
       return Votospeliculas::where('idpelicula', '=', $idpeli)->avg('voto');
     }
    static public function countVotos($idpeli){
        return Votospeliculas::where('idpelicula', '=', $idpeli)->count();
    }
    static public function checkVotos($idpeli,$idusuario){
      return Votospeliculas::where('idpelicula', '=', $idpeli)->where('idusuario', '=', $idusuario)->count();
    }
    static public function findByPeliAndUser($idpeli,$idusuario) {
     return  Votospeliculas::where('idpelicula', '=', $idpeli)->where('idusuario', '=', $idusuario)->select('id')->take(1)->get();
   }
   static public function mediaPeliculas(){
     return DB::select('select * ,(select avg(voto) from `votospeliculas` as `votos` where votos.idpelicula=pelis.id ) as `media` from `adminpeliculas` as `pelis` order by `titulo`');
   }
   static public function top10(){
     return DB::select('select * ,(select avg(voto) from `votospeliculas` as `votos` where votos.idpelicula=pelis.id ) as `media` from `adminpeliculas` as `pelis` order by `media` DESC limit 10');
   }

}
