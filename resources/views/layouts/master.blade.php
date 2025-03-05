<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body >

  <nav class="navbar navbar-expand-lg bg-white rounded-5 m-4 p-3">
    <div class="container-fluid">
        <a class="navbar-brand align-items-center" href="{{route('fooldal')}}">
            <div class=" p-2 rounded-circle shadow-sm">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-fluid" style="height: 50px;">
            </div>
        </a>
        <div class="justify-left" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fw-bold text-dark" href="{{route('fooldal')}}">Főoldal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Csomag feladás</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Csomag nyomkövetés</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Futárok</a>
                </li>
            </ul>
        </div>


        <div class="d-flex">
            <a href="{{ route('login') }}" class="text-dark fw-bold text-decoration-none me-2">Bejelentkezés</a>
            <a class="text-dark fw-bold text-decoration-none me-2"> | </a>
            <a href="{{ route('register') }}" class="text-dark fw-bold text-decoration-none ms-2">Regisztráció</a>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="container-fluid bg-dark text-white mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="p-5 text-center">
                      Instant Futár &copy;   
                    <a href="{{ route('login') }}" id="admin">admin panel</a>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
