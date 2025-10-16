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
				<div class="header-top">
					<div class="container">
			  		<div class="row align-items-center">
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-left">
			  				<ul>
			  					<li><a href="#">Visit Us</a></li>
			  					<li><a href="#">Buy Tickets</a></li>
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
				        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header><!-- #header -->
	  
			<!-- start banner Area -->
            <section class="relative about-banner">	
                <div class="overlay overlay-bg"></div>
                <div class="container">				
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Contact Us				
                            </h1>	
                            <p class="text-white link-nav">
                                Hubungi Langit Nusantara untuk informasi penerbangan domestik, pemesanan tiket, 
                                atau layanan pelanggan. Kami siap membantu perjalanan Anda menjadi lebih mudah dan nyaman.
                            </p>
                        </div>	
                    </div>
                </div>
            </section>
            <!-- End banner Area -->
				  

			<!-- Start contact-page Area -->
            <section class="contact-page-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
                        <div class="col-lg-4 d-flex flex-column address-wrap">
                            <div class="single-contact-address d-flex flex-row">
                                <div class="icon">
                                    <span class="lnr lnr-home"></span>
                                </div>
                                <div class="contact-details">
                                    <h5>Jakarta, Indonesia</h5>
                                    <p>
                                        Kantor Pusat Langit Nusantara<br>
                                        Jl. Merdeka Raya No. 45, Jakarta Pusat
                                    </p>
                                </div>
                            </div>
                            <div class="single-contact-address d-flex flex-row">
                                <div class="icon">
                                    <span class="lnr lnr-phone-handset"></span>
                                </div>
                                <div class="contact-details">
                                    <h5>+62 21 1234 5678</h5>
                                    <p>Layanan Pelanggan 24 Jam</p>
                                </div>
                            </div>
                            <div class="single-contact-address d-flex flex-row">
                                <div class="icon">
                                    <span class="lnr lnr-envelope"></span>
                                </div>
                                <div class="contact-details">
                                    <h5>support@langitnusantara.com</h5>
                                    <p>Kami siap membantu perjalanan Anda</p>
                                </div>
                            </div>														
                        </div>
                        <div class="col-lg-8">
                            <h3 style="margin-bottom:20px;">Hubungi Kami</h3>
                            <p style="margin-bottom:20px;">
                                Jika Anda memiliki pertanyaan mengenai pemesanan tiket, jadwal penerbangan, atau layanan Langit Nusantara, 
                                silakan isi formulir berikut. Tim kami akan segera merespons dan memberikan solusi terbaik untuk perjalanan Anda.
                            </p>
                            <form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
                                <div class="row">	
                                    <div class="col-lg-6 form-group">
                                        <input name="name" placeholder="Nama Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Anda'" class="common-input mb-20 form-control" required="" type="text">
                                    
                                        <input name="email" placeholder="Alamat Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Email'" class="common-input mb-20 form-control" required="" type="email">

                                        <input name="subject" placeholder="Subjek Pesan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subjek Pesan'" class="common-input mb-20 form-control" required="" type="text">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <textarea class="common-textarea form-control" name="message" placeholder="Tulis pesan Anda di sini" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tulis pesan Anda di sini'" required=""></textarea>				
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="alert-msg" style="text-align: left;"></div>
                                        <button class="genric-btn primary" style="float: right;">Kirim Pesan</button>											
                                    </div>
                                </div>
                            </form>	
                        </div>
                    </div>
                </div>	
            </section>
            <!-- End contact-page Area -->

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