<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'nombre_empresa',
        'telefono1',
        'telefono2',
        'email',
        'nif',
        'direccion',
        'localidad',
        'provincia',
        'cp',
        'nombre_gerente',
        'dni_gerente',
        'modalidad'
    ];
}
