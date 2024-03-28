<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Device;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Log;

class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::all();
        return view('devices.index', compact('devices'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('devices.create', compact('clients'));
    }

    public function store(Request $request)
    {
        Device::create($request->all());
        return redirect()->route('devices.index');
    }

    public function show($id)
    {
        $device = Device::find($id);
        return view('devices.show', compact('device'));
    }

    public function edit($id)
    {
        $device = Device::find($id);
        $clients = Client::all();
        return view('devices.edit', compact('device', 'clients'));
    }

    public function update(Request $request, $id)
    {
        $device = Device::find($id);
        $device->update($request->all());
        return redirect()->route('devices.index');
    }

    public function destroy($id)
    {
        Device::destroy($id);
        return redirect()->route('devices.index');
    }

    public function generatePDF(Request $request)
    {
        
        $deviceId = $request->deviceId;
        $device = Device::with('client')->find($deviceId);
        if (!$device) {
            return redirect()->back()->with('error', 'Dispositivo no encontrado');
        }
        $pdf = PDF::loadview('devices.pdf', compact('device'));
        $filename = 'Orden_Recepcion_'.$device->client->name.'_'.$deviceId;
        return $pdf->download($filename.'.pdf');
    }
}
