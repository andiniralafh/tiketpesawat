<!DOCTYPE html> 
<html lang="id">
<head>
    <meta charset="UTF-8"> 
    <title>E-Tiket</title> 
    <!-- Menghubungkan file CSS Bootstrap versi 5.3 untuk styling -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <!-- Kotak utama tiket -->
    <div class="ticket-box">

        <!-- Bagian header tiket -->
        <div class="header">
            <h2>E-Tiket</h2> <!-- Judul tiket -->
            <p><strong>LangitNusantara</strong></p> <!-- Nama maskapai -->
        </div>

        <!-- Info penerbangan -->
        <div class="info-box">
            <h5 class="fw-bold mb-3">Penerbangan Pergi</h5> <!-- Judul bagian penerbangan -->

            <!-- Menampilkan kode booking acak 6 huruf kapital -->
            <p><strong>Kode Booking (PNR):</strong> {{ strtoupper(Str::random(6)) }}</p>

            <!-- Menampilkan rute penerbangan (asal → tujuan) -->
            <p><strong>Rute:</strong> {{ $booking->flight->origin ?? '-' }} → {{ $booking->flight->destination ?? '-' }}</p>

            <!-- Menampilkan waktu keberangkatan -->
            <p><strong>Keberangkatan:</strong> {{ $booking->flight->departure_time ?? '-' }}</p>

            <!-- Menampilkan kode penerbangan (gate), default GA1 -->
            <p><strong>Gate:</strong> {{ $booking->flight->flight_code ?? 'GA1' }}</p>
        </div>

        <!-- Info detail penumpang -->
        <div class="info-box">
            <h5 class="fw-bold mb-3">Detail Penumpang</h5>

            <!-- Membuat tabel Bootstrap dengan border dan teks rata tengah -->
            <table class="table table-bordered text-center">
                <thead class="table-light"> <!-- Bagian kepala tabel -->
                    <tr>
                        <th>No</th> <!-- Kolom nomor -->
                        <th>Titel</th> <!-- Kolom titel (Tn/Ny/Nn) -->
                        <th>Nama Penumpang</th> <!-- Kolom nama -->
                        <th>Jenis Tiket</th> <!-- Kolom jenis (dewasa/anak) -->
                        <th>Bagasi</th> <!-- Kolom bagasi -->
                        <th>Nomor Tiket</th> <!-- Kolom nomor tiket -->
                    </tr>
                </thead>

                <tbody>
                    <!-- Kode PHP dalam Blade untuk memproses nama penumpang -->
                    @php
                        $names = is_array($booking->passenger_names)
                            ? $booking->passenger_names
                            : explode(',', $booking->passenger_names);
                    @endphp

                    <!-- Perulangan setiap nama penumpang -->
                    @foreach($names as $index => $name)
                    <tr>
                        <td>{{ $index + 1 }}</td> <!-- Nomor urut -->
                        <td>{{ $booking->title ?? '-' }}</td> <!-- Titel -->
                        <td>{{ trim($name) }}</td> <!-- Nama penumpang -->
                        <td>Dewasa</td> <!-- Jenis tiket (fix: Dewasa) -->
                        <td>20 Kg</td> <!-- Berat bagasi -->
                        <td>{{ rand(1000000000000, 9999999999999) }}</td> <!-- Nomor tiket acak 13 digit -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Bagian catatan penting -->
        <div class="note mt-3">
            <p><strong>Catatan:</strong></p>
            <ul>
                <li>Semua waktu adalah waktu bandara setempat.</li> <!-- Info waktu lokal -->
                <li>Lakukan check-in minimal 1 jam sebelum keberangkatan domestik.</li> <!-- Saran check-in -->
            </ul>
        </div>

        <!-- Tombol cetak tiket -->
        <div class="text-center mt-4">
            <button onclick="window.print()" class="btn btn-primary btn-print">Cetak Tiket</button>
            <!-- onclick="window.print()" berfungsi membuka dialog print browser -->
        </div>
    </div>
</body>
</html>
