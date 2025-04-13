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
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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
                        <a class="nav-link text-dark" href="{{route('admin.felhasznalok')}}">Felhasználok</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{route('admin.futarok')}}">Futár lista</a>
                    </li>
                @endif
                
            </ul>
        </div>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
        <div class="d-flex">
            @if(Auth::check())
            <!-- Ha be van jelentkezve, csak a Kijelentkezés gomb látszik -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="text-dark fw-bold text-decoration-none me-2" type="submit">Kijelentkezés</button>
            </form>
             @else
            <!-- Ha nincs bejelentkezve, mutassuk a Bejelentkezés és Regisztráció gombokat -->
                <a class="text-dark fw-bold text-decoration-none me-2" href="{{ route('login') }}">Bejelentkezés</a>
                <a class="text-dark fw-bold text-decoration-none me-2"> | </a>
                <a class="text-dark fw-bold text-decoration-none me-2" href="{{ route('register') }}">Regisztráció</a>
            @endif
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

  <!-- modal -->
  <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" id="confirmationModalContent">

    </div>
</div>

</body>
</html>
