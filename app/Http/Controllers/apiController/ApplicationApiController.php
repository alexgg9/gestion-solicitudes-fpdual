<?php

namespace App\Http\Controllers\apiController;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplicationRequest;
use App\Models\Application;
use App\Http\Resources\ApplicationResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\JsonResponse;



class ApplicationApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : JsonResource
    {
        //
        return ApplicationResource::collection(Application::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(ApplicationRequest $request) : JsonResponse
    {
        //
        $application = Application::create($request->all());
        return response()->json([
            'success' => true,
            'data' => new ApplicationResource($application)
        ], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id) : JsonResource
    {
        $application = Application::find($id);
        return new ApplicationResource($application);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(ApplicationRequest $request, string $id)
    {
        //
        $application = Application::find($id);
        $application->update($request->all());
        return response()->json([
            'success' => true,
            'data' => new ApplicationResource($application)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $application = Application::find($id);
        $application->delete();
        return response()->json([
            'success' => true,
            'data' => new ApplicationResource($application)
        ], 205);
    }
}
