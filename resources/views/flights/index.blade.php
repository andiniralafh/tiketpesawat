<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penerbangan - Langit Nusantara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">Daftar Penerbangan</h1>

    <a href="{{ route('flights.create') }}" class="btn btn-primary mb-3">Tambah Penerbangan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Airline</th>
                <th>Asal</th>
                <th>Tujuan</th>
                <th>Keberangkatan</th>
                <th>Kedatangan</th>
                <th>Durasi</th>
                <th>Harga Economy</th>
                <th>Harga Business</th>
                <th>Harga First</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($flights as $flight)
            <tr>
                <td>{{ $flight->id }}</td>
                <td>{{ $flight->flight_code }}</td>
                <td>{{ $flight->airline }}</td>
                <td>{{ $flight->origin }}</td>
                <td>{{ $flight->destination }}</td>
                <td>{{ $flight->departure_time }}</td>
                <td>{{ $flight->arrival_time }}</td>
                <td>{{ $flight->flight_duration }}</td>
                <td>Rp {{ number_format($flight->economy_price,0,',','.') }}</td>
                <td>Rp {{ number_format($flight->business_price,0,',','.') }}</td>
                <td>Rp {{ number_format($flight->first_price,0,',','.') }}</td>
                <td>
                    <a href="{{ route('flights.edit', $flight->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('flights.destroy', $flight->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="12" class="text-center">Belum ada penerbangan</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
