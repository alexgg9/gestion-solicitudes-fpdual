<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Professor extends Model
{

    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'professors';

    protected $fillable = [
        'dni',
        'name',
        'surname',
        'email',
        'password',
        'phone',
        'department'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
