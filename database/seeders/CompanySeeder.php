<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Company::insert([
            'name' => 'Empresa de Prueba',
            'phone1' => 123456789,
            'phone2' => 987654321,
            'email' => ' comapany@mail.com',
            'nif' => '12345678A',
            'address' => 'Calle de la Empresa',
            'city' => 'Ciudad de la Empresa',
            'state' => 'Provincia de la Empresa',
            'postal_code' => '12345',
            'manager_name' => 'Gerente de la Empresa',
            'manager_dni' => '12345678B',
            'modality' => 'Presencial',
        ]);
    }
}
