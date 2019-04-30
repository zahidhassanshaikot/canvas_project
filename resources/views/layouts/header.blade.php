	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			    <div class="navbar-brand">
			    	<a class="logo js-scroll-trigger" href="{{ route('/') }}">Canvas</a>
			    </div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			  	<span class="navbar-toggler-icon"></span>
			  	</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
				    <ul class="navbar-nav ml-auto">
				      	<li class="nav-item">
				      		<input type="text" class="search" placeholder="Search">
						  </li>
						  {{--  @if(Session::get('customer_id'))  --}}
				      	<li class="nav-item">
				        	<a class="nav-link" href="{{ route('login-page') }}">Login</a>
				      	</li>
				    	<li class="nav-item">
				        	<a class="nav-link" href="{{ route('reg') }}">Register</a>
						</li>
						{{--  @endif  --}}
				    	<li class="nav-item">
				        	<a class="nav-link" href="{{ route('order-info') }}">My Order</a>
				    	</li>
				    </ul>
				</div>
			</nav>
		</div>
	</header>