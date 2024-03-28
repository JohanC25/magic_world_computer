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
                <h1 class="card-title" style="text-align: center; font-weight: bold; font-size: 24px;">Lista de Clientes</h1>
                <form action="{{ route('clients.create') }}" method="GET" style="margin-bottom: 10px; display: inline-block;">
                    <button type="submit" class="button-submit">Agregar nuevo cliente</button>
                </form>            
                
                <form action="{{ route('clients.index') }}" method="POST">
                    @csrf
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Cédula</th>
                                <th>Número Celular</th>
                                <th>Correo Electronico</th>
                                <th>Dirección</th>
                                <th>Contacto Persona</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->cedula }}</td>
                                    <td>{{ $client->phone_number }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>{{ $client->address }}</td>
                                    <td>{{ $client->contact }}</td>
                                    <td>
                                        <form action="{{ route('clients.show', $client) }}" method="GET">
                                            <button type="submit" class="btn-view">View</button>
                                        </form>
                                        <form action="{{ route('clients.edit', $client) }}" method="GET">
                                            <button type="submit" class="btn-edit">Edit</button>
                                        </form>                                        
                                        <form action="{{ route('clients.destroy', $client) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-delete" onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?')">Delete</button>
                                        </form>
                                    </td>                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
