@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>companies</h1>
        <a href="{{ route('companies.create') }}" class="btn btn-prymary">Nueva empresa</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre empresa</th>
                <th>Telefono 1</th>
                <th>Telefono 2</th>
                <th>Email</th>
                <th>NIF</th>
                <th>Direccion</th>
                <th>Localidad</th>
                <th>Provincia</th>
                <th>Codigo Postal</th>
                <th>Nombre Gerente</th>
                <th>DNI Gerente</th>
                <th>Modalidad</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->nombre_empresa }}</td>
                    <td>{{ $company->telefono1 }}</td>
                    <td>{{ $company->telefono2 }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->nif }}</td>
                    <td>{{ $company->direccion }}</td>
                    <td>{{ $company->localidad }}</td>
                    <td>{{ $company->provincia }}</td>
                    <td>{{ $company->cp }}</td>
                    <td>{{ $company->nombre_gerente }}</td>
                    <td>{{ $company->dni_gerente }}</td>
                    <td>{{ $company->modalidad }}</td>
                    <td>
                        <a href="{{ route('companies.show', $company->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline;">
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
