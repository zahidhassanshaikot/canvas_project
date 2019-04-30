   
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
				<div class="col-md-12 col-sm-12">
					<div class="main-title">
						<h3>Demo Card</h3>
					</div>
				</div>
				@foreach($demos as $demo)
				<div class="col-md-4 col-sm-12">
					<div class="product">
						<div class="product-image">
							@if(!empty($demo->image))
							<a href="{{ route('single-post',['id'=>$demo->id]) }}"><img src="{{asset( $demo->image) }}" alt="Image"></a>
							@else
							<a href="{{ route('single-post',['id'=>$demo->id]) }}"><img src="{{ asset('assets') }}/img/2.jpg" alt=""></a>
							@endif
						</div>
					</div>
				</div>
				@endforeach
				{{--  <div class="col-md-4 col-sm-12">
					<div class="product">
						<div class="product-image">
							<a href="{{ route('single-post') }}"><img src="{{ asset('assets') }}/img/2.jpg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="product">
						<div class="product-image">
							<a href="{{ route('single-post') }}"><img src="{{ asset('assets') }}/img/3.jpg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="product">
						<div class="product-image">
							<a href="{{ route('single-post') }}"><img src="{{ asset('assets') }}/img/1.jpg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="product">
						<div class="product-image">
							<a href="{{ route('single-post') }}"><img src="{{ asset('assets') }}/img/2.jpg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="product">
						<div class="product-image">
							<a href="{{ route('single-post') }}"><img src="{{ asset('assets') }}/img/3.jpg" alt=""></a>
						</div>
					</div>
				</div>  --}}
			</div>
		
		</div>
	</section>
	@endsection