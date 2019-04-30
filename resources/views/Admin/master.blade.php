<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Order Info</title>


  <!-- Import Template Icons CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets') }}/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/assets/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/assets/css/linea-basic.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/assets/css/pe-icon-7-stroke.css">

  <!-- Import Custom Country Select CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets') }}/assets/css/countrySelect.min.css">

  <!-- Import Perfect ScrollBar CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets') }}/assets/css/perfect-scrollbar.css">

  <!-- Import Bootstrap CSS File -->

  <link rel="stylesheet" href="{{ asset('assets') }}/assets/css/bootstrap.min.css">

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">

  <!-- Import Templates CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets') }}/assets/css/style.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/assets/css/responsive.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/assets/css/index-01.css">

    <div class="content-wrapper container-fluid">

@include('Admin.menu')
@yield('content')
  </div>


  <script src="{{ asset('assets') }}/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="{{ asset('assets') }}/assets/js/plugins.js"></script>
  <script src="{{ asset('assets') }}/assets/js/tables/jquery.dataTables.min.js"></script>
  <script src="{{ asset('assets') }}/assets/js/tables/dataTables.bootstrap4.min.js"></script>

  <script src="{{ asset('assets') }}/assets/js/main.js"></script>

  <script>
    $(document).ready(function() {
      "use strict";

      $('.data-table').DataTable();
    });
  </script>


</body>

<!-- Mirrored from demos.jeweltheme.com/hi5dash/demo/tables/data.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 19:01:56 GMT -->
</html>
