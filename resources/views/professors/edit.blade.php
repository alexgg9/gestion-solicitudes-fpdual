@extends('layouts.professor')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Docente</div>

                    <div class="card-body">
                        <form action="{{ route('professors.update', $professor->id) }}" method="POST">
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

                            <!-- DNI -->
                            <div class="form-group mb-3">
                                <label for="dni" class="form-label">DNI</label>
                                <input type="text" name="dni" id="dni" class="form-control" value="{{ old('dni', $professor->dni ?? '') }}" required>
                            </div>

                            <!-- Nombre -->
                            <div class="form-group mb-3">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $professor->name }}" required>
                            </div>

                            <!-- Apellidos -->
                            <div class="form-group mb-3">
                                <label for="surname">Apellidos</label>
                                <input type="text" name="surname" id="surname" class="form-control" value="{{ $professor->surname }}" required>
                            </div>

                            <!-- Email -->
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $professor->email }}" required>
                            </div>

                            <!-- Teléfono -->
                            <div class="form-group mb-3">
                                <label for="phone">Teléfono</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ $professor->phone }}" required>
                            </div>

                            <!-- Departamento -->
                            <div class="form-group mb-3">
                                <label for="department">Departamento</label>
                                <input type="text" name="department" id="department" class="form-control" value="{{ $professor->department }}" required>
                            </div>

                            <!-- Botón de Envío -->
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                <a href="{{ route('professors.index') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection