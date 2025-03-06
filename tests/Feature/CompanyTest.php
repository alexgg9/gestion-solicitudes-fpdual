<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Company;
use App\Models\Professor;

class CompanyTest extends TestCase
{
    use RefreshDatabase; // Limpia la base de datos en cada prueba

    /** @test */
    public function test_create_company(): void
    {
        // Creamos un profesor para autenticar
        $professor = Professor::factory()->create(); 
        $token = $professor->createToken('TestToken')->plainTextToken; 

        // Datos de la empresa que vamos a crear
        $data = [
            'name' => 'Tech Corp',
            'phone1' => '123456789',
            'phone2' => '987654321',
            'email' => 'contact@techcorp.com',
            'nif' => '12345678A',
            'address' => '123 Tech Street',
            'town' => 'TechTown',
            'province' => 'TechProvince',
            'postal_code' => '12345',
            'manager_name' => 'John Doe',
            'manager_dni' => '12345678X',
            'modality' => 'Remoto',
        ];

        
        $response = $this->postJson('/api/company', $data, [
            'Authorization' => 'Bearer ' . $token 
        ]);

        // Verificamos que la respuesta sea correcta
        $response->assertStatus(201)
            ->assertJsonFragment([
                'name' => 'Tech Corp',
                'phone1' => '123456789',
            ]);

        // Comprobamos que los datos están guardados en la base de datos
        $this->assertDatabaseHas('companies', $data);
    }


    /** @test */
    public function test_show_company(): void
    {
        
        $professor = Professor::factory()->create();
        $token = $professor->createToken('TestToken')->plainTextToken;

        
        $company = Company::create([
            'name' => 'Tech Corp',
            'phone1' => '123456789',
            'phone2' => '987654321',
            'email' => 'contact@techcorp.com',
            'nif' => '12345678A',
            'address' => '123 Tech Street',
            'town' => 'TechTown',
            'province' => 'TechProvince',
            'postal_code' => '12345',
            'manager_name' => 'John Doe',
            'manager_dni' => '12345678X',
            'modality' => 'Remote',
        ]);

        
        $response = $this->getJson("/api/company/{$company->id}", [
            'Authorization' => 'Bearer ' . $token 
        ]);

        
        $response->assertStatus(200)
            ->assertJsonFragment([
                'name' => 'Tech Corp',
                'email' => 'contact@techcorp.com',
            ]);
    }


    /** @test */
    public function test_update_company(): void
    {
        
        $professor = Professor::factory()->create();
        $token = $professor->createToken('TestToken')->plainTextToken;

        
        $company = Company::create([
            'name' => 'Old Company',
            'phone1' => '111111111',
            'phone2' => '999999999',
            'email' => 'old@company.com',
            'nif' => '11111111B',
            'address' => '456 Old Street',
            'town' => 'OldTown',
            'province' => 'OldProvince',
            'postal_code' => '67890',
            'manager_name' => 'Jane Doe',
            'manager_dni' => '98765432Y',
            'modality' => 'Presencial',
        ]);

        
        $updatedData = [
            'name' => 'Updated Company',
            'phone1' => '222222222',
            'phone2' => '888888888',
            'email' => 'updated@company.com',
            'nif' => '22222222C',
            'address' => '789 Updated Street',
            'town' => 'UpdatedTown',
            'province' => 'UpdatedProvince',
            'postal_code' => '13579',
            'manager_name' => 'John Smith',
            'manager_dni' => '55555555Z',
            'modality' => 'Hibrido',
        ];

        
        $response = $this->putJson("/api/company/{$company->id}", $updatedData, [
            'Authorization' => 'Bearer ' . $token
        ]);

        
        $response->assertStatus(200)
            ->assertJsonFragment([
                'name' => 'Updated Company',
                'email' => 'updated@company.com',
            ]);

        
        $this->assertDatabaseHas('companies', $updatedData);
    }


    /** @test */
    public function test_delete_company(): void
    {
        
        $professor = Professor::factory()->create();
        $token = $professor->createToken('TestToken')->plainTextToken;

        
        $company = Company::create([
            'name' => 'Test Company',
            'phone1' => '333333333',
            'phone2' => '444444444',
            'email' => 'test@company.com',
            'nif' => '99999999D',
            'address' => '101 Test Street',
            'town' => 'TestTown',
            'province' => 'TestProvince',
            'postal_code' => '24680',
            'manager_name' => 'Test Manager',
            'manager_dni' => '12345678A',
            'modality' => 'Remoto',
        ]);

        
        $response = $this->deleteJson("/api/company/{$company->id}", [], [
            'Authorization' => 'Bearer ' . $token
        ]);

        
        $response->assertStatus(205);

        
        $this->assertDatabaseMissing('companies', ['id' => $company->id]);
    }
}
