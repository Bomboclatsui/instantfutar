
@extends('layouts.master')
@section('title', 'futarokCard')
@section('content')

<script src="{{ asset('js/futarScript.js') }}"></script>

    <div class="container">
        <h1 class="mb-4">Futárok</h1>
        <div class="row">
            @foreach($lista as $futar)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $futar->name }}</h5>
                            <p class="card-text"><strong>Email:</strong> {{ $futar->email }}</p>
                            <p class="card-text"><strong>Születési dátum:</strong> {{ $futar->dob }}</p>
                            <p class="card-text"><strong>Jármű:</strong> {{ ucfirst($futar->vehicle) }}</p>
    
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-sm btn-warning" onclick="">Részletek</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>





@endsection