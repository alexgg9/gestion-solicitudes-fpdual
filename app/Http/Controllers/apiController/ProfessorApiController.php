<?php

namespace App\Http\Controllers\apiController;

use App\Http\Controllers\Controller;
use App\Models\Professor;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Requests\ProfessorRequest;
use App\Http\Resources\ProfessorResource;


class ProfessorApiController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index() : JsonResource
    {
        return ProfessorResource::collection(Professor::all());
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfessorRequest $request) : JsonResponse
    {
        $professor = Professor::create($request->all());
        return response()->json([
            'success' => true,
            'data' => new ProfessorResource($professor)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : JsonResource
    {
        $professor = Professor::find($id);
        return new ProfessorResource($professor);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(ProfessorRequest $request, string $id)
    {
        //
        $professor = Professor::find($id);
        $professor->update($request->all());
        return response()->json([
            'success' => true,
            'data' => new ProfessorResource($professor)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)

    {
        //
        $professor = Professor::find($id);
        $professor->delete();
        return response()->json([
            'success' => true,
            'data' => new ProfessorResource($professor)
        ], 205);
    }
} 
