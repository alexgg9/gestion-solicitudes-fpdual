@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Company</div>

                    <div class="card-body">
                        <form action="{{ route('companies.store') }}" method="POST">
                            @csrf

                            <!-- Company Name -->
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Company Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <!-- Phone 1 -->
                            <div class="form-group mb-3">
                                <label for="phone1" class="form-label">Phone 1</label>
                                <input type="text" name="phone1" id="phone1" class="form-control" required>
                            </div>

                            <!-- Phone 2 -->
                            <div class="form-group mb-3">
                                <label for="phone2" class="form-label">Phone 2</label>
                                <input type="text" name="phone2" id="phone2" class="form-control">
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

                            <!-- Address -->
                            <div class="form-group mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" id="address" class="form-control" required>
                            </div>

                            <!-- Town -->
                            <div class="form-group mb-3">
                                <label for="town" class="form-label">Town</label>
                                <input type="text" name="town" id="town" class="form-control" required>
                            </div>

                            <!-- Province -->
                            <div class="form-group mb-3">
                                <label for="province" class="form-label">Province</label>
                                <input type="text" name="province" id="province" class="form-control" required>
                            </div>

                            <!-- Postal Code -->
                            <div class="form-group mb-3">
                                <label for="postal_code" class="form-label">Postal Code</label>
                                <input name="postal_code" id="postal_code" class="form-control" required></input>
                            </div>

                            <!-- Manager Name -->
                            <div class="form-group mb-3">
                                <label for="manager_name" class="form-label">Manager Name</label>
                                <input type="text" name="manager_name" id="manager_name" class="form-control" required>
                            </div>

                            <!-- Manager DNI -->
                            <div class="form-group mb-3">
                                <label for="manager_dni" class="form-label">Manager DNI</label>
                                <input type="text" name="manager_dni" id="manager_dni" class="form-control" required>
                            </div>

                            <!-- Modality -->
                            <div class="form-group mb-3">
                                <label for="modality" class="form-label">Modality</label>
                                <select name="modality" id="modality" class="form-control" required>
                                    <option value="Presencial">Presencial</option>
                                    <option value="Remoto">Remoto</option>
                                    <option value="Híbrido">Híbrido</option>
                                </select>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{ route('companies.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
