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
        <h2 class="text-center mb-4">Szolgáltatásaink</h2>
        
        <div class="row mb-4 align-items-center bg-light text-dark bord">
            <div class="col-md-6">
                <div class="card-body">
                    <h3 class="card-title card_t">Csomag nyomkövetés</h3>
                    <p class="card-text betu3">Kövesse csomagját valós időben, és tudja meg, hogy éppen hol tart a kézbesítés folyamata.</p>
                    <a href="{{route('register')}}" class="btn btn-primary" onclick="regist(event)">Megnézem</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/cs_nyomkovetes.jpg')}}" class="img-fluid rounded" alt="Csomag nyomkövetés">
            </div>
        </div>

        <div class="row mb-4 align-items-center flex-md-row-reverse bg-light text-dark bord">
            <div class="col-md-6">
                <div class="card-body">
                    <h3 class="card-title card_t">Csomag feladás</h3>
                    <p class="card-text betu3">Egyszerűen és gyorsan adhat fel csomagot online, és választhat a különböző szállítási lehetőségek közül.</p>
                    <a href="{{route('register')}}" class="btn btn-primary" onclick="regist(event)">Megnézem</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/cs_fel.png')}}" class="img-fluid rounded" alt="Csomag feladás">
            </div>
        </div>

        <div class="row mb-4 align-items-center bg-light text-dark bord">
            <div class="col-md-6">
                <div class="card-body">
                    <h3 class="card-title card_t">Futárok listája</h3>
                    <p class="card-text betu3">Ismerje meg a futárokat, akik gondoskodnak a csomagok kézbesítéséről, és válassza ki az Ön számára legmegfelelőbbet.</p>
                    <a href="{{route('register')}}" class="btn btn-primary" onclick="regist(event)">Megnézem</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/courier_list.png')}}" class="img-fluid rounded" alt="Futárok listája">
            </div>
        </div>
    </div>

    <script src="{{asset('js/java.js')}}">regist</script>
@endsection