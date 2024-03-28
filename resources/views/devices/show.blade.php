<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Equipo</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @include('layouts.navigation')

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> 
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title" style="text-align: center; font-weight: bold; font-size: 24px;">Detalles del Equipo</h1>
                <div class="details">
                    <p><strong>Cliente:</strong> {{ $device->client->name }}</p>
                    <p><strong>Tipo:</strong> {{ $device->type }}</p>
                    <p><strong>Marca:</strong> {{ $device->brand }}</p>
                    <p><strong>Modelo:</strong> {{ $device->model }}</p>
                    <p><strong>Daño:</strong> {{ $device->damage }}</p>
                    <p><strong>Observaciones:</strong> {{ $device->observation }}</p>
                    <p><strong>Reparación:</strong> {{ $device->repairs }}</p>
                    <p><strong>Costo de Reparación:</strong> {{ $device->repair_cost }}</p>
                    <p><strong>Fecha de Recepción:</strong> {{ $device->pickup_date ? $device->pickup_date : 'N/A' }}</p>
                    <p><strong>Fecha de Recepción:</strong> {{ $device->received_date ? $device->received_date : 'N/A' }}</p>
                    <p><strong>¿Fue Recogido?:</strong> {{ $device->is_picked_up ? 'Yes' : 'No' }}</p>
                    <br>
                    <a href="{{ route('devices.index') }}" class="button-submit">Regresar al Listado</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
