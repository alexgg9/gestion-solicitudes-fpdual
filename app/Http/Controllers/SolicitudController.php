<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Http\Requests\SolicitudRequest;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $solicitudes = Solicitud::all();
        return view('solicitudes.index', compact('solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('solicitudes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SolicitudRequest $request)
    {

        Solicitud::create($request->validated());

        return redirect()->route('solicitudes.index')
            ->with('success', 'Solicitud creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $solicitud = Solicitud::find($id);

        return view('solicitudes.show', compact('solicitud'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $solicitud = Solicitud::find($id);

        return view('solicitudes.edit', compact('solicitud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SolicitudRequest $request, $id)
    {
        $solicitud = Solicitud::find($id);
        $solicitud->update($request->validated());
        return redirect()->route('solicitudes.index')->with('success', 'Solicitud actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $solicitud = Solicitud::find($id);
        $solicitud->delete();

        return redirect()->route('solicitudes.index')
            ->with('success', 'Solicitud eliminada exitosamente.');
    }
}
