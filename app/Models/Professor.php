<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Professor extends Model{
    
    use HasFactory;
    protected $table = 'professors';

    protected $fillable = [
        'dni',
        'name',
        'surname',
        'email',
        'phone',
        'department'
    ];
}
