<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="application-name" content="">
	<meta name="description" content="">
	<link rel="icon" href="img/favicon.png">
	<title>Canvas</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/vendor/bootstrap.min.css">

	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/vendor/normalize.css">

	<!-- Lity -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/vendor/lity.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/vendor/font-awesome/css/font-awesome.min.css">

	<!-- Font Poppins -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets') }}/style.css">
	
	<!-- Responsive Css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/responsive.css">


</head>
<body id="softeum">

    @include('layouts.header')
	@yield('content')
	@include('layouts.footer')
	
	<script src="{{ asset('assets') }}/js/vendor/tether.min.js"></script>
	<script src="{{ asset('assets') }}/js/vendor/popper.min.js"></script>
	<script src="{{ asset('assets') }}/js/vendor/bootstrap.min.js"></script>
	<script src="{{ asset('assets') }}/js/vendor/jquery.min.js"></script>
	<script src="{{ asset('assets') }}/js/vendor/font-awesome.js"></script>
    <script src="{{ asset('assets') }}/js/sticky.js"></script>
</body>
</html>