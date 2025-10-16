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
				          <li><a href="index.html">Utama</a></li>
				          <li><a href="about.html">Tentang</a></li>        						            				          					          		          
				          <li><a href="contact.html">Kontak</a></li>
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
							<h1 class="text-white">Tour Packages</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="packages.html"> Tour Packages</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start hot-deal Area -->
			<section class="hot-deal-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Today’s Hot Deals</h1>
		                        <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day to.</p>
		                    </div>
		                </div>
                        <div class="container py-5">
							<h2 class="mb-4">Pesan Tiket</h2>

							@if(session('error'))
								<div class="alert alert-danger">{{ session('error') }}</div>
							@endif

    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf

        {{-- Pilih Origin --}}
        <div class="mb-3">
            <label class="form-label">Asal (Origin)</label>
            <select id="origin" name="origin" class="form-select" required>
                <option value="">-- Pilih Asal --</option>
                @foreach($flights->unique('origin') as $flight)
                    <option value="{{ $flight->origin }}">{{ $flight->origin }}</option>
                @endforeach
            </select>
        </div>

        {{-- Pilih Destination --}}
        <div class="mb-3">
            <label class="form-label">Tujuan (Destination)</label>
            <select id="destination" name="destination" class="form-select" required>
                <option value="">-- Pilih Tujuan --</option>
                @foreach($flights->unique('destination') as $flight)
                    <option value="{{ $flight->destination }}">{{ $flight->destination }}</option>
                @endforeach
            </select>
        </div>

        {{-- Pilih Jam Keberangkatan --}}
        <div class="mb-3">
            <label class="form-label">Jam Keberangkatan</label>
            <select id="departure_time" name="departure_time" class="form-select" required>
                <option value="">-- Pilih Jam --</option>
                @foreach($flights->unique('departure_time') as $flight)
                    <option value="{{ $flight->departure_time }}">{{ $flight->departure_time }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <select name="seat_class" class="form-select" required>
                <option value="Economy">Economy</option>
                <option value="Business">Business</option>
                <option value="First">First</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah Penumpang</label>
            <input type="number" name="passengers" class="form-control" min="1" value="1" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Penumpang (satu nama per input)</label>
            <div id="passenger-names">
                <input type="text" name="passenger_names[]" class="form-control mb-2" placeholder="Nama Penumpang 1" required>
            </div>
            <button type="button" class="btn btn-secondary btn-sm" onclick="addPassenger()">Tambah Penumpang</button>
        </div>

        <button type="submit" class="btn btn-primary">Pesan Tiket</button>
    </form>
</div>

<script>
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
</script>

</body>
</html>
