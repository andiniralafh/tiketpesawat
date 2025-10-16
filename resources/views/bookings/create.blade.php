<!DOCTYPE html>
<html lang="id" class="no-js">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/fav.png') }}">
    <meta charset="UTF-8">
    <title>Travel</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
<header id="header">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6 col-6 header-top-left">
                    <ul>
                        <li><a href="#">Langit Nusantara</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6 col-6 header-top-right">
                    <div class="header-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="{{ url('/') }}"><img src="{{ asset('img/flight.png') }}" alt="logo" title="logo" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li><a href="{{ url('/about') }}">Tentang</a></li>
                    <li><a href="{{ url('/contact') }}">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<section class="about-banner relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">Pesan Tiket</h1>
                <p class="text-white link-nav">
                    <a href="{{ url('/') }}">Home</a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a href="#">Pesan Tiket</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="hot-deal-area section-gap">
    <div class="container">
        <div class="text-center mb-5">
            <h1>Form Pemesanan Tiket</h1>
            <p>Isi data dengan lengkap sesuai identitas penumpang.</p>
        </div>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf

            <!-- Sapaan -->
            <div class="mb-3">
                <label class="form-label">Sapaan</label><br>
                @foreach(['Tuan', 'Nyonya', 'Nona'] as $sapaan)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="title" value="{{ $sapaan }}" required>
                        <label class="form-check-label">{{ $sapaan }}</label>
                    </div>
                @endforeach
            </div>

            <!-- Nama Lengkap -->
            <div class="mb-3">
                <label class="form-label">Nama Penumpang</label>
                <input type="text" name="full_name" class="form-control" required>
            </div>

            <!-- Nomor Telepon -->
            <div class="mb-3">
                <label class="form-label">Nomor Telepon</label>
                <input type="tel" name="phone" class="form-control" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <!-- Asal -->
            <div class="mb-3">
                <label class="form-label">Asal (Origin)</label>
                <select id="origin" name="origin" class="form-select" required>
                    <option value="">Pilih Asal</option>
                    @foreach($flights->unique('origin') as $flight)
                        <option value="{{ $flight->origin }}">{{ $flight->origin }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Tujuan -->
            <div class="mb-3">
                <label class="form-label">Tujuan (Destination)</label>
                <select id="destination" name="destination" class="form-select" required>
                    <option value="">Pilih Tujuan</option>
                    @foreach($flights->unique('destination') as $flight)
                        <option value="{{ $flight->destination }}">{{ $flight->destination }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Jam Keberangkatan -->
            <div class="mb-3">
                <label class="form-label">Jam Keberangkatan</label>
                <select id="departure_time" name="departure_time" class="form-select" required>
                    <option value="">Pilih Jam</option>
                </select>
            </div>

            <!-- Kelas -->
            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <select name="seat_class" id="seat_class" class="form-select" required>
                    <option value="">Pilih Kelas</option>
                </select>
            </div>

            <!-- Jumlah Penumpang -->
            <div class="mb-3">
                <label class="form-label">Jumlah Penumpang</label>
                <input type="number" id="passengers" name="passengers" class="form-control" min="1" value="1" required>
            </div>

            <!-- Total Harga -->
            <div class="mb-3">
                <label class="form-label">Total Harga</label>
                <input type="text" id="total_price_display" class="form-control" readonly>
                <input type="hidden" id="total_price" name="total_price">
            </div>

            <!-- Nama Penumpang -->
            <div class="mb-3">
                <label class="form-label">Nama Lengkap Penumpang</label>
                <div id="passenger-names">
                    <input type="text" name="passenger_names[]" class="form-control mb-2" placeholder="Nama Penumpang 1" required>
                </div>
                <button type="button" class="btn btn-secondary btn-sm" onclick="addPassenger()">Tambah Penumpang</button>
            </div>

            <!-- Metode Pembayaran -->
            <div class="mb-3">
                <label class="form-label">Metode Pembayaran</label>
                <select name="payment_method" id="payment_method" class="form-select" required onchange="updatePaymentInfo()">
                    <option value="">Pilih Metode Pembayaran</option>
                    <option value="Transfer Bank">Transfer Bank</option>
                    <option value="E-Wallet">E-Wallet</option>
                    <option value="Credit Card">Credit Card</option>
                </select>
            </div>

            <!-- Detail Pembayaran -->
            <div id="payment-info" class="alert alert-info d-none">
                <h5>Instruksi Pembayaran:</h5>
                <div id="payment-details"></div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Pesan Tiket</button>
        </form>
    </div>
</section>

<div id="flights-data" data-flights='@json($flights)'></div>

<script>
    const flightsData = JSON.parse(document.getElementById("flights-data").dataset.flights);

    function addPassenger() {
        const container = document.getElementById('passenger-names');
        const index = container.children.length + 1;
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'passenger_names[]';
        input.className = 'form-control mb-2';
        input.placeholder = 'Nama Penumpang ' + index;
        input.required = true;
        container.appendChild(input);
    }

    function updateDepartureTimes() {
        const origin = document.getElementById("origin").value;
        const destination = document.getElementById("destination").value;
        const departureSelect = document.getElementById("departure_time");
        departureSelect.innerHTML = '<option value="">-- Pilih Jam --</option>';

        flightsData.filter(f => f.origin === origin && f.destination === destination)
            .forEach(f => departureSelect.innerHTML += `<option value="${f.departure_time}" data-id="${f.id}">${f.departure_time}</option>`);

        updateClasses();
    }

    function updateClasses() {
        const origin = document.getElementById("origin").value;
        const destination = document.getElementById("destination").value;
        const departure_time = document.getElementById("departure_time").value;
        const seatSelect = document.getElementById("seat_class");
        seatSelect.innerHTML = '<option value="">-- Pilih Kelas --</option>';

        const matchedFlight = flightsData.find(f =>
            f.origin === origin &&
            f.destination === destination &&
            f.departure_time === departure_time
        );

        if (matchedFlight) {
            if (matchedFlight.economy_price)
                seatSelect.innerHTML += `<option value="Economy" data-price="${matchedFlight.economy_price}">Economy - Rp ${Number(matchedFlight.economy_price).toLocaleString()}</option>`;
            if (matchedFlight.business_price)
                seatSelect.innerHTML += `<option value="Business" data-price="${matchedFlight.business_price}">Business - Rp ${Number(matchedFlight.business_price).toLocaleString()}</option>`;
            if (matchedFlight.first_price)
                seatSelect.innerHTML += `<option value="First" data-price="${matchedFlight.first_price}">First - Rp ${Number(matchedFlight.first_price).toLocaleString()}</option>`;
        }

        calculatePrice();
    }

    function calculatePrice() {
        const seatSelect = document.getElementById("seat_class");
        const passengers = parseInt(document.getElementById("passengers").value) || 0;
        const totalInput = document.getElementById("total_price");
        const totalDisplay = document.getElementById("total_price_display");

        if (seatSelect.value !== "") {
            const pricePerSeat = parseInt(seatSelect.options[seatSelect.selectedIndex].getAttribute("data-price")) || 0;
            const total = pricePerSeat * passengers;
            totalInput.value = total;
            totalDisplay.value = "Rp " + total.toLocaleString("id-ID");
        } else {
            totalInput.value = "";
            totalDisplay.value = "";
        }
    }

    function updatePaymentInfo() {
    const method = document.getElementById("payment_method").value;
    const infoBox = document.getElementById("payment-info");
    const details = document.getElementById("payment-details");

    if (!method) {
        infoBox.classList.add("d-none");
        details.innerHTML = "";
        return;
    }

    infoBox.classList.remove("d-none");

    if (method === "Transfer Bank") {
        details.innerHTML = `
            <p>Silakan transfer ke rekening berikut:</p>
            <ul>
                <li><strong>BCA:</strong> 123-456-7890 a.n. Langit Nusantara</li>
                <li><strong>BRI:</strong> 0987-654-321 a.n. Langit Nusantara</li>
            </ul>
            <p>Kirim bukti transfer ke <strong>pembayaran@langitnusantara.com</strong></p>
        `;
    } else if (method === "E-Wallet") {
        details.innerHTML = `
            <p>Pilih e-wallet di bawah ini:</p>
            <ul>
                <li><strong>OVO:</strong> 0812-3456-7890</li>
                <li><strong>GoPay:</strong> 0813-9876-5432</li>
                <li><strong>DANA:</strong> 0814-5678-9012</li>
            </ul>
        `;
    } else if (method === "Credit Card") {
        details.innerHTML = `
            <p>Masukkan data kartu kredit Anda saat proses konfirmasi pembayaran.</p>
            <ul>
                <li><strong>Kartu yang diterima:</strong> Visa, MasterCard</li>
                <li><strong>Catatan:</strong> Pastikan limit kartu mencukupi untuk total harga tiket.</li>
            </ul>
        `;
    }
}

    document.getElementById("origin").addEventListener("change", updateDepartureTimes);
    document.getElementById("destination").addEventListener("change", updateDepartureTimes);
    document.getElementById("departure_time").addEventListener("change", updateClasses);
    document.getElementById("seat_class").addEventListener("change", calculatePrice);
    document.getElementById("passengers").addEventListener("input", calculatePrice);
</script>

</body>
</html>
