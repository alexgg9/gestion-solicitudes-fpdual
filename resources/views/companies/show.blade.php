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
                                    <p class="mb-0">{{ $company->name }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Teléfono 1:</label>
                                    <p class="mb-0">{{ $company->phone1 }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Teléfono 2:</label>
                                    <p class="mb-0">{{ $company->phone2 }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Email:</label>
                                    <p class="mb-0">{{ $company->email }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">NIF:</label>
                                    <p class="mb-0">{{ $company->nif }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Dirección:</label>
                                    <p class="mb-0">{{ $company->address }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Localidad:</label>
                                    <p class="mb-0">{{ $company->town }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Provincia:</label>
                                    <p class="mb-0">{{ $company->town }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Código Postal:</label>
                                    <p class="mb-0">{{ $company->postal_code }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Nombre del Gerente:</label>
                                    <p class="mb-0">{{ $company->manager_name }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">DNI del Gerente:</label>
                                    <p class="mb-0">{{ $company->manager_dni }}</p>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Modalidad:</label>
                                    <p class="mb-0">{{ $company->modality }}</p>
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
