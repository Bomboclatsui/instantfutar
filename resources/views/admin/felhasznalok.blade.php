@extends('layouts.master')
@section('title','Felhasznalok')
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
            <h2 class="text-center mb-4">Felhasznalok Adatok</h2>
            <table class="table table-bordered table-info table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Név</th>
                        <th>Email cím</th>
                        <th>Felhasználó típus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista as $felhasznalo)
                        <tr>
                            <td><b>{{ $felhasznalo->id }}</b></td>
                            <td>{{ $felhasznalo->name }}</td>
                            <td>{{ $felhasznalo->email }}</td>
                            <td>{{ $felhasznalo->tipus }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

    </body>
@endsection
