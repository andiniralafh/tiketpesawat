<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_code',
        'airline',
        'origin',
        'destination',
        'departure_time',
        'arrival_time',
        'flight_duration',
        'economy_price',
        'business_price',
        'first_price'
    ];
}
