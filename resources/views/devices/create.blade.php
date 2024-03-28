{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title" style="text-align: center; font-weight: bold; font-size: 24px;">Agregar Nuevo Dispositivo</h1>
                <form method="POST" action="{{ route('devices.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="client_id">Cliente:</label>
                        <select id="client_id" name="client_id">
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="type">Tipo:</label>
                        <input type="text" id="type" name="type" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="brand">Marca:</label>
                        <input type="text" id="brand" name="brand" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="model">Modelo:</label>
                        <input type="text" id="model" name="model" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="damage">Daño:</label>
                        <textarea id="damage" name="damage"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="repairs">Reparaciones:</label>
                        <textarea id="repairs" name="repairs"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="repair_cost">Costo de Reparación:</label>
                        <input type="number" id="repair_cost" name="repair_cost" step="0.01">
                    </div>
                    
                    <div class="form-group">
                        <label for="pickup_date">Fecha de Recogida:</label>
                        <input type="date" id="pickup_date" name="pickup_date">
                    </div>
                    
                    <div class="form-group">
                        <label for="received_date">Fecha de Recepción:</label>
                        <input type="date" id="received_date" name="received_date">
                    </div>
                    
                    <div class="form-group">
                        <label for="is_picked_up">¿Fue Recogido?:</label>
                        <input type="checkbox" id="is_picked_up" name="is_picked_up">
                    </div>
    
                    <button type="submit" class="button-submit">Agregar Dispositivo</button>
                </form>
            </div>
        </div>
    </div>
@endsection --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Equipos</title>
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
                <h1 class="card-title" style="text-align: center; font-weight: bold; font-size: 24px;">Agregar Nuevo Equipo</h1>
                <form method="POST" action="{{ route('devices.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="client_search">Buscar Cliente:</label>
                        <input type="text" id="client_search" name="client_search" class="form-control" placeholder="Buscar cliente...">
                    </div>
                    <div class="form-group">
                        <label for="client_id">Cliente:</label>
                        <select id="client_id" name="client_id" class="form-control">
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}" data-name="{{ $client->name }}" data-cedula="{{ $client->cedula }}">{{ $client->name }} - {{ $client->cedula }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="type">Tipo:</label>
                        <input type="text" id="type" name="type" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="brand">Marca:</label>
                        <input type="text" id="brand" name="brand" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="model">Modelo:</label>
                        <input type="text" id="model" name="model" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="damage">Daño:</label>
                        <textarea id="damage" name="damage"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="observation">Observaciones:</label>
                        <textarea id="observation" name="observation"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="repairs">Reparaciones:</label>
                        <textarea id="repairs" name="repairs"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="repair_cost">Costo de Reparación:</label>
                        <input type="number" id="repair_cost" name="repair_cost" step="0.01">
                    </div>
                    
                    <div class="form-group">
                        <label for="pickup_date">Fecha de Recogida:</label>
                        <input type="date" id="pickup_date" name="pickup_date">
                    </div>
                    
                    <div class="form-group">
                        <label for="received_date">Fecha de Recepción:</label>
                        <input type="date" id="received_date" name="received_date">
                    </div>
                    
                    <div class="form-group">
                        <label for="is_picked_up">¿Fue Recogido?:</label>
                        <input type="checkbox" id="is_picked_up" name="is_picked_up">
                    </div>
    
                    <button type="submit" class="button-submit">Agregar Dispositivo</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const clientSearchInput = document.getElementById('client_search');
        const clientSelect = document.getElementById('client_id');
        const clientOptions = {!! json_encode($clients) !!};

        clientSearchInput.addEventListener('input', function() {
            const searchTerm = this.value.trim().toLowerCase();

            clientSelect.innerHTML = '';

            clientOptions.forEach(function(client) {
                if (client.name.toLowerCase().includes(searchTerm) || client.cedula.includes(searchTerm)) {
                    const option = document.createElement('option');
                    option.value = client.id;
                    option.textContent = `${client.name} - ${client.cedula}`;
                    clientSelect.appendChild(option);
                }
            });
        });
    });
</script>