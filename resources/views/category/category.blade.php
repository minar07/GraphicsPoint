@extends('layouts.app')

@section('content')
<header>
	@if (Auth::user())
	<div class="top-header">				
		<div class="container">
			<div class="row">
				<div class="col-5">
					<div class="social-share">
						<strong>Follow us on: </strong>
						<a class="follow-button btn-twitter" href="{{ $link[1]['link_url'] }}"><i class="fab fa-twitter"></i></a>
						<a class="follow-button btn-facebook" href="{{ $link[0]['link_url'] }}"><i class="fab fa-facebook"></i></a>
						<a class="follow-button btn-google" href="{{ $link[3]['link_url'] }}"><i class="fab fa-google-plus-g"></i></a>
						<a class="follow-button btn-pinterest" href="{{ $link[2]['link_url'] }}"><i class="fab fa-pinterest"></i></a>
					</div>  
				</div>
				<div class="col-md-4 search">
					<form class="navbar-form navbar-center row col-md-12" role="search">
						<div class="form-group col-9">
							  <input type="text" class="form-control search-box" placeholder="Search Services">
						</div>
						<button type="submit" class="btn btn-info search-btn col-3">Search</button>
					  </form>
				</div>
				<div class="col-md-3 download-profile">
					<a href="#" class="btn btn-brand">Download Profile</a>
				</div>
			</div>
		</div>
	</div>
@endif
	<div class="bottom-header">
		<nav class="navbar navbar-expand-md navbar-light container">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					  <li class="nav-item">
						<a class="nav-link" href="#">Graphics & Design</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">Degital Marketing</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">Programming & Tech</a>
					  </li>    
				</ul>
			  </div>  
		</nav>
	</div>
</header>
<div  class="container mt30">
	<div  class="slider-row">
		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				@foreach ($slide as $key => $open )
				<li data-target="#demo" data-slide-to="{{$open->id}}" class="@if($key==0)active @endif"></li>
				@endforeach
			</ul>
			<div class="carousel-inner">
					@foreach ($slide as $key => $open )
			    <div class="carousel-item @if($key==0)active @endif">
						<a href="#"><img  src="/storage/slider_images/{{$open->image_name}}" alt="" class="img-fluid"></a>
			      	<div class="carousel-caption">
				        <h3>{{$open->title}}</h3>
				        <p>{{$open->description}}</p>
			      	</div>   
			    </div>
				@endforeach
		   </div>

		  	<a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
		  	</a>
		  	<a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
		</div>
	</div>
	<div class="main-content row mt30">
		<div class="col-md-3 recently-completed">
			<h5 class="mb30">Recently Completed</h5>
			<div class="row">
				<div class="col-5">
					<a href="#"><img src="images/recently-completed.png" alt="" class="img-fluid"></a>
				</div>
				<div class="col-7">
					<a href="#"><h5>Iadegun</h5></a>
					<span>Star</span>
					<p>Purchased for my ....</p>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-5">
					<a href="#"><img src="images/recently-completed.png" alt="" class="img-fluid"></a>
				</div>
				<div class="col-7">
					<a href="#"><h5>Iadegun</h5></a>
					<span>Star</span>
					<p>Purchased for my ....</p>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-5">
					<a href="#"><img src="images/recently-completed.png" alt="" class="img-fluid"></a>
				</div>
				<div class="col-7">
					<a href="#"><h5>Iadegun</h5></a>
					<span>Star</span>
					<p>Purchased for my ....</p>
				</div>
			</div>
		</div>
		<div class="col-md-9 our-project">
			<div class="row">
					{{-- @if (count($all_gigs) > 0) --}}
					@foreach ($all_gigs as $open )
				<div class="col-md-3">
					<div class="single-project">

						<div class="project-img">
							<a href="{{ route('gigs.show',$open->id) }}"><img  src="/storage/cover_images/{{$open->image_name}}" alt="" class="img-fluid"></a>
						</div>
						<div class="project-details">
							<a href="{{ route('gigs.show',$open->id) }}"><h5 class="project-category">{{$open->category}}</h5></a>
							<p>{{$open->title}}</p>
							<div class="row project-action">
								<div class="col-4">
									<a href="#">
										<i class="fa fa-share-alt" aria-hidden="true"></i>
									</a>
									<a href="#">
										<i class="fa fa-heart" aria-hidden="true"></i>
									</a>
								</div>
								<div class="col-8 project-starting">
									<span>STARTING AT</span><span class="project-price">${{$open->price}}</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				@endforeach

        
				{{-- @else 
					<p>No gigs fuoud!!</p>
			
				@endif --}}
				
		</div>
			<div class="row">
				<div class="col-md-12 view-more-project mt30">
					{!! $all_gigs->links() !!}
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection