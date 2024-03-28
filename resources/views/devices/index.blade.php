<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Equipos</title>

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
                <h1 class="card-title" style="text-align: center; font-weight: bold; font-size: 24px;">Lista de Equipos</h1>
                <a href="{{ route('devices.create') }}" class="button-submit" style="margin-bottom: 10px; display: inline-block;">Agregar Nuevo Equipo</a>
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Client</th>
                            <th>Tipo</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($devices as $device)
                            <tr>
                                <td>{{ $device->client->name }}</td>
                                <td>{{ $device->type }}</td>
                                <td>{{ $device->brand }}</td>
                                <td>{{ $device->model }}</td>
                                <td>
                                    <form action="{{ route('devices.show', $device) }}" method="GET">
                                        <button type="submit" class="btn-view">View</button>
                                    </form>
                                    <form action="{{ route('devices.edit', $device) }}" method="GET">
                                        <button type="submit" class="btn-edit">Edit</button>
                                    </form>
                                    <form action="{{ route('devices.destroy', $device) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete" onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?')">Delete</button>
                                    </form>
                                    {{-- <a href="{{ route('devices.generatePDF', ['deviceId' => $device->id]) }}">
                                        <i></i> PDF
                                    </a> --}}
                                    <form action="{{ route('devices.generatePDF', ['deviceId' => $device->id]) }}" method="GET">
                                        <button type="submit" class="btn-view">PDF</button>
                                    </form>
                                </td> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
