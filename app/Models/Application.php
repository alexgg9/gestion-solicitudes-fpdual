<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //

    protected $table = 'applications';

    protected $fillable = [
        'company_name',
        'nif',
        'company_activity',
        'smr_1',
        'smr_2',
        'dam_1',
        'dam_2',
        'daw_1',
        'daw_2',
        'observations',
        'modality',
        'company_id',
    ];

    function company()
    {
        return $this->belongsTo(Company::class);
    }
}
