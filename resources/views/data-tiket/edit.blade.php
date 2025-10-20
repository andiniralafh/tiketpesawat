<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Status Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-header text-center bg-dark text-white">
            <h5>Edit Status Tiket #{{ $ticket->id }}</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('data-tiket.update', $ticket->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Penumpang</label>
                    <input type="text" class="form-control" value="{{ implode(', ', json_decode($ticket->passenger_names, true)) }}" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status Tiket</label>
                    <select name="status" class="form-select">
                        <option value="Pending" {{ $ticket->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="Paid" {{ $ticket->status == 'Paid' ? 'selected' : '' }}>Paid</option>
                        <option value="Cancelled" {{ $ticket->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    <a href="{{ route('data-tiket.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
