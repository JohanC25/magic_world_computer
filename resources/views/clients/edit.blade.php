<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Cliente</title>

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
                <h1 class="card-title" style="text-align: center; font-weight: bold; font-size: 24px;">Editar Cliente</h1>
                <form method="POST" action="{{ route('clients.update', $client) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="name" value="{{ $client->name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="cedula">Cedula:</label>
                        <input type="text" id="cedula" name="cedula" value="{{ $client->cedula }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone_number">Numero Celular:</label>
                        <input type="text" id="phone_number" name="phone_number" value="{{ $client->phone_number }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Direccion:</label>
                        <textarea id="address" name="address">{{ $client->address }}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="{{ $client->email }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="contact">Número Convensional:</label>
                        <input type="text" id="contact" name="contact" value="{{ $client->contact }}">
                    </div>                    
    
                    <button type="submit" class="button-submit">Actualizar Cliente</button>
                </form>
                <br>
                <a href="{{ route('clients.index') }}" class="button-submit">Regresar al Listado</a>
            </div>
        </div>
    </div>
       
</body>
</html>
