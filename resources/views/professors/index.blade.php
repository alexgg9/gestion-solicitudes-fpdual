@extends('layouts.professor')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Docente de IES Francisco de los Ríos</h1>
        <a href="{{ route('professors.create') }}" class="btn btn-primary">Registrar Nuevo Docente</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>               
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Departamento</th>
            </tr>
        </thead>
        <tbody>
            @foreach($professors as $professor)
                <tr>
                    <td>{{ $professor->name }}</td>                   
                    <td>{{ $professor->surname}}</td>
                    <td>{{ $professor->email }}</td>
                    <td>{{ $professor->department }}</td>
                    <td>
                        <a href="{{ route('professors.show', $professor->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('professors.edit', $professor->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('professors.destroy', $professor->id) }}" method="POST" style="display:inline;">
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