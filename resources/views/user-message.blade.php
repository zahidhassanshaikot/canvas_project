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
  {{--  <link rel="stylesheet" href="{{ asset('assets') }}/.css">  --}}

    <div class="content-wrapper container-fluid">
      <aside class="left-panel">
        <nav class="navbar">
          <ul class="navbar-nav">

            <li class="nav-item dropdown active">
              <a class="nav-link" href="{{ route('/') }}">
                 <i class="fa fa-tachometer"></i><span class="menu-title">Home</span>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="{{ route('my-order') }}">
                 <i class="fa fa-tachometer"></i><span class="menu-title">My Order</span>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="{{ route('user-messages') }}">
                 <i class="fa fa-envelope"></i><span class="menu-title">Message</span>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="{{ route('customer-logout') }}" role="button">
                <i class="fa fa-power-off"></i> <span class="menu-title">Logout</span>
              </a>
            </li>

          </ul>
        </nav>
      </aside>

    <div class="dashboard-contents">
      	<div class="contents-inner">
        	<div class="row">
          		<div class="col-12">
            		<div class="section-content">
		              	<div class="content-head">
		                	<h4 class="content-title">Conversation With Admin</h4>
		              	</div>
              			<div class="content-details show">
                             	<div class="message-field">
                                  
	              				<form action="{{ route('send-user-message') }}" method="POST">
                                      {{ csrf_field() }}
                                      <input type="text" placeholder="Message Admin" name="message">
                                      <input type="submit" name="btn" class="msg-btn" value="Send">
	              					
	              				</form>
	              			</div>
                			<div class="message-wrapper">
                @foreach($messages as $message)
                  @if(empty($message->admin))
								<div class="user">
									<h6 class="user-name"><a href="#">{{ Session::get('customer_fname') }}</a></h6>
									<p class="user-message">{{ $message->message }}</p>
                                </div>
                                @else
								<div class="admin">
									<h6 class="admin-name"><a href="#">Admin</a></h6>
									<p class="admin-message">{{ $message->message }}</p>
                                </div>
                                @endif
							@endforeach
							</div>
	              		
              			</div>
            		</div>
          		</div>

        	</div>
      	</div>

    <footer class="site-footer">
        <div class="copyright">
          <div class="float-left">
            Copyright © 2018 <a href="#" target="_blank"></a>
          </div>

          <div class="float-right">
            Developed with Love by <a href="#" rel="nofollow"></a>
          </div>
        </div><!-- /.copyright -->
      </footer><!-- /.site-footer -->
    </div><!-- /.dashboard-contents -->
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
