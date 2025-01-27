<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Http\Requests\ProfessorRequest;


class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professors = Professor::all();
        return view('professors.index', compact('professors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('professors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfessorRequest $request)
    {
        Professor::create($request->validated());

        return redirect()->route('professors.index')
            ->with('success', 'Profesor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $professor = Professor::find($id);

        return view('professors.show', compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $professor = Professor::find($id);

        return view('professors.edit', compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfessorRequest $request, $id)
    {
        $professor = Professor::find($id);
        $professor->update($request->validated());
        return redirect()->route('professors.index')->with('success', 'Professor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $professor = Professor::find($id);
        $professor->delete();

        return redirect()->route('professors.index')
            ->with('success', 'Profesor deleted successfully.');
    }
}