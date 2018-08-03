<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Atlantotec</title>


	<link href="{{ asset('html/css/bootstrap.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href="{{ asset('html/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('html/css/custom-checkbox.css') }}" rel="stylesheet">
	<link href="{{ asset('html/js/datetimepicker/jquery.datetimepicker.css') }}" rel="stylesheet">
	<link href="{{ asset('html/css/grid.css') }}" rel="stylesheet">
	<link href="{{ asset('html/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('html/js/bxslider/jquery.bxslider.min.css') }}" rel="stylesheet">

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @section("header") 
				
	@show
</head>

<body class="home">
	<!--<div class="page-loading"></div>-->
	<div class="site">
		<header class="site-header" role="banner">
			<div class="container">
				<div class="header-top">
					<div class="row">
						<div class="col-md-8">
							<div class="phone">
								<ul class="list-inline">
									<li class="item-address"><i class="fa fa-map-marker"></i> <a href="https://maps.google.com/?q=Giuseppe Motta 22, CH-6830 Chiasso (TI)" target="_blank">Giuseppe Motta 22, CH-6830 Chiasso (TI)</a></li>
									<li class="item-phone"><i class="fa fa-phone"></i> <a href="tel:0041 91 608 30 30">0041 91 608 30 30</a></li>
									<li class="item-mobile"><i class="fa fa-mobile"></i> <a href="tel:334 73 42 196">334 73 42 196</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="multilang">
								<ul class="list-inline" class="flags">
									<li>
										<a href="?lang=en"><img src="{{ asset('html/images/flags/24/en.png') }}" alt="English" border="0"></a>
									</li>
									<li>
										<a href="?lang=fr"><img src="{{ asset('html/images/flags/24/fr.png') }}" alt="Français" border="0"></a>
									</li>
									<li>
										<a href="?lang=de"><img src="{{ asset('html/images/flags/24/de.png') }}" alt="Deutsch" border="0"></a>
									</li>
									<li>
										<a href="?lang=it"><img src="{{ asset('html/images/flags/24/it.png') }}" alt="Italiano" border="0"></a>
									</li>
									<li>
										<a href="?lang=es"><img src="{{ asset('html/images/flags/24/es.png') }}" alt="Español" border="0"></a>
									</li>
									<?php if(!session('user_info')): ?>
										<li>
											<a href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Register</a>
										</li>
									<?php else: ?>
										<li>
											<a href="{{ route('dayview') }}">Profile</a> | <a href="{{ route('logout') }}">Logout</a>
										</li>
									<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<a href="{{route('home')}}">
					<img src="{{ asset('html/images/atlantotec_banner.jpg') }}" alt="Atlanto tec">
				</a>
			</div>
		</header>

		<!-- #masthead -->

		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<div class="portal">
						<div class="container">
							@section("main-content") 
				
							@show
						</div>
					</div>
				</main>
			</div>
		</div>
		<!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container text-center">
				<hr>
				<p>ATLANTOtec-Center Chiasso</p>
				<p>Giuseppe Motta 22 CH-6830 Chiasso (TI)</p>
				<ul class="list-inline">
					<li class="item-phone"><i class="fa fa-phone"></i> <a href="tel:0041 91 608 30 30">0041 91 608 30 30</a></li>
					<li class="item-mobile"><i class="fa fa-mobile"></i> <a href="tel:334 73 42 196">334 73 42 196</a></li>
				</ul>
				<p>SSL-Encrypted communication. Powered by Doctena <a href="">Website</a> | <a href="">Privacy</a></p>
			</div>
		</footer>
		<!-- #colophon -->
	</div>
	<!-- #page -->
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="{{ asset('html/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('html/js/datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>
	<script src="{{ asset('html/js/bxslider/jquery.bxslider.min.js') }}"></script>
	<script src="{{ asset('html/js/main.js') }}"></script>
	@section("footer") 
				
	@show
</body>