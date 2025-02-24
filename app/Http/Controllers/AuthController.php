<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProfessorRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Professor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function store(CreateProfessorRequest $request)
    {
        try {
            // Crear el usuario
            $user = Professor::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Devolver respuesta con token de API
            return response()->json([
                'status' => true,
                'message' => 'User created successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 201);

        } catch (\Exception $e) {
            // Manejo de errores generales
            return response()->json([
                'status' => false,
                'message' => 'User registration failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function loginUser(LoginRequest $request)
    {
        try {
            // Obtener credenciales validadas
            $credentials = $request->validated();

            // Intentar autenticación
            if (!Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
                return response()->json([
                    'status' => false,
                    'message' => 'Email & password do not match our records'
                ], 401);
            }

            // Obtener usuario autenticado
            $professor = Professor::where('email', $credentials['email'])->firstOrFail();

            return response()->json([
                'status' => true,
                'message' => 'Professor logged in successfully',
                'token' => $professor->createToken("API TOKEN")->plainTextToken,
                'professor_id' => $professor->id,
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Login failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}   
