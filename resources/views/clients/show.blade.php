<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Cliente</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @include('layouts.navigation')

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> 
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title" style="text-align: center; font-weight: bold; font-size: 24px;">Detalles del Cliente</h1>
                <p><strong>Cliente:</strong> {{ $client->name }}</p>
                <p><strong>Cedula:</strong> {{ $client->cedula }}</p>
                <p><strong>Phone Number:</strong> {{ $client->phone_number }}</p>
                <p><strong>Address:</strong> {{ $client->address }}</p>
                <p><strong>Email:</strong> {{ $client->email }}</p>
                <p><strong>Contact Person:</strong> {{ $client->contact }}</p>
                <br>
                <a href="{{ route('clients.index') }}" class="button-submit">Regresar al Listado</a>
            </div>
        </div>
    </div>
</body>
</html>
