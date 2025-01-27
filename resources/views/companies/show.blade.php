@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Detalles de la Empresa</h5>
                    </div>

                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Nombre de la Empresa:</label>
                                    <p class="form-control-static">{{ $companies->nombre_empresa }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Telefono 1:</label>
                                    <p class="form-control-static">{{ $companies->telefono1 }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Telefono 2:</label>
                                    <p class="form-control-static">{{ $companies->telefono2 }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Email:</label>
                                    <p class="form-control-static">{{ $companies->email }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">NIF:</label>
                                    <p class="form-control-static">{{ $companies->nif }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Direccion:</label>
                                    <p class="form-control-static">{{ $companies->direccion }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Localidad:</label>
                                    <p class="form-control-static">{{ $companies->localidad }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Provincia:</label>
                                    <p class="form-control-static">{{ $companies->provincia }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Codigo Postal:</label>
                                    <p class="form-control-static">{{ $companies->cp }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Nombre del Gerente:</label>
                                    <p class="form-control-static">{{ $companies->nombre_gerente }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">DNI del Gerente:</label>
                                    <p class="form-control-static">{{ $companies->dni_gerente }}</p>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Modalidad:</label>
                                    <p class="form-control-static">{{ $companies->modalidad }}</p>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <a href="{{ route('companies.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-2"></i> Volver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
