<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::all();
        return view('flights.index', compact('flights'));
    }

    public function create()
    {
        return view('flights.create');
    }

    public function store(Request $request)
    {
        // Basic: langsung create tanpa validasi
        Flight::create([
            'flight_code'     => $request->flight_code,
            'airline'         => $request->airline,
            'origin'          => $request->origin,
            'destination'     => $request->destination,
            'departure_time'  => str_replace('T',' ',$request->departure_time),
            'arrival_time'    => str_replace('T',' ',$request->arrival_time),
            'flight_duration' => $request->flight_duration,
            'economy_price'   => $request->economy_price,
            'business_price'  => $request->business_price,
            'first_price'     => $request->first_price,
        ]);

        return redirect()->route('flights.index');
    }
}
