@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Company</div>

                    <div class="card-body">
                        <form action="{{ route('companies.update', $company->id) }}" method="POST">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @csrf
                            @method('PUT')

                            <!-- Company Name -->
                            <div class="form-group mb-3">
                                <label for="name">Company Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $company->name }}" required>
                            </div>

                            <!-- Phone 1 -->
                            <div class="form-group mb-3">
                                <label for="phone1">Phone 1</label>
                                <input type="text" name="phone1" id="phone1" class="form-control" value="{{ $company->phone1 }}" required>
                            </div>

                            <!-- Phone 2 -->
                            <div class="form-group mb-3">
                                <label for="phone2">Phone 2</label>
                                <input type="text" name="phone2" id="phone2" class="form-control" value="{{ $company->phone2 }}">
                            </div>

                            <!-- Email -->
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $company->email }}" required>
                            </div>

                            <!-- NIF -->
                            <div class="form-group mb-3">
                                <label for="nif">NIF</label>
                                <input type="text" name="nif" id="nif" class="form-control" value="{{ $company->nif }}" required>
                            </div>

                            <!-- Address -->
                            <div class="form-group mb-3">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" class="form-control" value="{{ $company->address }}" required>
                            </div>

                            <!-- City -->
                            <div class="form-group mb-3">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city" class="form-control" value="{{ $company->city }}" required>
                            </div>

                            <!-- State -->
                            <div class="form-group mb-3">
                                <label for="state">State</label>
                                <input type="text" name="state" id="state" class="form-control" value="{{ $company->state }}" required>
                            </div>

                            <!-- Postal Code -->
                            <div class="form-group mb-3">
                                <label for="postal_code">Postal Code</label>
                                <input type="text" name="postal_code" id="postal_code" class="form-control" value="{{ $company->postal_code }}" required>
                            </div>

                            <!-- Manager Name -->
                            <div class="form-group mb-3">
                                <label for="manager_name">Manager Name</label>
                                <input type="text" name="manager_name" id="manager_name" class="form-control" value="{{ $company->manager_name }}" required>
                            </div>

                            <!-- Manager DNI -->
                            <div class="form-group mb-3">
                                <label for="manager_dni">Manager DNI</label>
                                <input type="text" name="manager_dni" id="manager_dni" class="form-control" value="{{ $company->manager_dni }}" required>
                            </div>

                            <!-- Modality -->
                            <div class="form-group mb-3">
                                <label for="modality">Modality</label>
                                <select name="modality" id="modality" class="form-control" required>
                                    <option value="Presencial" {{ $company->modality == 'Presencial' ? 'selected' : '' }}>Presencial</option>
                                    <option value="Remoto" {{ $company->modality == 'Remoto' ? 'selected' : '' }}>Remoto</option>
                                    <option value="Híbrido" {{ $company->modality == 'Híbrido' ? 'selected' : '' }}>Híbrido</option>
                                </select>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                <a href="{{ route('companies.index') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
