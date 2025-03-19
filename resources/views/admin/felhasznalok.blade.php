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
                        <th>Művelet</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista as $felhasznalo)
                        <tr>
                            <td><b>{{ $felhasznalo->id }}</b></td>
                            <td>{{ $felhasznalo->name }}</td>
                            <td>{{ $felhasznalo->email }}</td>
                            <td>{{ $felhasznalo->tipus }}</td>
                            <td>
                                <form action="{{ route('felhasznalo.modosit') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $felhasznalo->id }}">
                                    <button type="submit" class="btn btn-warning btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

    </body>
@endsection
