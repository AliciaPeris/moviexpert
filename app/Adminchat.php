<?php

namespace moviexpert;

use Illuminate\Database\Eloquent\Model;

class Adminchat extends Model
{
    //
    //protected $table = 'adminchats';
    protected $fillable = [
        'nombre',
        'descripcion',
        'numguionistas',
        'numactores',
        'numdirectores',
        'numcamaras',
        'creadorchat',
    ];
}
