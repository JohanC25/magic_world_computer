<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id', 
        'type', 
        'brand', 
        'model', 
        'damage', 
        'observation',
        'repairs', 
        'repair_cost', 
        'pickup_date', 
        'received_date', 
        'is_picked_up'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
