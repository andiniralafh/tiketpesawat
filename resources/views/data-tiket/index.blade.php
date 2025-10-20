<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="mb-4 text-center">📋 Daftar Tiket Penumpang</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Nama Penumpang</th>
                <th>Asal</th>
                <th>Tujuan</th>
                <th>Kelas</th>
                <th>Jumlah Penumpang</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        @forelse($tickets as $ticket)
            <tr class="text-center">
                <td>{{ $ticket->id }}</td>
                <td>
                    @foreach(json_decode($ticket->passenger_names, true) as $name)
                        {{ $name }}<br>
                    @endforeach
                </td>
                <td>{{ $ticket->origin }}</td>
                <td>{{ $ticket->destination }}</td>
                <td>{{ $ticket->seat_class }}</td>
                <td>{{ $ticket->passengers }}</td>
                <td>
                    <span class="badge
                        @if($ticket->status == 'Pending') bg-warning
                        @elseif($ticket->status == 'Paid') bg-success
                        @elseif($ticket->status == 'Cancelled') bg-danger
                        @endif">
                        {{ $ticket->status }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('data-tiket.edit', $ticket->id) }}" class="btn btn-primary btn-sm">Edit Status</a>
                    <form action="{{ route('data-tiket.destroy', $ticket->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau hapus tiket ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8" class="text-center text-muted">Belum ada data tiket.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
