<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modalidades;

class Solicitud extends Model
{
    //

    protected $table = 'solicitudes';

    protected $fillable = [
        'nombre_empresa',
        'nif',
        'actividad_empresa',
        'smr_1', 
        'smr_2', 
        'dam_1', 
        'dam_2', 
        'daw_1', 
        'daw_2',
        'observaciones',
        'modalidad',
    ];
}
