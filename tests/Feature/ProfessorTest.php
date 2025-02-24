<?php


namespace Tests\Feature;

use App\Models\Professor;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;



class ProfessorTest extends TestCase
{
    use RefreshDatabase;  // Limpia la base de datos después de cada prueba

    /** @test */
    public function test_create_professor(): void
    {
        // Creamos un profesor para autenticar
        $professor = Professor::factory()->create(); // Creamos un profesor (suponiendo que tienes un factory de profesores)
        $token = $professor->createToken('TestToken')->plainTextToken; // Creamos un token para este profesor

        // Datos del profesor que vamos a crear
        $data = [
            'dni' => '14345678M',
            'name' => 'John Doe',
            'surname' => 'Doe',
            'email' => 'john.doe@domain.com',
            'password' => bcrypt('password'),
            'phone' => '123456789',
            'department' => 'Informática',
        ];

        // Hacemos una solicitud POST para crear el profesor, autenticados con el token del profesor
        $response = $this->postJson('/api/professor', $data, [
            'Authorization' => 'Bearer ' . $token // Incluimos el token del profesor en el header
        ]);

        // Verificamos que la respuesta sea correcta
        $response->assertStatus(201)
            ->assertJsonFragment([
                'name' => 'John Doe',
                'email' => 'john.doe@domain.com',
            ]);

        // Comprobamos que los datos están guardados en la base de datos
        $this->assertDatabaseHas('professors', [
            'dni' => $data['dni'],
            'email' => $data['email'],
        ]);
    }

    /** @test */
    public function test_show_professor(): void
    {
        // Creamos un profesor para autenticar
        $professor = Professor::factory()->create(); 
        $token = $professor->createToken('TestToken')->plainTextToken; 

        // Hacemos una solicitud GET para obtener los detalles del profesor, autenticados con el token
        $response = $this->getJson('/api/professor/' . $professor->id, [
            'Authorization' => 'Bearer ' . $token 
        ]);

        // Verificamos que la respuesta sea correcta
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
        // Creamos un profesor para autenticar
        $professor = Professor::factory()->create(); 
        $token = $professor->createToken('TestToken')->plainTextToken; 

        // Nuevos datos para actualizar al profesor
        $updatedData = [
            'dni' => '54321678X', 
            'name' => 'John Updated',
            'surname' => 'Doe Updated', 
            'email' => 'john.updated@domain.com',
            'password' => bcrypt('newpassword'), 
            'phone' => '987654321', 
            'department' => 'Matemáticas', 
        ];

        // Hacemos una solicitud PUT para actualizar el profesor, autenticados con el token
        $response = $this->putJson('/api/professor/' . $professor->id, $updatedData, [
            'Authorization' => 'Bearer ' . $token 
        ]);

        // Verificamos que la respuesta sea correcta
        $response->assertStatus(200)
                ->assertJsonFragment([
                    'dni' => $updatedData['dni'],
                    'name' => $updatedData['name'],
                    'email' => $updatedData['email'],
                ]);

        // Comprobamos que los datos se han actualizado correctamente en la base de datos
        $this->assertDatabaseHas('professors', [
            'dni' => $updatedData['dni'],
            'email' => $updatedData['email'],
            'name' => $updatedData['name'],
        ]);

        // Comprobamos que no existe el antiguo DNI y correo
        $this->assertDatabaseMissing('professors', [
            'dni' => $professor->dni,
            'email' => $professor->email,
        ]);
    }

    /** @test */
    public function test_delete_professor(): void
    {
        // Creamos un profesor para autenticar
        $professor = Professor::factory()->create(); 
        $token = $professor->createToken('TestToken')->plainTextToken; 

        
        $response = $this->deleteJson('/api/professor/' . $professor->id, [], [
            'Authorization' => 'Bearer ' . $token 
        ]);

        // Verificamos que la respuesta sea correcta
        $response->assertStatus(205) 
                ->assertJson([
                    'success' => true, 
                ]);

        // Comprobamos que el profesor ha sido eliminado de la base de datos
        $this->assertDatabaseMissing('professors', [
            'id' => $professor->id,
        ]);
    }



}
