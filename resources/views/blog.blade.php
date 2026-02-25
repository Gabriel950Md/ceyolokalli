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
        
        .hero-section-blog {
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
        
        .logo-container-blog {
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
            transition: transform 0.3s ease;
            background-color: white;
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .card-custom:hover {
            transform: translateY(-5px);
        }
        
        .card-header-custom {
            background-color: var(--primary-color);
            color: white;
            padding: 15px 20px;
            border-bottom: none;
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
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
        
        .carousel-custom {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin: 40px 0;
        }
        
        .carousel-item img {
            height: 200px;
            object-fit: contain;
            background-color: white;
            padding: 20px;
        }
        
        .partner-section {
            background-color: white;
            padding: 40px 0;
            border-radius: 10px;
            margin: 40px 0;
        }
        
        .animate-fade-in {
            animation: fadeIn 1s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
 
    <section class="hero-section-blog animate-fade-in">
        <div class="container">
            <div class="logo-container-blog">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpXmCEj9iHYloZNifuVV3KNAqhXw8DR5QDgQ&s" 
                     class="img-fluid rounded-circle" alt="Ce Yolo Kalli">
            </div>
            <h1 class="display-4 fw-bold">¿Qué Hacemos?</h1>
            <p class="lead fs-4">Descubre nuestras actividades y servicios</p>
        </div>
    </section>


    <div class="container">

        <section class="my-5">
            <div class="row align-items-center">
                <div class="col-md-8 mx-auto">
                    <div class="card card-custom">
                        <div class="card-header card-header-custom text-center">
                            <h3 class="mb-0"><i class="fas fa-book-reader me-2"></i>Acercamiento a la lectura</h3>
                        </div>
                        <div class="card-body p-4 text-center">
                            <p class="fs-5">
                                A través de diferentes actividades literarias: exhibición, consulta y préstamo de libros,
                                lecturas en voz alta, obras de teatro y gestión de talleres.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <h2 class="section-title text-center">Préstamo de Libros</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-header card-header-custom">
                            <h4 class="mb-0"><i class="fas fa-home me-2"></i>Para su disfrute en casa</h4>
                        </div>
                        <div class="card-body">
                            <p class="fs-5">Dirigido a la Comunidad educativa de la Secundaria Técnica Agropecuaria #54</p>
                            <ul class="fs-6">
                                <li>Hasta 3 ejemplares por 5 días</li>
                                <li>Extensión de vigencia del préstamo hasta en 3 ocasiones</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-header card-header-custom">
                            <h4 class="mb-0"><i class="fas fa-users me-2"></i>Para actividades literarias</h4>
                        </div>
                        <div class="card-body">
                            <p class="fs-5">Dirigido a familias, docentes y mediadores lectores</p>
                            <ul class="fs-6">
                                <li>Hasta 20 libros por un mes</li>
                                <li>Renovación del préstamo las ocasiones que lo necesiten</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-center my-5">
            <div class="btn-group-lg" role="group">
                <a href="{{route('donaciones')}}" class="btn btn-custom btn-lg me-2">Donaciones</a>
                <a href="{{route('prestamo')}}" class="btn btn-outline-custom btn-lg me-2">Préstamo de Libros</a>
                <a href="{{route('ubicaciones')}}" class="btn btn-outline-custom btn-lg">Ubicaciones</a>
            </div>
        </section>

        <section class="partner-section">
            <div class="container">
                <h2 class="section-title text-center">Amigos de la Fundación</h2>
                <div id="carouselExampleCaptions" class="carousel slide carousel-custom" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/storage/app/public/img/fundacion/ca.jpg" class="d-block w-100" alt="Caritas Mexico">
                        </div>
                        <div class="carousel-item">
                            <img src="https://vectorlogoseek.com/wp-content/uploads/2018/11/world-vision-vector-logo.png" class="d-block w-100" alt="World Vision">
                        </div>
                        <div class="carousel-item">
                            <img src="https://zongolica.gob.mx/portal/wp-content/uploads/2022/04/Escudo-Original.png" class="d-block w-100" alt="Zongolica">
                        </div>
                        <div class="carousel-item">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTD9r5ZW1c0vuXbe49sYS2Ab49Xcj9m8ZADVg&s" class="d-block w-100" alt="Partner">
                        </div>
                        <div class="carousel-item">
                            <img src="https://scontent.fjal3-1.fna.fbcdn.net/v/t39.30808-6/347864092_625084576335941_8317404768595832523_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeFf4rquMDmsA-lHypyOISPqX2x1ZXUNcA9fbHVldQ1wDxev8LHDJJCWQrLgHVMp_k8aBTkBi2JBq4C1pMdD71GI&_nc_ohc=nHH4TX0ds1oQ7kNvwF2BUuL&_nc_oc=AdmL9wfzCizH4yd44zdtc8yjE0g2C87C7MTLPinYTNvT1WacwNojHh01q1GwrCGH0vw&_nc_zt=23&_nc_ht=scontent.fjal3-1.fna&_nc_gid=7q7dUH7qPFCG2xS1yB1b2A&oh=00_AfI2hDhVLdE_OURldQTmGyjUQhkIjR-Ey6Yoje5DHgoraQ&oe=68296309" class="d-block w-100" alt="Partner">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>
@endsection