<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="application-name" content="">
	<meta name="description" content="">
	<link rel="icon" href="img/favicon.png">
	<title>Register Page</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css">

	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/vendor/normalize.css">

	<!-- Lity -->
	<link rel="stylesheet" type="text/css" href="css/vendor/lity.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome/css/font-awesome.min.css">

	<!-- Font Poppins -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="style.css">
	
	<!-- Responsive Css -->
	<link rel="stylesheet" type="text/css" href="responsive.css">


</head>
<body id="register-page">

	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			    <div class="navbar-brand">
			    	<a class="logo js-scroll-trigger" href="index.php">Canvas</a>
			    </div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			  	<span class="navbar-toggler-icon"></span>
			  	</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
				    <ul class="navbar-nav ml-auto">
				      	<li>
				      		<input type="text" class="search" placeholder="Search">
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link js-scroll-trigger" href="login.php">Login</a>
				      	</li>
				    	<li class="nav-item">
				        	<a class="nav-link" href="register.php">Register</a>
				    	</li>
				    	<li class="nav-item">
				        	<a class="nav-link" href="order-info.php">My Order</a>
				    	</li>
				    </ul>
				</div>
			</nav>
		</div>
	</header>

	<div class="wrapper fadeInDown">
	  	<div id="formContent">
		    <!-- Tabs Titles -->
		    <h2>Register Here</h2>

		    <!-- Login Form -->
		    <form action="#">
		    	<input type="text" id="login" class="fadeIn second" placeholder="Enter First Name" name="first-name" required>

		    	<input type="text" id="login" class="fadeIn second" placeholder="Enter Last Name" name="last-name" required>

		    	<input type="text" id="login" class="fadeIn second" placeholder="Enter Email" name="email" required>

			    <input type="password" id="login" class="fadeIn second" placeholder="Enter Password" name="psw" required>

			    <input type="password" id="login" class="fadeIn second" placeholder="Repeat Password" name="psw-repeat" required>
			    <hr>
			    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

			    <input type="submit" class="fadeIn fourth" value="Register">
				  
			  	<div class="container signin">
			    	<p>Already have an account? <a href="login.html">Sign in</a>.</p>
			  	</div>
			</form>


		    <!-- Remind Passowrd -->
		    <div id="formFooter">
		      <a class="underlineHover" href="#">Forgot Password?</a>
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
	
	<script src="js/vendor/tether.min.js"></script>
	<script src="js/vendor/popper.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/font-awesome.js"></script>
    <script src="js/sticky.js"></script>
</body>
</html>