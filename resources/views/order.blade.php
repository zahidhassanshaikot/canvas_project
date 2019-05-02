<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="application-name" content="">
  <meta name="description" content="">
  <link rel="icon" href="{{ asset('assets') }}/img/favicon.png">
  <title>Canvas single post</title>

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
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <div class="order-form">
            
            @if(Session::get('message'))
                <div class="alert alert-success" id="message">
                    <h3 class=" text-center text-success"> {{ Session::get('message') }}</h3>
                </div>
            @endif

          <form action="{{ route('send-order-req') }}" method="POST">
              {{ csrf_field() }}
            <p>Name</p>
            <input type="text" name="name">
            <input type="hidden" name="demo_id" value="{{ $demo_id }}">
            <input type="hidden" name="demo_id" value="{{ $demo_id }}">
            <p>Address</p>
            <input type="text" name="address">
            <p>Email</p>
            <input type="text" name="email">
            <p>Phone</p>
            <input type="text" name="phone_no">
            <p>Quentity</p>
            <input type="text" name="quentity">
            <input type="submit" name="btn" class="submit-btn" value="Submit">
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer id="footer">
    <div class="copyright-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <p class="copyright-text">Copyright © 2019</p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="copyright-nav">
              <ul>
                <li><a href="#" target="_blank">Facebook</a></li>
                <li><a href="#" target="_blank">Twitter</a></li>
                <li><a href="#" target="_blank">Instagram</a></li>
                <li><a href="#" target="_blank">LinkedIn</a></li>
                <li><a href="#" target="_blank">Youtube</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <script src="{{ asset('assets') }}/js/vendor/tether.min.js"></script>
  <script src="{{ asset('assets') }}/js/vendor/popper.min.js"></script>
  <script src="{{ asset('assets') }}/js/vendor/bootstrap.min.js"></script>
  <script src="{{ asset('assets') }}/js/vendor/jquery.min.js"></script>
  <script src="{{ asset('assets') }}/js/vendor/font-awesome.js"></script>
    <script src="{{ asset('assets') }}/js/sticky.js"></script>
</body>
</html>