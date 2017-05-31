<?php

namespace moviexpert;

use Illuminate\Database\Eloquent\Model;

class Adminpelicula extends Model
{
    //
    //protected $table = 'adminpeliculas';
    protected $fillable = [
        'titulo', 'anio', 'pais','director','guion','reparto','sinopsis','trailer','cartelersa','genero'];

    public function setPathAttribute($cartelera){
      $this->attributes['cartelera'] = Carbon::now()->second.$cartelera->getClientOriginalName();
      $name =   Carbon::now()->second.$cartelera->getClientOriginalName();
      \Storage::disk('local')->put($name, \File::get($cartelera)) ;
    }
    public function genero()
   {
       return $this->belongsTo('\App\Http\Admingenero');
}
}
