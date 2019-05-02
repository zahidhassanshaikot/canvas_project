@extends('layouts.master')
@section('content')

	<div class="wrapper fadeInDown">
	  	<div id="formContent">
		    <!-- Tabs Titles -->
		    <h2>Login Here</h2>

		    <!-- Login Form -->
		    <form action="{{ route('customer-login') }}" method="POST">
					{{ csrf_field() }}
		      <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
		      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
		      <input type="submit" class="fadeIn fourth" name="btn" value="Log In">
		    </form>

		    <!-- Remind Passowrd -->
		    <div id="formFooter">
		      <a class="underlineHover" href="#">Forgot Password?</a>
		    </div>

	  	</div>
	</div>
	

	
@endsection