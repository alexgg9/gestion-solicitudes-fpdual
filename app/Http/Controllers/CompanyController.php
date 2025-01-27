<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('Companies'));
    }

    public function create()
    {
        return view('companies.create');
    }


    public function store(CompanyRequest $request)
    {

        Company::create($request->validated());

        return redirect()->route('companies.index')
            ->with('success', 'Empresa creada exitosamente.');
    }

    public function show($id)
    {
        $company = Company::find($id);

        return view('companies.show', compact('company'));
    }

    public function edit($id)
    {
        $company = Company::find($id);

        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyRequest $request, $id)
    {
        $company = Company::find($id);
        $company->update($request->validated());
        return redirect()->route('companies.index')->with('success', 'Empresa actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        return redirect()->route('companies.index')
            ->with('success', 'Empresa eliminada exitosamente.');
    }
}
