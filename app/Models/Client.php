<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'cedula',
        'phone_number', 
        'address', 
        'email', 
        'contact'
    ];

    public function devices()
    {
        return $this->hasMany(Device::class);
    }
}
