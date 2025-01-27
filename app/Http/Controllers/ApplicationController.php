<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Http\Requests\ApplicationRequest;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Application::all();
        return view('applications.index', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('applications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ApplicationRequest $request)
    {
        Application::create($request->validated());

        return redirect()->route('applications.index')
            ->with('success', 'Application created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $application = Application::find($id);

        return view('applications.show', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $application = Application::find($id);

        return view('applications.edit', compact('application'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ApplicationRequest $request, $id)
    {
        $application = Application::find($id);
        $application->update($request->validated());
        return redirect()->route('applications.index')->with('success', 'Application updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $application = Application::find($id);
        $application->delete();

        return redirect()->route('applications.index')
            ->with('success', 'Application deleted successfully.');
    }
}