@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Solicitudes de Empresas IES Francisco de los Ríos</h1>
        <a href="{{ route('solicitudes.create') }}" class="btn btn-primary">Crear Nueva Solicitud</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre Empresa</th>
                <th>NIF</th>
                <th>Nº Alumnos total</th>
                <th>Modalidad</th>
                <th>Modificaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($solicitudes as $solicitud)
                <tr>
                    <td>{{ $solicitud->nombre_empresa }}</td>
                    <td>{{ $solicitud->nif }}</td>
                    <td>{{ $solicitud->smr_1 + $solicitud->smr_2 + $solicitud->dam_1 + $solicitud->dam_2 + $solicitud->daw_1 + $solicitud->daw_2 }}</td>
                    <td> {{$solicitud->modalidad}}</td>
                    <td>
                        <a href="{{ route('solicitudes.show', $solicitud->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('solicitudes.edit', $solicitud->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('solicitudes.destroy', $solicitud->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection