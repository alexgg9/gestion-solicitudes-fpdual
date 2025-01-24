@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Nueva Solicitud</div>

                    <div class="card-body">
                        <form action="{{ route('applications.store') }}" method="POST">
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

                            <!-- Nombre de la Empresa -->
                            <div class="form-group mb-3">
                                <label for="company_name" class="form-label">Nombre de la Empresa</label>
                                <input type="text" name="company_name" id="company_name" class="form-control" required>
                            </div>

                            <!-- NIF -->
                            <div class="form-group mb-3">
                                <label for="nif" class="form-label">NIF</label>
                                <input type="text" name="nif" id="nif" class="form-control" required>
                            </div>

                            <!-- Actividad de la Empresa -->
                            <div class="form-group mb-3">
                                <label for="company_activity" class="form-label">Actividad de la Empresa</label>
                                <input type="text" name="company_activity" id="company_activity" class="form-control" required>
                            </div>

                            <!-- Número de Alumnos SMR -->
                            <div class="form-group mb-3">
                                <label class="form-label">Número de Alumnos SMR</label>
                                <div class="row">
                                    <div class="col">
                                        <label for="smr_1">1º Año</label>
                                        <input type="number" name="smr_1" id="smr_1" class="form-control" value="0" min="0" required>
                                    </div>
                                    <div class="col">
                                        <label for="smr_2">2º Año</label>
                                        <input type="number" name="smr_2" id="smr_2" class="form-control" value="0" min="0" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Número de Alumnos DAM -->
                            <div class="form-group mb-3">
                                <label class="form-label">Número de Alumnos DAM</label>
                                <div class="row">
                                    <div class="col">
                                        <label for="dam_1">1º Año</label>
                                        <input type="number" name="dam_1" id="dam_1" class="form-control" value="0" min="0" required>
                                    </div>
                                    <div class="col">
                                        <label for="dam_2">2º Año</label>
                                        <input type="number" name="dam_2" id="dam_2" class="form-control" value="0" min="0" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Número de Alumnos DAW -->
                            <div class="form-group mb-3">
                                <label class="form-label">Número de Alumnos DAW</label>
                                <div class="row">
                                    <div class="col">
                                        <label for="daw_1">1º Año</label>
                                        <input type="number" name="daw_1" id="daw_1" class="form-control" value="0" min="0" required>
                                    </div>
                                    <div class="col">
                                        <label for="daw_2">2º Año</label>
                                        <input type="number" name="daw_2" id="daw_2" class="form-control" value="0" min="0" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Observaciones -->
                            <div class="form-group mb-3">
                                <label for="observations" class="form-label">Observaciones</label>
                                <textarea name="observations" id="observations" class="form-control" rows="4"></textarea>
                            </div>

                            <!-- Modalidad -->
                            <div class="form-group mb-3">
                                <label for="modality" class="form-label">Modalidad</label>
                                <select name="modality" id="modality" class="form-control" required>
                                    <option value="Presencial">Presencial</option>
                                    <option value="Remoto">Remoto</option>
                                    <option value="Híbrido">Híbrido</option>
                                </select>
                            </div>

                            <!-- Botón de Envío -->
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="{{ route('applications.index') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection