@extends('layouts.master')
@section('title','jelentkezes')
@section('content')


<div class="d-flex justify-content-center mt-5 mb-5">
    <div class="w-100" style="max-width: 500px;">
        <div class="p-4 bord">
            <h2 class="text-center betu3">Futár jelentkezési űrlap</h2>

            <form method="POST" action="{{route('ujFutar')}}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Teljes név:')}}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>

                <div class="mb-3">
                    <label for="dob" class="form-label">{{ __('Születési idő:')}}</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>

                <div class="mb-3">
                    <label for="vehicle" class="form-label">Jármű típusa</label>
                    <select class="form-select text-dark" id="vehicle" name="vehicle" required>
                        <option value="">-- Válassz járművet --</option>
                        <option value="bicikli">Bicikli</option>
                        <option value="roller">Roller</option>
                        <option value="motor">Motor</option>
                        <option value="auto">Autó</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email cím:') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label" >{{ __('Futár jelszó:') }}</label>
                    <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                </div>
                <div class="mb-3">
                    <label for="password-confirm" class="form-label">{{ __('Futár jelszó megerősítése:') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <button type="submit" class="btn btn-success w-100">{{ __('Jelentkezés')}}</button>
            </form>
        </div>
    </div>
</div>




@endsection