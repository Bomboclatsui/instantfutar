<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body class="d-flex flex-column min-vh-100">


<header>
    <nav class="navbar navbar-expand-lg bg-white rounded-5 m-4 p-3 shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{route('fooldal')}}">
                <div class="p-2 rounded-circle shadow-sm">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-fluid" style="height: 50px;">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Menü megnyitása">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse align-items-center" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-dark" href="{{route('fooldal')}}">Főoldal</a>
                    </li>
                    @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{route('cs_fel')}}">Csomag feladás</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Csomag nyomkövetés</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{route('futarokCard')}}">Futárok</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="karrierDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Karrier
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="karrierDropdown">
                                <li><a class="dropdown-item" href="{{route('jelentkezes')}}">Jelentkezés</a></li>
                                <li><a class="dropdown-item" href="#">Munkáról</a></li>
                                <li><a class="dropdown-item" href="#">Állás lehetőségek</a></li>
                            </ul>
                        </li>   
                    @endif
                    @if (Auth::check() && Auth::user()->tipus == 'admin')
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{route('admin.felhasznalok')}}">Felhasználók</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{route('admin.futarok')}}">Futár lista</a>
                        </li>
                    @endif
                </ul>
                <div class="d-flex align-items-center">
                    @if(Auth::check())
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-outline-dark me-2" type="submit">Kijelentkezés</button>
                        </form>
                    @else
                        <a class="btn btn-outline-dark me-2" href="{{ route('login') }}">Bejelentkezés</a>
                        <a class="btn btn-outline-dark" href="{{ route('register') }}">Regisztráció</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="container">
    @if(session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger mt-2">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<main class="container flex-grow-1 py-4">
    @yield('content')
</main>

<footer class="bg-dark text-white mt-auto py-4">
    <div class="container text-center">
        Instant Futár &copy; 
        <a href="{{ route('login') }}" id="admin" class="text-white text-decoration-underline">admin panel</a>
    </div>
</footer>

<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" id="confirmationModalContent">
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('js/navbar.js')}}"></script>

</body>
</html>
