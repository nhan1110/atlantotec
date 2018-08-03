<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>{{@$PageTitle}}</title>
	@section("css-page")
		<link href="{{ asset('html/css/bootstrap.css') }}" rel="stylesheet">
		<!-- Fonts -->
		<link href="{{ asset('html/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('html/css/grid.css') }}" rel="stylesheet">
		<link href="{{ asset('html/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('html/css/custom-checkbox.css') }}" rel="stylesheet">
		<link href="{{ asset('html/js/datetimepicker/jquery.datetimepicker.css') }}" rel="stylesheet">
		<link href="{{ asset('html/css/dashboard.css') }}" rel="stylesheet">
	@show
	@stack('css-add')
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('html/js/jquery.min.js') }}"></script>
</head>
<body class="{{@$bodyClass}}">
	<div class="header-page">
		@section("header-content")
			<div class="container-fluid">
				<div class="row">
					@section("header-logo")
						<div class="col-md-4 col-md-push-8">
							<div class="logo right"><img src="{{ asset('html/images/logo.png') }}"></div>
						</div>
					@show
					@section("header-menu")
						<div class="col-md-8 col-md-pull-4">
							<?php 
								$_SEFF->_TREEMENUS($_SEFF->_GET_MENU());
							?>
						</div>
					@show
				</div>
			</div>
		@show
	</div>