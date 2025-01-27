@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Nueva Empresa</div>

                    <div class="card-body">
                        <form action="{{ route('companies.store') }}" method="POST">
                            @csrf

                            <!-- nombre de la Empresa-->
                            <div class="form-group mb-3">
                                <label for="nombre_empresa" class="form-label">Nombre de la empresa</label>
                                <input type="text" name="nombre_empresa" id="nombre_empresa" class="form-control"
                                    required>
                            </div>

                            <!-- Telefono 1 -->
                            <div class="form-group mb-3">
                                <label for="telefono1" class="form-label">Telefono</label>
                                <input type="text" name="telefono1" id="telefono1" class="form-control" required>
                            </div>

                            <!-- Telefono 2 -->
                            <div class="form-group mb-3">
                                <label for="telefono2" class="form-label">Telefono</label>
                                <input type="text" name="telefono2" id="telefono2" class="form-control">
                            </div>

                            <!-- Email -->
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <!-- NIF -->
                            <div class="form-group mb-3">
                                <label for="nif" class="form-label">NIF</label>
                                <input type="text" name="nif" id="nif" class="form-control" required>
                            </div>

                            <!-- Dirección -->
                            <div class="form-group mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" name="direccion" id="direccion" class="form-control" required>
                            </div>

                            <!-- Localidad -->
                            <div class="form-group mb-3">
                                <label for="localidad" class="form-label">Localidad</label>
                                <input type="text" name="localidad" id="localidad" class="form-control" required>
                            </div>

                            <!-- Provincia -->
                            <div class="form-group mb-3">
                                <label for="provincia" class="form-label">Provincia</label>
                                <input type="text" name="provincia" id="provincia" class="form-control" required>
                            </div>

                            <!-- Codigo Postal -->
                            <div class="form-group mb-3">
                                <label for="cp" class="form-label">Codigo Postal</label>
                                <input name="cp" id="cp" class="form-control" required></input>
                            </div>

                            <!-- Nombre del Gerente -->
                            <div class="form-group mb-3">
                                <label for="nombre_gerente" class="form-label">Nombre del Gerente</label>
                                <input type="text" name="nombre_gerente" id="nombre_gerente" class="form-control"
                                    required>
                            </div>

                            <!-- DNI del Gerente -->
                            <div class="form-group mb-3">
                                <label for="dni_gerente" class="form-label">DNI del Gerente</label>
                                <input type="text" name="dni_gerente" id="dni_gerente" class="form-control" required>
                            </div>

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
                                <a href="{{ route('companies.index') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
