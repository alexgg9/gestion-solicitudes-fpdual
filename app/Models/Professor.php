<?php

namespace App\Models;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class Professor extends Authenticatable
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
