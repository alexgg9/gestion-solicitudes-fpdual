@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Detalles de la Aplicación</h5>
                    </div>

                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Nombre de la Empresa:</label>
                                    <p class="form-control-static">{{ $application->company_name }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">NIF:</label>
                                    <p class="form-control-static">{{ $application->nif }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Actividad de la Empresa:</label>
                                    <p class="form-control-static">{{ $application->company_activity }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Modalidad:</label>
                                    <p class="form-control-static">{{ $application->modality }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Observaciones:</label>
                                    <p class="form-control-static">{{ $application->observations }}</p>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <h6 class="fw-bold mb-3">Número de Alumnos por Ciclo</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">SMR 1º:</label>
                                    <p class="form-control-static">{{ $application->smr_1 }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">SMR 2º:</label>
                                    <p class="form-control-static">{{ $application->smr_2 }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">DAM 1º:</label>
                                    <p class="form-control-static">{{ $application->dam_1 }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">DAM 2º:</label>
                                    <p class="form-control-static">{{ $application->dam_2 }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">DAW 1º:</label>
                                    <p class="form-control-static">{{ $application->daw_1 }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">DAW 2º:</label>
                                    <p class="form-control-static">{{ $application->daw_2 }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <a href="{{ route('applications.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-2"></i> Volver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection