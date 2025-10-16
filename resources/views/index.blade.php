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
		<title>Langit Nusantara</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
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
				<div class="header-top" >
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
				          <li><a href="{{ route('bookings.create') }}">Pesan Tiket</a></li>		
                          <li><a href="{{ route('bookings.index') }}">Daftar Tiket</a></li>			          					          		          
				          <li><a href="{{ url('contact') }}">Kontak</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header><!-- #header -->
			
			<!-- start banner Area -->
            <section class="banner-area relative" style="background-image: url('img/pic1.jpg');">
                <div class="overlay overlay-bg"></div>				
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-6 col-md-6 banner-left">
                            <h6 class="text-white">Penerbangan domestik di Indonesia</h6>
                            <h1 class="text-white">LangitNusantara</h1>
                            <p class="text-white">
                                Temukan dan pesan tiket pesawat dengan mudah, cepat, dan dengan harga terbaik. Rencanakan perjalanan Anda sekarang tanpa repot!
                            </p>
                            <a href="{{ route('flights.create') }}" class="primary-btn text-uppercase">Get Started</a>
                        </div>	
                    </div>
                </div>
            </section>
        <!-- End banner Area -->


        <div class="container py-5 text-center">
            <h3 class="mb-4">Jelajahi Sabang sampai Merauke</h3>
			

              <!-- Tombol kategori -->
            <div class="d-flex justify-content-center gap-2 flex-wrap mb-4">
                <button class="btn btn-outline-primary" data-region="sumatera">Aceh & Sumatera Utara</button>
                <button class="btn btn-outline-secondary" data-region="jawa">Jawa</button>
                <button class="btn btn-outline-success" data-region="bali">Bali & Nusa Tenggara</button>
                <button class="btn btn-outline-danger" data-region="kalimantan">Kalimantan</button>
                <button class="btn btn-outline-danger" data-region="sulawesi">Sulawesi</button>
                <button class="btn btn-outline-danger" data-region="maluku">Maluku & Papua</button>
            </div>
            <div class="flight-scroll">
                <!-- Flight card Sumatera -->
                <div class="flight-card region-sumatera">
                    <div class="deal-badge">Penawaran khusus</div>
                    <h3>Sabang</h3><h6>ke</h6>
                    <h2>Banda Aceh</h2>
                    <p>Sekali jalan<br>04 Okt 25</p>
                    <div class="old-price">IDR 726.200</div>
                    <div class="new-price">IDR 600.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                    <div class="mt-2">
                        <span class="refund">100% refund</span>
                        <span class="refund">Bisa reschedule</span>
                    </div>
                </div>
                <div class="flight-card region-sumatera">
                    <div class="deal-badge">Penawaran khusus</div>
                    <h3>Banda Aceh</h3><h6>ke</h6>
                    <h2>Medan</h2>
                    <p>Sekali jalan<br>04 Okt 25</p>
                    <div class="old-price">IDR 1.249.00</div>
                    <div class="new-price">IDR 900.352</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                    <div class="mt-2">
                        <span class="refund">100% refund</span>
                        <span class="refund">Bisa reschedule</span>
                    </div>
                </div>
                <div class="flight-card region-sumatera">
                    <div class="deal-badge">Penawaran khusus</div>
                    <h3>Medan</h3><h6>ke</h6>
                    <h2>Padang</h2>
                    <p>Sekali jalan<br>04 Okt 25</p>
                    <div class="old-price">IDR 1.013.000</div>
                    <div class="new-price">IDR 1.352.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                    <div class="mt-2">
                        <span class="refund">100% refund</span>
                        <span class="refund">Bisa reschedule</span>
                    </div>
                </div>
                <div class="flight-card region-sumatera">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Padang</h3><h6>ke</h6>
                    <h2>Palembang</h2>
                    <p>Sekali jalan<br>04 Okt 25</p>
                    <div class="old-price">IDR 1.209.200</div>
                    <div class="new-price">IDR 850.352</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                    <div class="mt-2">
                        <span class="refund">100% refund</span>
                        <span class="refund">Bisa reschedule</span>
                    </div>
                </div>

                <!-- Flight card Jawa, awalnya disembunyikan -->
                <div class="flight-card region-jawa" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Jakarta</h3><h6>ke</h6>
                    <h2>Yogyakarta</h2>
                    <p>Sekali jalan<br>05 Okt 25</p>
                    <div class="old-price">IDR 850.090</div>
                    <div class="new-price">IDR 800.548</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                </div>
                <div class="flight-card region-jawa" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Jakarta</h3><h6>ke</h6>
                    <h2>Surabaya</h2>
                    <p>Sekali jalan<br>05 Okt 25</p>
                    <div class="old-price">IDR 1.139.000</div>
                    <div class="new-price">IDR 1.120.328</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                    <div class="mt-2">
                        <span class="refund">100% refund</span>
                        <span class="refund">Bisa reschedule</span>
                    </div>
                </div>
                <div class="flight-card region-jawa" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Jakarta</h3><h6>ke</h6>
                    <h2>Semarang</h2>
                    <p>Sekali jalan<br>05 Okt 25</p>
                    <div class="old-price">IDR 788.280</div>
                    <div class="new-price">IDR 700.328</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                    <div class="mt-2">
                        <span class="refund">100% refund</span>
                        <span class="refund">Bisa reschedule</span>
                    </div>
                </div>
                <div class="flight-card region-jawa" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Jakarta</h3><h6>ke</h6>
                    <h2>Bandung</h2>
                    <p>Sekali jalan<br>05 Okt 25</p>
                    <div class="old-price">IDR 550.000</div>
                    <div class="new-price">IDR 500.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                </div>
                <div class="flight-card region-jawa" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Jakarta</h3><h6>ke</h6>
                    <h2>Malang</h2>
                    <p>Sekali jalan<br>05 Okt 25</p>
                    <div class="old-price">IDR 900.000</div>
                    <div class="new-price">IDR 600.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                    <div class="mt-2">
                        <span class="refund">100% refund</span>
                        <span class="refund">Bisa reschedule</span>
                    </div>
                </div>

                <!-- Flight card Bali -->
                <div class="flight-card region-bali" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Jakarta</h3><h6>ke</h6>
                    <h2>Denpasar</h2>
                    <p>Sekali jalan<br>06 Okt 25</p>
                    <div class="old-price">IDR 1.500.000</div>
                    <div class="new-price">IDR 1.400.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                </div>
				<div class="flight-card region-bali" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Surabaya</h3><h6>ke</h6>
                    <h2>Denpasar</h2>
                    <p>Sekali jalan<br>06 Okt 25</p>
                    <div class="old-price">IDR 1.500.000</div>
                    <div class="new-price">IDR 900.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                </div>
				<div class="flight-card region-bali" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Denpasar</h3><h6>ke</h6>
                    <h2>Lombok</h2>
                    <p>Sekali jalan<br>06 Okt 25</p>
                    <div class="old-price">IDR 823.000</div>
                    <div class="new-price">IDR 700.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                </div>
				<div class="flight-card region-bali" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Denpasar</h3><h6>ke</h6>
                    <h2>Labuan Bajo</h2>
                    <p>Sekali jalan<br>06 Okt 25</p>
                    <div class="old-price">IDR 1.500.000</div>
                    <div class="new-price">IDR 1.200.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                </div>


                <!-- Flight card Kalimantan -->
                <div class="flight-card region-kalimantan" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Jakarta</h3><h6>ke</h6>
                    <h2>Pontianak</h2>
                    <p>Sekali jalan<br>07 Okt 25</p>
                    <div class="old-price">IDR 1.700.000</div>
                    <div class="new-price">IDR 1.550.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                </div>
				<div class="flight-card region-kalimantan" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Jakarta</h3><h6>ke</h6>
                    <h2>Balikpapan</h2>
                    <p>Sekali jalan<br>07 Okt 25</p>
                    <div class="old-price">IDR 1.870.000</div>
                    <div class="new-price">IDR 1.600.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                </div>
				<div class="flight-card region-kalimantan" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Jakarta</h3><h6>ke</h6>
                    <h2>Banjarmasin</h2>
                    <p>Sekali jalan<br>07 Okt 25</p>
                    <div class="old-price">IDR 1.5470.000</div>
                    <div class="new-price">IDR 1.400.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                </div>
				<div class="flight-card region-kalimantan" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Jakarta</h3><h6>ke</h6>
                    <h2>Palangkaraya</h2>
                    <p>Sekali jalan<br>07 Okt 25</p>
                    <div class="old-price">IDR 1.400.000</div>
                    <div class="new-price">IDR 1 350.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                </div>

            <!-- Flight card Sulawesi -->
                <div class="flight-card region-sulawesi" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Makasar</h3><h6>ke</h6>
                    <h2>Manado</h2>
                    <p>Sekali jalan<br>07 Okt 25</p>
                    <div class="old-price">IDR 1.300.000</div>
                    <div class="new-price">IDR 1.200.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                </div>
				<div class="flight-card region-sulawesi" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Makasar</h3><h6>ke</h6>
                    <h2>Kendari</h2>
                    <p>Sekali jalan<br>07 Okt 25</p>
                    <div class="old-price">IDR 1.200.000</div>
                    <div class="new-price">IDR 800.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                </div>
				<div class="flight-card region-sulawesi" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Makasar</h3><h6>ke</h6>
                    <h2>Palu</h2>
                    <p>Sekali jalan<br>07 Okt 25</p>
                    <div class="old-price">IDR 1.200.000</div>
                    <div class="new-price">IDR 900.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                </div>

            <!-- Flight card Maluku & Papua -->
                <div class="flight-card region-maluku" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Ambon</h3><h6>ke</h6>
                    <h2>Ternate</h2>
                    <p>Sekali jalan<br>07 Okt 25</p>
                    <div class="old-price">IDR 1.200.000</div>
                    <div class="new-price">IDR 1.000.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                </div>
				<div class="flight-card region-maluku" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Ambon</h3><h6>ke</h6>
                    <h2>Sorong</h2>
                    <p>Sekali jalan<br>07 Okt 25</p>
                    <div class="old-price">IDR 1.480.000</div>
                    <div class="new-price">IDR 1.400.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                </div>
				<div class="flight-card region-maluku" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Sorong</h3><h6>ke</h6>
                    <h2>Jayapura</h2>
                    <p>Sekali jalan<br>07 Okt 25</p>
                    <div class="old-price">IDR 1.850.000</div>
                    <div class="new-price">IDR 1.800.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                </div>
				<div class="flight-card region-maluku" style="display:none;">
                    <div class="deal-badge">Dom Deals</div>
                    <h3>Jaypura</h3><h6>ke</h6>
                    <h2>Merauke</h2>
                    <p>Sekali jalan<br>07 Okt 25</p>
                    <div class="old-price">IDR 2.500.000</div>
                    <div class="new-price">IDR 2.000.000</div>
                    <div class="maskapai">LangitNusantara · Ekonomi</div>
                </div>
            </div>
        </div>

        <script>
            // Ambil semua tombol kategori
            const buttons = document.querySelectorAll('button[data-region]');
            // Ambil semua flight card
            const flightCards = document.querySelectorAll('.flight-card');

            // Loop semua tombol dan pasang event click
            buttons.forEach(btn => {
                btn.addEventListener('click', () => {
                    const region = btn.getAttribute('data-region'); // ambil region dari tombol

                    // Loop semua flight card
                    flightCards.forEach(card => {
                        if(card.classList.contains('region-' + region)){
                            card.style.display = 'block';  // tampilkan card sesuai region
                        } else {
                            card.style.display = 'none';   // sembunyikan card lain
                        }
                    });
                });
            });
        </script>

        <!-- Start popular-destination Area -->
			<section class="popular-destination-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Destinasi Populer</h1>
		                        <p>Temukan destinasi favorit di seluruh Indonesia! Dari Sabang hingga Merauke, jelajahi kota-kota populer dengan penerbangan cepat dan nyaman. Pilih destinasi favoritmu dan rencanakan perjalanan domestik dengan mudah.</p>
		                    </div>
		                </div>
		            </div>						
					<div class="row">
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/bali.jpeg" alt="">
								</div>
								<div class="desc">	
									<!-- <a href="#" class="price-btn">$150</a>			 -->
									<h4>Danau Beratan</h4>
									<p>Bali</p>			
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/jogja.jpeg" alt="">
								</div>
								<div class="desc">	
									<!-- <a href="#" class="price-btn">$250</a>			 -->
									<h4>Tugu Jogja</h4>
									<p>Jogja</p>			
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/bandung.jpeg" alt="">
								</div>
								<div class="desc">	
									<!-- <a href="#" class="price-btn">$350</a>			 -->
									<h4>Braga Heritage</h4>
									<p>Bandung</p>			
								</div>
							</div>
						</div>												
					</div>
                    <br>
                    <div class="row">
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/gunungrinjani.jpeg" alt="">
								</div>
								<div class="desc">	
									<!-- <a href="#" class="price-btn">$150</a>			 -->
									<h4>Gunung Rinjani</h4>
									<p>Lombok</p>			
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/jembatanampera.jpeg" alt="">
								</div>
								<div class="desc">	
									<!-- <a href="#" class="price-btn">$250</a>			 -->
									<h4>Jembatan Ampera</h4>
									<p>Palembang</p>			
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/lawangsewu.jpeg" alt="">
								</div>
								<div class="desc">	
									<!-- <a href="#" class="price-btn">$350</a>			 -->
									<h4>Lawang Sewu</h4>
									<p>Semarang</p>			
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End popular-destination Area -->

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