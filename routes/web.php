<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Homepage
Route::get('/', function () {
    return view('index');
});

// About page
Route::get('/about', function () {
    return view('about');
});

// Contact page
Route::get('/contact', function () {
    return view('contact');
});

// Pesan tiket page (langsung ambil data flights)
Route::get('/pesantiket', [FlightController::class, 'indexForBooking']);


/*
|--------------------------------------------------------------------------
| Admin & User Routes
|--------------------------------------------------------------------------
| Sementara tanpa auth untuk testing, bisa ditambahkan middleware(['auth'])
*/

# Flight management (admin)
Route::resource('flights', FlightController::class);

# Booking management (user)
Route::resource('bookings', BookingController::class)->only([
    'index', 'create', 'store', 'destroy'
]);

Route::get('/bookings/print/{id}', [App\Http\Controllers\BookingController::class, 'print'])->name('bookings.print');
