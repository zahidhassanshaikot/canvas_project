   
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

	<section id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="product">
						<div class="title">
							<h3>Demo Card</h3>
						</div>
						<div class="product-image">
							<a href="{{ route('demos',['id'=>'Card']) }}"><img src="{{ asset('assets') }}/img/1.jpg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="product">
						<div class="title">
							<h3>Banner</h3>
						</div>
						<div class="product-image">
							<a href="{{ route('demos',['id'=>'Banner']) }}"><img src="{{ asset('assets') }}/img/2.jpg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="product">
						<div class="title">
							<h3>Poster</h3>
						</div>
						<div class="product-image">
							<a href="{{ route('demos',['id'=>'Poster']) }}"><img src="{{ asset('assets') }}/img/3.jpg" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>

@endsection