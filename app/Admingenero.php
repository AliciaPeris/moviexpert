<?php

namespace moviexpert;
use Eloquent as Model;
use Illuminate\Pagination\Paginator;


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

}
