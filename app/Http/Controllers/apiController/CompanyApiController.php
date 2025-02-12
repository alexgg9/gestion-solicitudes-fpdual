<?php

namespace App\Http\Controllers\apiController;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Requests\CompanyRequest;
use App\Http\Resources\CompanyResource;

class CompanyApiController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index(): JsonResource
    {
        return JsonResource::collection(Company::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyRequest $request): JsonResponse
    {
        $company = Company::create($request->all());
        return response()->json([
            'success' => true,
            'data' => new CompanyResource($company)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResource
    {
        $company = Company::find($id);
        return new CompanyResource($company);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyRequest $request, string $id)
    {
        //
        $company = Company::find($id);
        $company->update($request->all());
        return response()->json([
            'success' => true,
            'data' => new CompanyResource($company)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)

    {
        //
        $company = Company::find($id);
        $company->delete();
        return response()->json([
            'success' => true,
            'data' => new CompanyResource($company)
        ], 205);
    }
}
