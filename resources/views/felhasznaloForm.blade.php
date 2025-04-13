    @extends('layouts.master')
    @section('title', 'Felhasznalok')
    @section('content')

    <link rel="stylesheet" href="{{asset('css/style_admin.css')}}">

    <h1>Felhasználó modósítása</h1>
        <div class="container mt-3">
            <div class="row">
                <div class="col-6" style="margin: auto">
                    <div class="p-3 rounded border">

                        @if (session()->has('ujkesz'))
                        <div class="alert alert-success">
                            Az felhasználó rögzítése sikeres!
                        </div>
                    @endif

                    @if (session()->has('felhasznaloModositasKesz'))
                        <div class="alert alert-success">
                            Az felhasználó MÓDOSÍTÁSA sikeresen mentve
                        </div>
                    @endif
                        <form method="POST">
                            @csrf
                            <br>
                            <h2><b>Név módosítás</b></h2>
                            <br>
                            <input type="text" name="name" id="name" 
                                value="{{ old('name', isset($felhasznalo) ? $felhasznalo->name : '') }}" class="form-control"
                                placeholder="Ide kell írni a nevét!">
                            @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <br>
                            <br>
                            <h2><b>Email cím módosítás</b></h2>
                            <br>
                            <input type="text" name="email" id="email"
                                value="{{ old('email', isset($felhasznalo) ? $felhasznalo->email : '') }}" class="form-control"
                                placeholder="Ide kell írni az email címét!">
                            @error('email')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <br>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-success w-100">Mentés</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    @endsection
