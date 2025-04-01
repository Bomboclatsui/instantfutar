@extends('layouts.master')
@section('title', 'Felhasznalok')
@section('content')
    <!DOCTYPE html>
    <html lang="hu">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Felhasználok Adatbázis Táblázat</title>
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style_admin.css') }}">
        <script src="{{ asset('js/script.js') }}"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>

        <div class="container my-4">
            <h2 class="text-center text-light mb-4">Felhasznalói Lista</h2>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <table class="table table-bordered table-info table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Név</th>
                        <th>Email cím</th>
                        <th>Felhasználó típus</th>
                        <th>Műveletek</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista as $felhasznalo)
                        <tr id="user_{{ $felhasznalo->id }}">
                            <td><b>{{ $felhasznalo->id }}</b></td>
                            <td>{{ $felhasznalo->name }}</td>
                            <td>{{ $felhasznalo->email }}</td>
                            <td>{{ $felhasznalo->tipus }}</td>
                            <td>
                                <form action="{{ route('felhasznalo.modosit') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $felhasznalo->id }}">
                                    <label class="switch">
                                        <input type="checkbox" @if ($felhasznalo->tipus == 'admin') checked @endif
                                            onchange="this.form.submit()">
                                        <span class="slider"></span>
                                    </label>
                                </form>

                                <a href="{{ route('felhasznaloEdit', $felhasznalo->id) }}" class="btn btn-warning"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                    </svg></a>

                                <button type="button" class="btn btn-danger btn-sm"
                                    onclick="showConfirm('{{ route('confirmFelhasznaloDelete', $felhasznalo->id) }}')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                    </svg>
                                </button>


                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

    </body>
@endsection
