   
@extends('layouts.master')
@section('content')

	<div class="wrapper fadeInDown">
	  	<div id="formContent">
		    <!-- Tabs Titles -->
		    <h2>Register Here</h2>
            <div class=" card card-default">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
		    <!-- Login Form -->
		    <form action="{{ route('save-customer-info') }}" method="POST">
					 {{ csrf_field() }} 
		    	<input type="text" id="login" class="fadeIn second" placeholder="Enter First Name" name="fname" required>

		    	<input type="text" id="login" class="fadeIn second" placeholder="Enter Last Name" name="lname" required>

		    	<input type="text" id="login" class="fadeIn second" placeholder="Enter Email" name="email" required>
		    	<input type="text" id="login" class="fadeIn second" placeholder="Phone No" name="phone_no" required>

			    <input type="password" id="login" class="fadeIn second" placeholder="Enter Password" name="password" required>

			    <input type="password" id="login" class="fadeIn second" placeholder="Repeat Password" name="password_confirmation" required>
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
	
@endsection