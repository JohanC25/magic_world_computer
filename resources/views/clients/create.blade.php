{{-- @extends('layouts.app')

@section('content')
    <h1>Agregar Nuevo Cliente</h1>
    <form method="POST" action="{{ route('clients.store') }}">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>

        <label for="phone_number">Numero Celular:</label>
        <input type="text" id="phone_number" name="phone_number">

        <label for="address">Direccion:</label>
        <textarea id="address" name="address"></textarea>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="contact">Contacto:</label>
        <input type="text" id="contact" name="contact">

        <button type="submit">Agregar Cliente</button>
    </form>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Cliente</title>

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
                <h1 class="card-title" style="text-align: center; font-weight: bold; font-size: 24px;">Nuevo Cliente</h1>
                <form method="POST" action="{{ route('clients.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="cedula">Cedula:</label>
                        <input type="text" id="cedula" name="cedula" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone_number">Numero Celular:</label>
                        <input type="text" id="phone_number" name="phone_number" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Direccion:</label>
                        <textarea id="address" name="address"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="contact">Número Convensional:</label>
                        <input type="text" id="contact" name="contact">
                    </div>                    
    
                    <button type="submit" class="button-submit">Agregar Cliente</button>
                </form>
                <br>
                <a href="{{ route('clients.index') }}" class="button-submit">Regresar al Listado</a>
            </div>
        </div>
    </div>
       
</body>
</html>