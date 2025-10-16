<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_id',
        'origin',
        'destination',
        'departure_time',
        'seat_class',
        'passengers',
        'passenger_names',
        'total_price',
        'status',
        'payment_method',
        'payment_date'
    ];

    protected $casts = [
        'passenger_names' => 'array',
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
