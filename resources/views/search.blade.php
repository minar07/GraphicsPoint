@extends('layouts.app')

@section('extra-css')
@endsection

@section('content')
<header>
	@if (Auth::user())
	<div class="top-header">				
		<div class="container">
			<div class="row">
				<div class="col-5">
					<div class="social-share">
						<strong>Follow us on: </strong>
						@if($link)
						<a class="follow-button btn-twitter" href="{{ $link[0]['link_url'] }}"><i class="fab fa-twitter"></i></a>
						<a class="follow-button btn-facebook" href="{{ $link[1]['link_url'] }}"><i class="fab fa-facebook"></i></a>
						<a class="follow-button btn-google" href="{{ $link[3]['link_url'] }}"><i class="fab fa-google-plus-g"></i></a>
						<a class="follow-button btn-pinterest" href="{{ $link[2]['link_url'] }}"><i class="fab fa-pinterest"></i></a>
						@endif
					</div>  
				</div>

				{{-- <div class="aa-input-container" id="aa-input-container">
					<input type="search" id="aa-search-input" class="aa-input-search" placeholder="Search Services" name="search"
						autocomplete="off" />
					<svg class="aa-input-icon" viewBox="654 -372 1664 1664">
						<path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
					</svg>
				</div> --}}

				@include('inc.search')
				
				<div  class="col-md-3 download-profile">
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
				@if ($categories)
					@foreach ($categories as $item)
					<li class="nav-item">
						<a class="nav-link" href="{{ route('category',$item->category) }}">{{$item->category}}</a>
					</li> 
					@endforeach 
				@endif  
				</ul>
			  </div>  
		</nav>
	</div>
</header>
<div  class="container mt30">

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
					@if (count($gigs) > 0)
					@foreach ($gigs as $open )
				<div class="col-md-3">
					<div class="single-project">

						<div class="project-img">
							<a href="{{ route('gig_details',$open->id) }}"><img style="height:130px" src="/images/cover_images/{{$open->image_name}}" alt="" class="img-fluid"></a>
						</div>
						<div class="project-details">
							<a href="{{ route('gig_details',$open->id) }}"><h5 class="project-category">{{$open->category->category}}</h5></a>
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

        
				@else 
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="alert alert-warning">
										No gigs found!!
								</div>
							</div>
						</div>	
					</div>
				  
			
				@endif
				
		</div>
			<div class="row">
				<div class="col-md-12 view-more-project mt30">
					{!! $gigs->links() !!}
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection

@section('extra-js')

@endsection