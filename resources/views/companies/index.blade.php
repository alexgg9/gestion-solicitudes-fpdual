@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Companies</h1>
        <a href="{{ route('companies.create') }}" class="btn btn-primary">Nueva Empresa</a>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th>Company Name</th>
                <th>Phone 1</th>
                <th>Email</th>
                <th>NIF</th>
                <th>Address</th>
                <th>City</th>
                <th>Postal Code</th>
                <th>Manager Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->phone1 }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->nif }}</td>
                    <td>{{ $company->address }}</td>
                    <td>{{ $company->city }}</td>
                    <td>{{ $company->postal_code }}</td>
                    <td>{{ $company->manager_name }}</td>
                    <td>
                        <a href="{{ route('companies.show', $company->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this company?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
