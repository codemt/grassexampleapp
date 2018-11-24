<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('theme/img/core-img/favicon.ico') }}">

  <!-- Core Stylesheet -->
  <link href="{{ asset('theme/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

  <!-- Responsive CSS -->
  <link href="{{ asset('theme/css/plugins/responsive.css') }}" rel="stylesheet">


	<title>IGR Process</title>
</head>
<body>
	  <!-- Preloader Start -->
	  <div id="riyadh-loader">
			<div class='riyadh-loader'></div>
		</div>
		<!-- Preloader End -->
	
		<!-- ***** Header Area Start ***** -->
		<header class="header-area" style="margin-bottom:0%;padding-bottom:0%;">
			<div class="classy-nav-container home-1 breakpoint-off">
				<div class="container">
					<!-- Classy Menu -->
					<nav class="classy-navbar justify-content-between" id="classyNav">
	
						<!-- Logo -->
						<a class="nav-brand" href="index.html">Notice of Intimation</a>
	
						<!-- Navbar Toggler -->
						<div class="classy-navbar-toggler">
							<span class="navbarToggler"><span></span><span></span><span></span></span>
						</div>
	
						<!-- Menu -->
						<div class="classy-menu">
	
							<!-- close btn -->
							<div class="classycloseIcon">
								<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
							</div>
	
							<!-- Nav Start -->
							<div class="classynav">
								<ul id="nav">
									<li><a href="#home">Home</a></li>
									<li><a href="#faq">FAQ</a></li>
									<li><a href="#documents">Documents</a></li>
									<li><a href="#process">Process</a></li>
									{{-- <li><a href="#offices">Registration Offices</a></li> --}}
									<li><a href="#contact">Contact</a></li>
									
								</ul>
								<!-- Button -->
								{{-- <a href="#" class="classy-btn">Sign Up</a> --}}
							</div>
							<!-- Nav End -->
						</div>
					</nav>
				</div>
			</div>
		</header>
		<!-- ***** Header Area End ***** -->

		@yield('content')

		  <!-- ***** All JS ***** -->
    <!-- jQuery-2.2.4 JS -->
    <script src="{{ asset('theme/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('theme/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap-4 JS -->
    <script src="{{ asset('theme/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins JS -->
    <script src="{{ asset('theme/js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('theme/js/plugins/zoom-popup.js') }}"></script>
    <script src="{{ asset('theme/js/classy-nav.js') }}"></script>
    <script src="{{ asset('theme.js/other-2.js') }}"></script>
    <!-- Active JS -->
    <script src="{{ asset('theme/js/active.js') }}"></script>
	

	
</body>
</html>