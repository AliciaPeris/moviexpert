<?php

namespace moviexpert;

use Illuminate\Database\Eloquent\Model;

class Admingenero extends Model
{
    //
    //protected $table = 'admingeneros';
    protected $fillable = [
        'genero',
    ];
    public function peliculas()
   {
       return $this->hasMany(\App\Http\Adminpelicula::class);
   }
}
