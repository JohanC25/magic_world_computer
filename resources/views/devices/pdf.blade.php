<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden Recepción</title>
    <style>
        @page {
            margin-top: 1mm;
            margin-bottom: 1mm;
        }
        .wordart {
            font-family: 'Arial', sans-serif;
            color: #0000FF;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            background: -webkit-linear-gradient(#0000FF, #000099);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -moz-background-clip: text;
            -moz-text-fill-color: transparent;
            text-shadow: 2px 2px #0000FF;
        }
        .small-italic {
            font-size: 12px;
            font-style: italic;
            margin: 0;
            line-height: 1.2;
            padding: 0;
        }
        .no-border, .no-border th, .no-border td {
            border: none;
        }
        th, td {
            padding: 4px;
            text-align: left;
            font-size: 14px;
        }
        .header-row td {
            font-weight: bold;
            font-size: 18px;
            text-align: center;
            vertical-align: middle;
        }
        .label {
            font-weight: bold;
        }
        .container {
            width: 100%;
            max-height: 145mm; 
            overflow: hidden;
            page-break-after: avoid;
        }
        /* .cut-line {
            border-top: 1px dashed #000;
            margin-top: 20px;
            margin-bottom: 20px;
        } */
        .cut-line {
            border-top: 1px dashed #000;
            width: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: auto;
            margin-right: auto;
        }
        .left-aligned-header {
            text-align: left; 
            font-weight: bold; 
            font-size: 18px;
        }
    </style>
</head>
<body>
<div class="container">
<table class="no-border">
    <tr>
        <td><img src="{{ asset('images/logo.png') }}" alt="Imagen" width="75" height="75"></td>
        <td colspan="2" class="wordart">MAGIC WORLD COMPUTERS</td>
        <td colspan="2" class="no-border compact">
            <table class="no-border">
                <tr><td class="small-italic">Dirección: Tomás de Berlanga E8-31 y Av. Shyris</td></tr>
                <tr><td class="small-italic">Telf.: 6008553 / 0997717507</td></tr>
                <tr><td class="small-italic">Email: vero_meneses@hotmail.com</td></tr>
            </table>
        </td>
    </tr>
</table>

<table class="no-border" style="width: 100%;">
    <tr class="header-row">
        <td colspan="4">ORDEN DE TRABAJO # {{ $device->id }}</td>
    </tr>
    <tr>
        <td><span class="label">Cliente:</span> {{ $device->client->name }}</td>
        <td><span class="label">Cédula/RUC:</span> {{ $device->client->cedula }}</td>
        <td><span class="label">Teléfono:</span> {{ $device->client->phone_number }}</td>
        <td><span class="label">Fecha Recepción:</span> {{ $device->received_date }}</td>
    </tr>
</table>

<table class="no-border" style="width: 100%;">
    <tr>
        <td><strong>Equipo:</strong> {{ $device->type }}</td>
        <td><strong>Marca:</strong> {{ $device->brand }}</td>
        <td><strong>Modelo:</strong> {{ $device->model }}</td>
    </tr>
    <tr>
        <td colspan="3"><strong>Daño:</strong> {{$device->damage}}</td>
    </tr>
    <tr>
        <td colspan="3"><strong>Observaciones:</strong> {{ $device->observation }}</td>
    </tr>
</table>

<table class="no-border" style="width: 100%;">
    <tr>
        <td class="left-aligned-header">IMPORTANTE</td>
    </tr>
    <tr>
        <td>&bull; No nos responsabilizamos por cartuchos y equipos no retirados en un plazo máximo de 30 días</td>
    </tr>
    <tr>
        <td>&bull; Todo equipo reparado y no retirado sera rematado</td>
    </tr>
    <tr>
        <td>&bull; Vigencia de la garantia de recargas de toners y cartuchos es de 48 horas</td>
    </tr>
    <tr>
        <td>&bull; Todo diagnostico del equipo tiene un valor de $18.00</td>
    </tr>
</table>

<table class="no-border" style="width: 100%; margin-top: 20px;">
    <tr>
        <td style="text-align: center; padding-bottom: 0;">
            __________________________________<br>
        </td>
        <td style="text-align: center; padding-bottom: 0;">
            __________________________________<br>
        </td>
    </tr>
    <tr>
        <td style="text-align: center;">
            Recibido por:<br>
            Ing. Verónica Meneses
        </td>
        <td style="text-align: center;">
            Entregado por:<br>
            {{ $device->client->name }}
        </td>
    </tr>
</table>
</div>
<div class="cut-line"></div>
<div class="container">
<table class="no-border">
    <tr>
        <td><img src="{{ asset('images/logo.png') }}" alt="Imagen" width="75" height="75"></td>
        <td colspan="2" class="wordart">MAGIC WORLD COMPUTERS</td>
        <td colspan="2" class="no-border compact">
            <table class="no-border">
                <tr><td class="small-italic">Dirección: Tomás de Berlanga E8-31 y Av. Shyris</td></tr>
                <tr><td class="small-italic">Telf.: 6008553 / 0997717507</td></tr>
                <tr><td class="small-italic">Email: vero_meneses@hotmail.com</td></tr>
            </table>
        </td>
    </tr>
</table>

<table class="no-border" style="width: 100%;">
    <tr class="header-row">
        <td colspan="4">ORDEN DE TRABAJO # {{ $device->id }}</td>
    </tr>
    <tr>
        <td><span class="label">Cliente:</span> {{ $device->client->name }}</td>
        <td><span class="label">Cédula/RUC:</span> {{ $device->client->cedula }}</td>
        <td><span class="label">Teléfono:</span> {{ $device->client->phone_number }}</td>
        <td><span class="label">Fecha Recepción:</span> {{ $device->received_date }}</td>
    </tr>
</table>

<table class="no-border" style="width: 100%;">
    <tr>
        <td><strong>Equipo:</strong> {{ $device->type }}</td>
        <td><strong>Marca:</strong> {{ $device->brand }}</td>
        <td><strong>Modelo:</strong> {{ $device->model }}</td>
    </tr>
    <tr>
        <td colspan="3"><strong>Daño:</strong> {{$device->damage}}</td>
    </tr>
    <tr>
        <td colspan="3"><strong>Observaciones:</strong> {{ $device->observation }}</td>
    </tr>
</table>

<table class="no-border" style="width: 100%;">
    <tr>
        <td class="left-aligned-header">IMPORTANTE</td>
    </tr>
    <tr>
        <td>&bull; No nos responsabilizamos por cartuchos y equipos no retirados en un plazo máximo de 30 días</td>
    </tr>
    <tr>
        <td>&bull; Todo equipo reparado y no retirado sera rematado</td>
    </tr>
    <tr>
        <td>&bull; Vigencia de la garantia de recargas de toners y cartuchos es de 48 horas</td>
    </tr>
    <tr>
        <td>&bull; Todo diagnostico del equipo tiene un valor de $18.00</td>
    </tr>
</table>

<table class="no-border" style="width: 100%; margin-top: 20px;">
    <tr>
        <td style="text-align: center; padding-bottom: 0;">
            __________________________________<br>
        </td>
        <td style="text-align: center; padding-bottom: 0;">
            __________________________________<br>
        </td>
    </tr>
    <tr>
        <td style="text-align: center;">
            Recibido por:<br>
            Ing. Verónica Meneses
        </td>
        <td style="text-align: center;">
            Entregado por:<br>
            {{ $device->client->name }}
        </td>
    </tr>
</table>
</div>
</body>
</html>
