<?php


namespace Tests\Feature;

use App\Models\Professor;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;



class ProfessorTest extends TestCase
{
    use RefreshDatabase;  

    /** @test */
    public function test_create_professor(): void
    {
        
        $professor = Professor::factory()->create(); 
        $token = $professor->createToken('TestToken')->plainTextToken; 

        
        $data = [
            'dni' => '14345678M',
            'name' => 'John Doe',
            'surname' => 'Doe',
            'email' => 'john.doe@domain.com',
            'password' => bcrypt('password'),
            'phone' => '123456789',
            'department' => 'Informática',
        ];

        
        $response = $this->postJson('/api/professor', $data, [
            'Authorization' => 'Bearer ' . $token 
        ]);

        
        $response->assertStatus(201)
            ->assertJsonFragment([
                'name' => 'John Doe',
                'email' => 'john.doe@domain.com',
            ]);

        
        $this->assertDatabaseHas('professors', [
            'dni' => $data['dni'],
            'email' => $data['email'],
        ]);
    }

    /** @test */
    public function test_show_professor(): void
    {
        
        $professor = Professor::factory()->create(); 
        $token = $professor->createToken('TestToken')->plainTextToken; 

        
        $response = $this->getJson('/api/professor/' . $professor->id, [
            'Authorization' => 'Bearer ' . $token 
        ]);

        
        $response->assertStatus(200)
                ->assertJsonFragment([
                    'dni' => $professor->dni,
                    'name' => $professor->name,
                    'email' => $professor->email,
                ]);
    }

    /** @test */
    public function test_update_professor(): void
    {
        
        $professor = Professor::factory()->create(); 
        $token = $professor->createToken('TestToken')->plainTextToken; 

        
        $updatedData = [
            'dni' => '54321678X', 
            'name' => 'John Updated',
            'surname' => 'Doe Updated', 
            'email' => 'john.updated@domain.com',
            'password' => bcrypt('newpassword'), 
            'phone' => '987654321', 
            'department' => 'Matemáticas', 
        ];

        
        $response = $this->putJson('/api/professor/' . $professor->id, $updatedData, [
            'Authorization' => 'Bearer ' . $token 
        ]);

        
        $response->assertStatus(200)
                ->assertJsonFragment([
                    'dni' => $updatedData['dni'],
                    'name' => $updatedData['name'],
                    'email' => $updatedData['email'],
                ]);

        
        $this->assertDatabaseHas('professors', [
            'dni' => $updatedData['dni'],
            'email' => $updatedData['email'],
            'name' => $updatedData['name'],
        ]);

       
        $this->assertDatabaseMissing('professors', [
            'dni' => $professor->dni,
            'email' => $professor->email,
        ]);
    }

    /** @test */
    public function test_delete_professor(): void
    {
        
        $professor = Professor::factory()->create(); 
        $token = $professor->createToken('TestToken')->plainTextToken; 

        
        $response = $this->deleteJson('/api/professor/' . $professor->id, [], [
            'Authorization' => 'Bearer ' . $token 
        ]);

        
        $response->assertStatus(205) 
                ->assertJson([
                    'success' => true, 
                ]);

        
        $this->assertDatabaseMissing('professors', [
            'id' => $professor->id,
        ]);
    }



}
