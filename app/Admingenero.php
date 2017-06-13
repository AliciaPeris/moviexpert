<?php

namespace moviexpert;
use Eloquent as Model;
use Illuminate\Pagination\Paginator;
use DB;

class Admingenero extends Model
{
    //
    //protected $table = 'admingeneros';
    protected $fillable = [
        'genero',
    ];
    public function peliculas()
   {
       return $this->hasMany('\App\Adminpelicula');
   }
   static public function nombre($nombre){

     return DB::select("SELECT * FROM admingeneros WHERE genero like '".$nombre."%';");
  }
}
