<!-- resources/views/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración Solicitud FPDual</title>
    <!-- Enlace a Bootstrap (CDN) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 1.25rem;
            font-weight: bold;
            text-align: center;
        }
        .card-body {
            background-color: white;
        }
        .btn-block {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .btn-block:hover {
            background-color: #0056b3;
        }
        h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #343a40;
            text-align: center;
            margin-bottom: 50px;
        }
        .row {
            margin-top: 20px;
        }
        .card-text {
            font-size: 1rem;
            color: #6c757d;
        }
    </style>
</head>
<body>

    <!-- Contenedor Principal -->
    <div class="container my-5">

        <!-- Título -->
        <h1>Panel de Administración Solicitud FPDual</h1>

        <!-- Fila de Tarjetas -->
        <div class="row justify-content-center">

            <!-- Tarjeta Profesores -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        Profesores
                    </div>
                    <div class="card-body">
                        <p class="card-text">Administra a los profesores registrados en el sistema.</p>
                        <a href="{{ route('professors.index') }}" class="btn btn-block">Ir a Profesores</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta Solicitudes -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        Solicitudes
                    </div>
                    <div class="card-body">
                        <p class="card-text">Revisa y gestiona las solicitudes de las empresas.</p>
                        <a href="{{ route('applications.index') }}" class="btn btn-block">Ir a Solicitudes</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta Empresas -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        Empresas
                    </div>
                    <div class="card-body">
                        <p class="card-text">Gestiona las empresas registradas en el sistema.</p>
                        <a href="{{ route('companies.index') }}" class="btn btn-block">Ir a Empresas</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
