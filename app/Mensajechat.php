<?php

namespace moviexpert;

use Illuminate\Database\Eloquent\Model;

class Mensajechat extends Model
{
    //
    protected $fillable = [
        'idparticipante',
        'mensaje',
    ];
}
