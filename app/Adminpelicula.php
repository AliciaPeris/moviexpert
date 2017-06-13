<?php

namespace moviexpert;

use Illuminate\Database\Eloquent\Model;
use DB;
class Adminpelicula extends Model
{
    //
    //protected $table = 'adminpeliculas';
    protected $fillable = [
        'titulo', 'anio', 'pais','director','guion','reparto','sinopsis','trailer','cartelera','genero'];

    public function setPathAttribute($cartelera){
      $this->attributes['cartelera'] = Carbon::now()->second.$cartelera->getClientOriginalName();
      $name =   Carbon::now()->second.$cartelera->getClientOriginalName();
      \Storage::disk('local')->put($name, \File::get($cartelera)) ;
      $this->attributes['trailer'] = Carbon::now()->second.$trailer->getClientOriginalName();
      $name =   Carbon::now()->second.$trailer->getClientOriginalName();
      \Storage::disk('local')->put($name, \File::get($trailer)) ;
    }

    public function genero()
    {
       return $this->belongsTo('\App\Http\Admingenero');
    }

    static public function titulo($titulo){

      return DB::select("SELECT * FROM adminpeliculas WHERE titulo like '".$titulo."%';");


   }
}
