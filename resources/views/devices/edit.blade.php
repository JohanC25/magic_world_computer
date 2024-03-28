<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Device</title>

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
                <h1 class="card-title" style="text-align: center; font-weight: bold; font-size: 24px;">Editar Equipo</h1>
                <form method="POST" action="{{ route('devices.update', $device) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="client_id">Cliente:</label>
                        <select id="client_id" name="client_id">
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}" {{ $client->id == $device->client_id ? 'selected' : '' }}>
                                    {{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="type">Tipo:</label>
                        <input type="text" id="type" name="type" value="{{ $device->type }}" required>
                    </div>

                    <div class="form-group">
                        <label for="brand">Marca:</label>
                        <input type="text" id="brand" name="brand" value="{{ $device->brand }}" required>
                    </div>

                    <div class="form-group">
                        <label for="model">Modelo:</label>
                        <input type="text" id="model" name="model" value="{{ $device->model }}" required>
                    </div>

                    <div class="form-group">
                        <label for="damage">Daño:</label>
                        <textarea id="damage" name="damage">{{ $device->damage }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="observation">Daño:</label>
                        <textarea id="damobservationage" name="observation">{{ $device->observation }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="repairs">Reparaciones:</label>
                        <textarea id="repairs" name="repairs">{{ $device->repairs }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="repair_cost">Costo de Reparaciones:</label>
                        <input type="number" id="repair_cost" name="repair_cost" value="{{ $device->repair_cost }}" step="0.01">
                    </div>

                    <div class="form-group">
                        <label for="pickup_date">Fecha de Recogida:</label>
                        <input type="date" id="pickup_date" name="pickup_date"
                            value="{{ $device->pickup_date ? $device->pickup_date : '' }}">
                    </div>

                    <div class="form-group">
                        <label for="received_date">Fecha de Recepción:</label>
                        <input type="date" id="received_date" name="received_date"
                            value="{{ $device->received_date ? $device->received_date : '' }}">
                    </div>

                    <div class="form-group">
                        <label for="is_picked_up">¿Fue Recogido?:</label>
                        <input type="checkbox" id="is_picked_up" name="is_picked_up" {{ $device->is_picked_up ? 'checked' : '' }}>
                    </div>

                    <button type="submit" class="button-submit">Update Device</button>
                </form>
                <br>
                <a href="{{ route('devices.index') }}" class="button-submit">Regresar al Listado</a>
            </div>
        </div>
    </div>
</body>
</html>
