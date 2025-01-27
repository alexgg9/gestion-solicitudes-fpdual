@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Empresa</div>

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

                            <!-- Nombre de la Empresa -->
                            <div class="form-group mb-3">
                                <label for="nombre_empresa">Nombre de la Empresa</label>
                                <input type="text" name="nombre_empresa" id="nombre_empresa" class="form-control"
                                    value="{{ $company->nombre_empresa }}" required>
                            </div>

                            <!-- Teléfono 1 -->
                            <div class="form-group mb-3">
                                <label for="telefono1">Teléfono 1</label>
                                <input type="text" name="telefono1" id="telefono1" class="form-control"
                                    value="{{ $company->telefono1 }}" required>
                            </div>

                            <!-- Teléfono 2 -->
                            <div class="form-group mb-3">
                                <label for="telefono2">Teléfono 2</label>
                                <input type="text" name="telefono2" id="telefono2" class="form-control"
                                    value="{{ $company->telefono2 }}">
                            </div>

                            <!-- Email -->
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ $company->email }}" required>
                            </div>

                            <!-- NIF -->
                            <div class="form-group mb-3">
                                <label for="nif">NIF</label>
                                <input type="text" name="nif" id="nif" class="form-control"
                                    value="{{ $company->nif }}" required>
                            </div>

                            <!-- Dirección -->
                            <div class="form-group mb-3">
                                <label for="direccion">Dirección</label>
                                <input type="text" name="direccion" id="direccion" class="form-control"
                                    value="{{ $company->direccion }}" required>
                            </div>

                            <!-- Localidad -->
                            <div class="form-group mb-3">
                                <label for="localidad">Localidad</label>
                                <input type="text" name="localidad" id="localidad" class="form-control"
                                    value="{{ $company->localidad }}" required>
                            </div>

                            <!-- Provincia -->
                            <div class="form-group mb-3">
                                <label for="provincia">Provincia</label>
                                <input type="text" name="provincia" id="provincia" class="form-control"
                                    value="{{ $company->provincia }}" required>
                            </div>

                            <!-- Código Postal -->
                            <div class="form-group mb-3">
                                <label for="cp">Código Postal</label>
                                <input type="text" name="cp" id="cp" class="form-control"
                                    value="{{ $company->cp }}" required>
                            </div>

                            <!-- Nombre del Gerente -->
                            <div class="form-group mb-3">
                                <label for="nombre_gerente">Nombre del Gerente</label>
                                <input type="text" name="nombre_gerente" id="nombre_gerente" class="form-control"
                                    value="{{ $company->nombre_gerente }}" required>
                            </div>

                            <!-- DNI del Gerente -->
                            <div class="form-group mb-3">
                                <label for="dni_gerente">DNI del Gerente</label>
                                <input type="text" name="dni_gerente" id="dni_gerente" class="form-control"
                                    value="{{ $company->dni_gerente }}" required>
                            </div>

                            <!-- Modalidad -->
                            <div class="form-group mb-3">
                                <label for="modalidad">Modalidad</label>
                                <select name="modalidad" id="modalidad" class="form-control" required>
                                    <option value="Presencial" {{ $company->modalidad == 'Presencial' ? 'selected' : '' }}>
                                        Presencial</option>
                                    <option value="Remoto" {{ $company->modalidad == 'Remoto' ? 'selected' : '' }}>Remoto
                                    </option>
                                    <option value="Híbrido" {{ $company->modalidad == 'Híbrido' ? 'selected' : '' }}>
                                        Híbrido</option>
                                </select>
                            </div>

                            <!-- Botón de Envío -->
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
