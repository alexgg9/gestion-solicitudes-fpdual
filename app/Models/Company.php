<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'company_name',
        'phone1',
        'phone2',
        'email',
        'nif',
        'address',
        'town',
        'province',
        'postal_code',
        'manager_name',
        'manager_dni',
        'modality',
    ];
  
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
