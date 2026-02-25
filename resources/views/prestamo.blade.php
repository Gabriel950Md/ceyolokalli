@extends('template')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #8B4513;
            --secondary-color: #D2B48C;
            --accent-color: #A52A2A;
            --light-color: #F5F5DC;
            --dark-color: #3E2723;
        }
        
        body {
            font-family: 'Georgia', serif;
            background-color: var(--light-color);
            color: var(--dark-color);
            line-height: 1.6;
        }
        
        .hero-section-loan {
            background: linear-gradient(rgba(139, 69, 19, 0.8), rgba(139, 69, 19, 0.8)), 
                        url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            text-align: center;
            margin-bottom: 50px;
            border-radius: 0 0 20px 20px;
        }
        
        .logo-container-loan {
            max-width: 150px;
            margin: 0 auto 20px;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid var(--secondary-color);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .section-title {
            color: var(--primary-color);
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 10px;
            margin-bottom: 30px;
            position: relative;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 80px;
            height: 2px;
            background-color: var(--accent-color);
        }
        
        .card-custom {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            background-color: white;
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .card-header-custom {
            background-color: var(--primary-color);
            color: white;
            padding: 15px 20px;
            border-bottom: none;
        }
        
        .btn-custom {
            background-color: var(--primary-color);
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            border: none;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-custom:hover {
            background-color: var(--accent-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            color: white;
        }
        
        .btn-outline-custom {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            padding: 10px 25px;
            border-radius: 30px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin: 0 5px;
        }
        
        .btn-outline-custom:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .form-custom {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .form-control {
            border: 2px solid var(--secondary-color);
            border-radius: 8px;
            padding: 10px 15px;
            margin-bottom: 20px;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(139, 69, 19, 0.25);
        }
        
        .quote-section {
            background-color: var(--secondary-color);
            padding: 30px;
            border-radius: 10px;
            margin: 30px 0;
            text-align: center;
            font-style: italic;
            position: relative;
        }
        
        .quote-section:before {
            content: """;
            font-size: 60px;
            color: var(--primary-color);
            opacity: 0.3;
            position: absolute;
            top: -10px;
            left: 20px;
            font-family: Georgia, serif;
        }
        
        .table-custom {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .table-custom thead {
            background-color: var(--primary-color);
            color: white;
        }
        
        .search-box {
            max-width: 400px;
            margin: 0 auto 20px;
        }
        
        .animate-fade-in {
            animation: fadeIn 1s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .loan-types {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            margin: 30px 0;
        }
        
        .loan-type-card {
            text-align: center;
            padding: 20px;
            border: 2px solid var(--secondary-color);
            border-radius: 10px;
            margin: 10px 0;
            transition: all 0.3s ease;
        }
        
        .loan-type-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <section class="hero-section-loan animate-fade-in">
        <div class="container">
            <div class="logo-container-loan">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpXmCEj9iHYloZNifuVV3KNAqhXw8DR5QDgQ&s" 
                     class="img-fluid rounded-circle" alt="Ce Yolo Kalli">
            </div>
            <h1 class="display-4 fw-bold">Préstamo de Libros</h1>
            <p class="lead fs-4">Lleva la lectura a donde vayas</p>
        </div>
    </section>

    <div class="container">
        <section class="text-center my-4">
            <div class="btn-group-lg" role="group">
                <a href="{{route('donaciones')}}" class="btn btn-outline-custom btn-lg me-2">Donaciones</a>
                <a href="{{route('prestamo')}}" class="btn btn-custom btn-lg me-2">Préstamo de Libros</a>
                <a href="{{route('ubicaciones')}}" class="btn btn-outline-custom btn-lg">Ubicaciones</a>
            </div>
        </section>

        <section class="my-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="quote-section">
                        <p class="fs-4 mb-0">"La lectura es el alimento de la imaginación, el motor de la creatividad"</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <h2 class="section-title text-center">Tipos de Préstamo</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="loan-type-card">
                        <i class="fas fa-home fa-3x text-primary mb-3"></i>
                        <h4>Préstamo a Casa</h4>
                        <p>Para la comunidad educativa de la Secundaria Técnica Agropecuaria #54</p>
                        <ul class="text-start">
                            <li>Hasta 3 ejemplares</li>
                            <li>5 días de préstamo</li>
                            <li>Renovable hasta 3 veces</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="loan-type-card">
                        <i class="fas fa-users fa-3x text-primary mb-3"></i>
                        <h4>Préstamo para Actividades</h4>
                        <p>Para familias, docentes y mediadores lectores</p>
                        <ul class="text-start">
                            <li>Hasta 20 libros</li>
                            <li>Periodo de 1 mes</li>
                            <li>Renovable según necesidad</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <h2 class="section-title text-center">Solicitar Préstamo</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="form-custom">
                        <form action="{{ route('prestamop.send') }}" method="POST">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre completo *</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo electrónico *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="telefono" class="form-label">Número de teléfono *</label>
                                        <input type="text" class="form-control" id="telefono" name="telefono" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="libro" class="form-label">Libro a solicitar *</label>
                                        <input type="text" class="form-control" id="libro" name="libro" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="text-center mt-4">
                                <button class="btn btn-custom btn-lg" type="submit">
                                    <i class="fas fa-paper-plane me-2"></i>Solicitar Préstamo
                                </button>
                            </div>
                        </form>
                        
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-4 text-center" role="alert">
                                <i class="fas fa-check-circle me-2"></i>
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <h2 class="section-title text-center">Catálogo de Libros Disponibles</h2>
            
            <div class="row mb-4">
                <div class="col-md-8 mx-auto">
                    <form action="{{ route('prestamop') }}" method="GET" class="search-box">
                        <div class="input-group">
                            <input type="text" name="busqueda" value="{{ $busqueda ?? '' }}" 
                                   class="form-control" placeholder="Buscar libro o autor...">
                            <button type="submit" class="btn btn-custom">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    @if($libros->isEmpty())
                        <div class="text-center py-4">
                            <i class="fas fa-book fa-3x text-muted mb-3"></i>
                            <p class="text-muted fs-5">No se encontraron libros.</p>
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover table-custom">
                                <thead>
                                    <tr>
                                        <th><i class="fas fa-book me-2"></i>Nombre</th>
                                        <th><i class="fas fa-user-edit me-2"></i>Autor</th>
                                        <th><i class="fas fa-info-circle me-2"></i>Estatus</th>
                                        <th><i class="fas fa-fingerprint me-2"></i>ID Libro</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($libros as $libro)
                                        <tr>
                                            <td>{{ $libro->nombre }}</td>
                                            <td>{{ $libro->autor }}</td>
                                            <td>
                                                <span class="badge {{ $libro->estatus == 'Disponible' ? 'bg-success' : 'bg-warning' }}">
                                                    {{ $libro->estatus }}
                                                </span>
                                            </td>
                                            <td><code>{{ $libro->idLibro }}</code></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>
@endsection