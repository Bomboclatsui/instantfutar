@extends('layouts.master')
@section('title','Főoldal')
@section('content')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <style>
        @import url('https://fonts.cdnfonts.com/css/catchy-mager');
        .betu{
        font-family: 'Coco Gothic', sans-serif;
        }
        .betu2{
            font-family: Times, "Times New Roman", Georgia, serif;
        }
        h1{
            font-size: 1200%;
        }
        body{
            background-image: url('{{ asset('img/hatér.PNG') }}');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            color: white;
        }
        .container {
            display: flex;
            justify-content: center;  /* Vízszintes középre igazítás */
            align-items: center;  /* Függőleges középre igazítás */
            height: 100vh;  /* A teljes képernyő magasságát elfoglalja */
            text-align: center; /* Szöveg középre igazítása */
        }
    </style>
    
    <div class="container mt-3">
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
</body>
</html>

@endsection