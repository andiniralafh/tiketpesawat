	<!DOCTYPE html>
	<html lang="zxx" class="no-js">

	<head>
	    <!-- Mobile Specific Meta -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!-- Favicon-->
	    <link rel="shortcut icon" href="img/fav.png">
	    <!-- Author Meta -->
	    <meta name="author" content="colorlib">
	    <!-- Meta Description -->
	    <meta name="description" content="">
	    <!-- Meta Keyword -->
	    <meta name="keywords" content="">
	    <!-- meta character set -->
	    <meta charset="UTF-8">
	    <!-- Site Title -->
	    <title>Travel</title>

	    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        
	    <!-- CSS ============================================= -->
	    <link rel="stylesheet" href="css/linearicons.css">
	    <link rel="stylesheet" href="css/font-awesome.min.css">
	    <link rel="stylesheet" href="css/bootstrap.css">
	    <link rel="stylesheet" href="css/magnific-popup.css">
	    <link rel="stylesheet" href="css/jquery-ui.css">
	    <link rel="stylesheet" href="css/nice-select.css">
	    <link rel="stylesheet" href="css/animate.min.css">
	    <link rel="stylesheet" href="css/owl.carousel.css">
	    <link rel="stylesheet" href="css/main.css">
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
	                    <a href="index.html"><img src="img/flight.png" alt="" title="" /></a>
	                </div>
	                <nav id="nav-menu-container">
	                    <ul class="nav-menu">
	                        <li><a href="{{ url('/') }}">Utama</a></li>
	                        <li><a href="{{ url('about') }}">Tentang</a></li>
	                        <li><a href="{{ url('contact') }}">Kontak</a></li>
							<li><a href="{{ route('bookings.create') }}">Pesan Tiket</a></li>		
	                    </ul>
	                </nav><!-- #nav-menu-container -->
	            </div>
	        </div>
	    </header><!-- #header -->


	    <!-- start banner Area -->
	    <section class="about-banner relative">
	        <div class="overlay overlay-bg"></div>
	        <div class="container">
	            <div class="row d-flex align-items-center justify-content-center">
	                <div class="about-content col-lg-12">
	                    <h1 class="text-white">Daftar Tiket</h1>
	                    <p class="text-white link-nav">
	                        Menyatukan Indonesia dari udara ✈️
	                        Aman • Nyaman • Tepat Waktu
	                    </p>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- End banner Area -->

	    <div class="container py-5">
	        <p class="mb-4 fw-bold text-center">Silahkan cari daftar tiket pesawat anda masukkan nama lengkap dan sesuaikan tujuan</p>
	        {{-- Notifikasi sukses --}} <!-- Menampilkan notifikasi jika ada session bernama 'success' -->
	        @if(session('success'))
	        <div class="alert alert-success">{{ session('success') }}</div>
	        @endif

	        {{-- Form pencarian --}}
	        <!-- Form untuk mencari tiket berdasarkan nama penumpang -->
	        <form action="{{ route('bookings.index') }}" method="GET" class="mb-4 d-flex" role="search">
	            <!-- action diarahkan ke route bookings.index (controller index) -->
	            <input type="text" name="nama_lengkap" class="form-control me-2"
	                placeholder="Cari nama penumpang..."
	                value="{{ $nama ?? '' }}">
	            <!-- Input teks pencarian, menampilkan nilai lama jika ada -->
	            <button class="btn btn-outline-primary" type="submit">Cari</button>
	            <!-- Tombol untuk submit form pencarian -->
	        </form>

	        <!-- Tombol untuk menuju halaman pemesanan tiket baru -->
	        <a href="{{ url('pesantiket') }}" class="btn btn-primary mb-3">Pesan Tiket Baru</a>

	        <!-- Tabel untuk menampilkan daftar tiket -->
	        <table class="table table-bordered table-striped align-middle text-center">
	            <!-- table-bordered: beri garis, table-striped: baris bergaris selang-seling -->
	            <thead class="table-dark">
	                <!-- Bagian kepala tabel dengan background hitam -->
	                <tr>
	                    <th>Kode Penerbangan</th>
	                    <th>Rute</th>
	                    <th>Waktu Keberangkatan</th>
	                    <th>Durasi</th>
	                    <th>Kelas</th>
	                    <th>Jumlah Penumpang</th>
	                    <th>Nama Penumpang</th>
	                    <th>Total Harga</th>
	                    <th>Status</th>
	                    <th>Aksi</th>
	                </tr>
	            </thead>

	            <tbody>
	                <!-- Bagian isi tabel -->
	                @forelse($bookings as $booking)
	                <!-- Looping data booking dari database -->
	                <tr>
	                    <td>{{ $booking->flight->flight_code ?? '-' }}</td>
	                    <!-- Menampilkan kode penerbangan, jika tidak ada maka tanda '-' -->

	                    <td>{{ $booking->flight->origin ?? '-' }} → {{ $booking->flight->destination ?? '-' }}</td>
	                    <!-- Menampilkan rute asal ke tujuan -->

	                    <td>{{ $booking->flight->departure_time ?? '-' }}</td>
	                    <!-- Menampilkan waktu keberangkatan -->

	                    <td>{{ $booking->flight->flight_duration ?? '-' }}</td>
	                    <!-- Menampilkan durasi penerbangan -->

	                    <td>{{ $booking->seat_class }}</td>
	                    <!-- Menampilkan kelas kursi (ekonomi/bisnis) -->

	                    <td>{{ $booking->passengers }}</td>
	                    <!-- Menampilkan jumlah penumpang -->

	                    <td>
	                        @php
	                        $names = is_array($booking->passenger_names)
	                        ? implode(', ', $booking->passenger_names)
	                        : $booking->passenger_names;
	                        @endphp
	                        {{ $names ?? '-' }}
	                    </td>
	                    <!-- Menampilkan nama-nama penumpang (jika array, digabung dengan koma) -->

	                    <td>Rp {{ number_format($booking->total_price, 0, ',', '.') }}</td>
	                    <!-- Menampilkan total harga dengan format rupiah -->

	                    {{-- STATUS --}}
						<td>
							@php
							$status = strtolower($booking->status ?? 'pending');
							@endphp
							<!-- Ubah status jadi lowercase dan kasih badge warna -->
							@if($status === 'paid')
								<span class="status-badge status-paid">Sudah Dibayar</span>
							@elseif($status === 'cancelled')
								<span class="status-badge status-cancelled">Dibatalkan</span>
							@else
								<span class="status-badge status-pending">Menunggu Pembayaran</span>
							@endif
						</td>
						<!-- Menampilkan badge warna/status tiket -->
	                    {{-- AKSI --}}
	                    <td>
	                        <div class="aksi-btn">
	                            <!-- Tombol aksi untuk cetak tiket dan batal -->
	                            <a href="{{ route('bookings.print', $booking->id) }}"
	                                class="btn btn-success btn-sm" target="_blank">
	                                Cetak
	                            </a>
	                            <!-- Tombol cetak (buka di tab baru) -->

	                            <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST"
	                                onsubmit="return confirm('Yakin ingin membatalkan tiket ini?')">
	                                @csrf
	                                @method('DELETE')
	                                <button class="btn btn-danger btn-sm">Batal</button>
	                            </form>
	                            <!-- Form untuk membatalkan tiket (method DELETE dengan konfirmasi popup) -->
	                        </div>
	                    </td>
	                </tr>
	                @empty
	                <!-- Jika tidak ada data tiket -->
	                <tr>
	                    <td colspan="10" class="text-center text-muted">Belum ada tiket dipesan</td>
	                </tr>
	                @endforelse
	            </tbody>
	        </table>
	    </div>
	</body>

	</html>