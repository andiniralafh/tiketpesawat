<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/fav.png') }}">
    <meta name="author" content="colorlib">
    <meta charset="UTF-8">
    <title>Tambah Penerbangan</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
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
                    <ul class="mb-0">
                        <li><a href="#">Langit Nusantara</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6 col-6 header-top-right text-end">
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
        <div class="d-flex align-items-center justify-content-between py-3">
            <!-- Logo di kiri -->
            <div id="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/flight.png') }}" alt="logo" title="logo" style="height:45px;">
                </a>
            </div>

            <!-- Navbar di kanan -->
            <nav id="nav-menu-container" class="ms-auto">
                <ul class="nav-menu d-flex gap-4 mb-0 align-items-center" style="list-style:none;">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li><a href="{{ url('/about') }}">Tentang</a></li>
                    <li><a href="{{ url('/contact') }}">Kontak</a></li>
                    <li><a href="{{ route('data-tiket.index') }}">Data Tiket</a></li>
                    <li>
                        <a href="{{ route('flights.index') }}" 
                           class="btn btn-sm btn-outline-primary px-3 py-1"
                           style="border-radius:20px;">
                           ✈️ Daftar Penerbangan
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<!-- start banner Area -->
<section class="about-banner relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">Tambah Penerbangan</h1>	
                <p class="text-white link-nav">
                    <a href="{{ url('/') }}">Home</a>  
                    <span class="lnr lnr-arrow-right"></span>  
                    <a href="{{ route('flights.create') }}">Tambah Flight</a>
                </p>
            </div>	
        </div>
    </div>
</section>
<!-- End banner Area -->

<div class="container mt-5 mb-5">
    <div class="card shadow-lg p-4">
        <h3 class="mb-4 text-center">Form Tambah Penerbangan Baru</h3>

        <form action="{{ route('flights.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Flight Code</label>
                <input type="text" name="flight_code" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Airline</label>
                <input type="text" name="airline" class="form-control" value="Langit Nusantara" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Origin</label>
                <input type="text" name="origin" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Destination</label>
                <input type="text" name="destination" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Departure Time</label>
                <input type="datetime-local" name="departure_time" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Arrival Time</label>
                <input type="datetime-local" name="arrival_time" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Flight Duration</label>
                <input type="text" name="flight_duration" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Economy</label>
                <input type="number" name="economy_price" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Business</label>
                <input type="number" name="business_price" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Harga First</label>
                <input type="number" name="first_price" class="form-control">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary px-4">Simpan Penerbangan</button>
                <a href="{{ route('flights.index') }}" class="btn btn-secondary px-4">Kembali</a>
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<!-- start footer Area -->				
        <footer class="footer-area section-gap" style="background:#111; color:#fff; padding:30px 0; font-size:14px;">
            <div class="container">
                <div class="row">
                    <!-- Tentang Website -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 style="color:#fff; font-size:16px; margin-bottom:10px;">TiketPesawat</h6>
                            <p style="color:#fff; margin-bottom:5px;">
                                Pesan tiket pesawat domestik dengan mudah dan cepat.  
                                Kami menyediakan penerbangan ke berbagai destinasi di Indonesia, dari Sabang sampai Merauke.
                            </p>
                        </div>
                    </div>

                    <!-- Navigasi -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 style="color:#fff; font-size:16px; margin-bottom:10px;">Navigasi</h6>
                            <ul style="list-style:none; padding-left:0; margin-bottom:5px;">
                                <li><a href="/" style="color:#fff; font-size:14px;">Beranda</a></li>
                                <li><a href="/flights" style="color:#fff; font-size:14px;">Cari Penerbangan</a></li>
                                <li><a href="/bookings" style="color:#fff; font-size:14px;">Pesanan Saya</a></li>
                                <li><a href="/contact" style="color:#fff; font-size:14px;">Kontak</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Kontak -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 style="color:#fff; font-size:16px; margin-bottom:10px;">Hubungi Kami</h6>
                            <p style="color:#fff; margin-bottom:5px;">Email: support@tiketpesawat.com</p>
                            <p style="color:#fff; margin-bottom:5px;">Telepon: +62 812 3456 7890</p>
                            <div class="footer-social" style="margin-top:5px;">
                                <a href="#"><i class="fa fa-facebook" style="color:#fff; font-size:16px; margin-right:10px;"></i></a>
                                <a href="#"><i class="fa fa-twitter" style="color:#fff; font-size:16px; margin-right:10px;"></i></a>
                                <a href="#"><i class="fa fa-instagram" style="color:#fff; font-size:16px; margin-right:10px;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="row footer-bottom d-flex justify-content-center mt-3">
                    <p class="col-lg-12 footer-text m-0 text-center" style="color:#fff; font-size:14px;">
                        &copy; <script>document.write(new Date().getFullYear());</script> TiketPesawat | Semua Hak Dilindungi
                    </p>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->	



			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="js/jquery-ui.js"></script>					
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>					
			<script src="js/owl.carousel.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>

