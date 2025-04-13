@extends('layouts.master')
@section('title', 'Futár módosítása')
@section('content')

<div class="container mt-5">
    <div class="col-md-6 mx-auto p-4 border rounded">
        <h2 class="text-center">Futár adatainak módosítása</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('futarUpdate', $futar->id) }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Teljes név</label>
                <input type="text" name="name" value="{{ old('name', $futar->name) }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email cím</label>
                <input type="email" name="email" value="{{ old('email', $futar->email) }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="dob" class="form-label">Születési idő</label>
                <input type="date" name="dob" value="{{ old('dob', $futar->dob) }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="vehicle" class="form-label">Jármű típusa</label>
                <select name="vehicle" class="form-select" required>
                    <option value="bicikli" {{ $futar->vehicle == 'bicikli' ? 'selected' : '' }}>Bicikli</option>
                    <option value="roller" {{ $futar->vehicle == 'roller' ? 'selected' : '' }}>Roller</option>
                    <option value="motor" {{ $futar->vehicle == 'motor' ? 'selected' : '' }}>Motor</option>
                    <option value="auto" {{ $futar->vehicle == 'auto' ? 'selected' : '' }}>Autó</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success w-100">Mentés</button>
        </form>
    </div>
</div>

@endsection
    