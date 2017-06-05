<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;

class MiembrochatController extends Controller
{
    //
    public function create(){
      return view('miembrochat.create');
    }
    public static function contarcamaras($idchat){
      $num= DB::table('miembrochats')
      ->where([
              ['idchat', '=', $idchat],
              ['tipomiembro', '=', 'camara'],
          ])
      ->count();
      return $num;
    }
    public static function contaractores($idchat){
      $num= DB::table('miembrochats')
      ->where([
              ['idchat', '=', $idchat],
              ['tipomiembro', '=', 'actor'],
          ])
      ->count();
      return $num;
    }
    public static function contardirectores($idchat){
      $num= DB::table('miembrochats')
      ->where([
              ['idchat', '=', $idchat],
              ['tipomiembro', '=', 'director'],
          ])
      ->count();
      return $num;
    }
    public static function contarguionistas($idchat){
      $num= DB::table('miembrochats')
      ->where([
              ['idchat', '=', $idchat],
              ['tipomiembro', '=', 'guionista'],
          ])
      ->count();
      return $num;
    }

}
