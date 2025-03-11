@extends('layouts.master')
@section('title','Főoldal')
@section('content')

<link rel="stylesheet" href="{{asset('css/style.css')}}">

    <div class="container2 mt-3">
        <div class="row">
            <div class="col-12 col-xs-12">
                <div class="text-center">
                    <h5 class="betu">Ü D V Ö Z Ö L J Ü K</h5>
                    <h1 class="betu2">Az Instant Futár</h1>
                    <h3>weboldalán</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Szolgáltatásaink</h1>
        
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Csomag nyomkövetés</h3>
                <p class="card-text">Kövesse csomagját valós időben, és tudja meg, hogy éppen hol tart a kézbesítés folyamata.</p>
                <a href="#" class="btn btn-primary" onclick="checkRegistration(event)">Megnézem</a>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Csomag feladás</h3>
                <p class="card-text">Egyszerűen és gyorsan adhat fel csomagot online, és választhat a különböző szállítási lehetőségek közül.</p>
                <a href="#" class="btn btn-primary" onclick="checkRegistration(event)">Megnézem</a>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Futárok listája</h3>
                <p class="card-text">Ismerje meg a futárokat, akik gondoskodnak a csomagok kézbesítéséről, és válassza ki az Ön számára legmegfelelőbbet.</p>
                <a href="#" class="btn btn-primary" onclick="checkRegistration(event)">Megnézem</a>
            </div>
        </div>
    </div>

    <script>
        function checkRegistration(event) {
            event.preventDefault();
            alert("A tartalom megtekintéséhez regisztráció szükséges.");
        }
    </script>
@endsection