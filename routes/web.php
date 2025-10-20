<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AuthRegisterController;
use App\Http\Controllers\DataTiketController;

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

// ==================== AUTH ====================
// Register
Route::get('/register', [AuthRegisterController::class, 'registerForm'])->name('registerForm');
Route::post('/register', [AuthRegisterController::class, 'register'])->name('register');

// Login
Route::get('/login', [AuthRegisterController::class, 'loginForm'])->name('loginForm');
Route::post('/login', [AuthRegisterController::class, 'login'])->name('login');

// Data Tiket

Route::prefix('data-tiket')->group(function () {
    Route::get('/', [DataTiketController::class, 'index'])->name('data-tiket.index');
    Route::get('/{id}/edit', [DataTiketController::class, 'edit'])->name('data-tiket.edit');
    Route::put('/{id}', [DataTiketController::class, 'update'])->name('data-tiket.update');
    Route::delete('/{id}', [DataTiketController::class, 'destroy'])->name('data-tiket.destroy');
});

