@extends('layouts.professor')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Detalles del Docente</h5>
                    </div>

                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">DNI:</label>
                                    <p class="form-control-static">{{ $professor->dni }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Nombre del Docente:</label>
                                    <p class="form-control-static">{{ $professor->name }}</p>
                                </div>               
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Apellidos del docente:</label>
                                    <p class="form-control-static">{{ $professor->surname }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Correo:</label>
                                    <p class="form-control-static">{{ $professor->email }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Telefono:</label>
                                    <p class="form-control-static">{{ $professor->phone }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">departamento:</label>
                                    <p class="form-control-static">{{ $professor->department }}</p>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <a href="{{ route('professors.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-2"></i> Volver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection