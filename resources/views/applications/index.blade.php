@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Aplicaciones de Empresas IES Francisco de los Ríos</h1>
        <a href="{{ route('applications.create') }}" class="btn btn-primary">Crear Nueva Solicitud</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre Empresa</th>
                <th>NIF</th>
                <th>Nº Alumnos total</th>
                <th>Modalidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applications as $application)
                <tr>
                    <td>{{ $application->company_name }}</td>
                    <td>{{ $application->nif }}</td>
                    <td>{{ $application->smr_1 + $application->smr_2 + $application->dam_1 + $application->dam_2 + $application->daw_1 + $application->daw_2 }}</td>
                    <td>{{ $application->modality }}</td>
                    <td>
                        <a href="{{ route('applications.show', $application->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('applications.edit', $application->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('applications.destroy', $application->id) }}" method="POST" style="display:inline;">
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