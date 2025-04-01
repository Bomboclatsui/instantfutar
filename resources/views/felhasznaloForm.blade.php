@extends('layouts.master')
@section('title', 'Felhasznalok')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <div class="p-3 rounded border">

                @if (session()->has('felhasznaloEditDone'))
                    <div class="alert alert-success">
                        Az felhasználó MÓDOSÍTÁSA sikeresen mentve
                    </div>
                @endif
                <form method="POST">
                    @csrf
                    <h1>Felhasználó modósítása</h1>
                    
                    <input type="text" name="nev" id="nev" value="{{old('nev', isset($felhasznalo) ? $felhasznalo->name : '' )}}" class="form-control" placeholder="Ide kell írni a nevét">
                    @error('nev')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror

                </form>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-light p-3 border rounded">
                <h2>Leírás</h2>
               
            </div>
        </div>
    </div>
</div>

@endsection