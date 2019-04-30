   
@extends('layouts.master')
@section('content')
	<section id="slider">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 order-sm-1 order-2">
					<div class="slider-content">
						<div class="verticle-align-tm clearfix">
							<h1 class="slider-title">Welcome online greeting card/Banner/Poster Maker/Ordering System</h1>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 order-sm-2 order-1">
					<div class="slider-content">
						<div class="verticle-align-tm">
							<img src="img/slider_content1.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="single-post">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="single-post">
						<div class="title">
							<h4>Order Card</h4>
						</div>
						<div class="feature-image">
							@if(!empty($demo->image))
							<img src="{{asset( $demo->image) }}" alt="">
							@else
							<img src="{{ asset('assets') }}/img/2.jpg" alt="">
							@endif
						</div>
						<div class="post-details">
							<ul>
								<li>Available</li>
								<li>Size: {{ $demo->availabe_size }}</li>
								<li>Price: {{ $demo->price }}</li>
							</ul>
							<div class="order-btn">
								<a href="#">Order Now</a>
							</div>
						</div>
					</div>
					<div class="comments">
						<h3 class="comment-title">Comments</h3>
@foreach($cmts as $cmt)
						<div class="user">
							<a href="#"><img src="{{ asset('assets') }}/img/user-featured-image1.jpg" alt="Aaron Hank"></a>
							<h6 class="user-name"><a href="#">{{ $cmt->name }}</a></h6>
							<p class="user-comment">{{ $cmt->comment }}</p>
							{{--  <div class="reply"> <a href="#">Reply</a> </div>  --}}
							{{--  <div class="user">
								<a href="#"><img src="{{ asset('assets') }}/img/user-featured-image2.jpg" alt="Aaron Hank"></a>
								<h6 class="user-name"><a href="#">Stephen King</a></h6>
								<p class="user-comment">There are many variations of passages of Lorem Ipsum availslightly believe.</p>
								 <div class="reply"> <a href="#">Reply</a> </div>  
							</div>  --}}
						</div>
@endforeach
						{{--  <div class="user">
							<a href="#"><img src="{{ asset('assets') }}/img/user-featured-image2.jpg" alt="Aaron Hank"></a>
							<h6 class="user-name"><a href="#">Ballmer Steve</a></h6>
							<p class="user-comment">There are many variations of passages of Lorem Ipsum availslightly believe.It is a long established fact that a reader will be distracted.</p>
							<div class="reply"> <a href="#">Reply</a> </div>
						</div>  --}}
					</div>
					<p class="leave-comment">Leave a Comment</p>
					<form action="{{ route('comment_on_post') }}" method="POST">
						{{ csrf_field() }}
						<div class="half-width">
							<input type="hidden" value="{{ $demo->id }}" name="demo_id">
							<input type="text" placeholder="Name" name="name">
							<input type="email" placeholder="Email" name="email">
						</div>
						<div class="full-width">
							<textarea name="comment" placeholder="Comment"></textarea>
						</div>
						<div class="submit"><input type="submit" value="Submit"></div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection