@extends('layouts.professor')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Registrar nuevo docente</div>

                    <div class="card-body">
                        <form action="{{ route('professors.store') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- DNI -->
                            <div class="form-group mb-3">
                                <label for="dni" class="form-label">DNI</label>
                                <input type="text" name="dni" id="dni" class="form-control" required>
                            </div>

                            <!-- Nombre -->
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <!-- Apellidos -->
                            <div class="form-group mb-3">
                                <label for="surname" class="form-label">Apellidos</label>
                                <input type="text" name="surname" id="surname" class="form-control" required>
                            </div>

                            <!-- Email -->
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <!-- Teléfono -->
                            <div class="form-group mb-3">
                                <label for="phone" class="form-label">Teléfono</label>
                                <input type="text" name="phone" id="phone" class="form-control" required>
                            </div>

                            <!-- Departamento -->
                            <div class="form-group mb-3">
                                <label for="department" class="form-label">Departamento</label>
                                <input type="text" name="department" id="department" class="form-control" required>
                            </div>

                            <!-- Botón de Envío -->
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="{{ route('professors.index') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection