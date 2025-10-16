<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Flight;

class BookingController extends Controller
{
    // ✅ tampilkan daftar tiket berdasarkan nama lengkap
    public function index(Request $request)
    {
        $nama = $request->input('nama_lengkap');

        if ($nama) {
            $bookings = Booking::with('flight')
                ->where('passenger_names', 'LIKE', "%{$nama}%")
                ->get();
        } else {
            $bookings = collect(); // kosong dulu kalau belum cari nama
        }

        return view('bookings.index', compact('bookings', 'nama'));
    }

    // ✅ form pemesanan tiket
    public function create()
    {
        $flights = Flight::all();
        return view('bookings.create', compact('flights'));
    }

    // ✅ simpan data pemesanan (tiap nama → tiket sendiri)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|in:Tuan,Nyonya,Nona',
            'full_name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'origin' => 'required|string',
            'destination' => 'required|string',
            'departure_time' => 'required|string',
            'passengers' => 'required|integer|min:1',
            'seat_class' => 'required|in:Economy,Business,First',
            'passenger_names' => 'required|array|min:1',
            'passenger_names.*' => 'required|string|max:100',
            'payment_method' => 'required|in:Transfer Bank,E-Wallet,Credit Card', // ✅ validasi sesuai migration
        ]);

        // 🔍 cari flight
        $flight = Flight::where('origin', $request->origin)
            ->where('destination', $request->destination)
            ->where('departure_time', $request->departure_time)
            ->first();

        if (!$flight) {
            return back()->with('error', 'Rute penerbangan tidak ditemukan.');
        }

        // 💰 ambil harga sesuai kelas
        $base_price = match ($request->seat_class) {
            'Business' => $flight->business_price ?? 0,
            'First' => $flight->first_price ?? 0,
            default => $flight->economy_price ?? 0,
        };

        $total_price = $base_price * $request->passengers;

        // 🔁 buat tiket terpisah untuk tiap penumpang
        foreach ($request->passenger_names as $name) {
            Booking::create([
                'flight_id' => $flight->id,
                'origin' => $request->origin,
                'destination' => $request->destination,
                'departure_time' => $request->departure_time,
                'title' => $request->title,
                'full_name' => $name, // simpan per tiket
                'phone' => $request->phone,
                'email' => $request->email,
                'passengers' => 1,
                'seat_class' => $request->seat_class,
                'total_price' => $base_price,
                'status' => 'Pending',
                'payment_method' => $request->payment_method, // ✅ ambil dari form
                'payment_date' => null, // opsional
                'passenger_names' => json_encode([$name]),
            ]);
        }

        // ✅ redirect ke halaman daftar tiket
        return redirect()->route('bookings.index', ['nama_lengkap' => $request->full_name])
            ->with('success', 'Booking berhasil dibuat untuk semua penumpang.');
    }

    // ✅ hapus tiket
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking berhasil dibatalkan.');
    }

    // ✅ cetak tiket (belum multi-print)
    public function print($id)
    {
        $booking = Booking::with('flight')->findOrFail($id);

        // decode nama penumpang
        $names = is_array($booking->passenger_names)
            ? $booking->passenger_names
            : json_decode($booking->passenger_names, true);

        return view('bookings.print', compact('booking', 'names'));
    }
}
