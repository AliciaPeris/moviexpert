<?php

namespace moviexpert;

use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'nombre','apellidos','direccion','localidad','genero','fechanacimiento','foto','tipousuario',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     static public function nombre($nombre){

       return DB::select("SELECT * FROM users WHERE nombre like '".$nombre."%';");


    }
}
