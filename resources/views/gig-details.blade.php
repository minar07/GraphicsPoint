
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
										@if(isset($link))
										{{-- @if(count($link)) --}}
										<a class="follow-button btn-twitter" href="{{ $link[0]['link_url'] }}"><i class="fab fa-twitter"></i></a>
										<a class="follow-button btn-facebook" href="{{ $link[1]['link_url'] }}"><i class="fab fa-facebook"></i></a>
										<a class="follow-button btn-google" href="{{ $link[2]['link_url'] }}"><i class="fab fa-google-plus-g"></i></a>
										<a class="follow-button btn-pinterest" href="{{ $link[3]['link_url'] }}"><i class="fab fa-pinterest"></i></a>
										@endif
									</div>  
								</div>

									@include('inc.search')
									
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
										@foreach ($categories as $item)
										<li class="nav-item">
											<a class="nav-link" href="{{ route('category',$item->category) }}">{{$item->category}}</a>
										</li> 
										@endforeach    
								</ul>
							  </div>  
						</nav>
					</div>
		 </header>
	
			<div class="main-content mt30 project-detail-page">
					<div class="row">
						<div class="col-lg-8">
							<div class="slider-row summary recomended">
								<h4>{{$gig->title}}</h4>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<p id="item-category">{{$gig->category->category}}</p>
									</div>
									<div class="col-md-6 text-right">
										 
										<div class="social-share">
											Share this gig on: 
					        				<a class="follow-button btn-twitter" href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"
											target="_blank"><i class="fab fa-twitter"></i></a>
					        				<a class="follow-button btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"
											target="_blank"><i class="fab fa-facebook"></i></a>
					        				<a class="follow-button btn-google" href= "https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}"
											target="_blank"><i class="fab fa-google-plus-g"></i></a>
					        				<a class="follow-button btn-pinterest" href="https://www.pinterest.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"
											target="_blank"><i class="fab fa-pinterest"></i></a>
					        			</div> 
									</div>
								</div>
						    <!-- main slider carousel -->
						        <div class="" id="slider">
					                <div id="myCarousel" class="carousel slide">
					                    <!-- main slider carousel items -->
					                    <div class="carousel-inner">
												@if(!empty($gig->image_name))
												<div class="item carousel-item active" data-slide-number="0">
													<img  src="/images/cover_images/{{$gig->image_name}}" alt="" class="img-fluid">
												</div>
												@endif
												@if(!empty($gig->image_name_1))
												<div class="item carousel-item" data-slide-number="1">
													<img  src="/images/gig_slider_images/{{$gig->image_name_1}}" alt="" class="img-fluid">
												</div>
												@endif
												@if(!empty($gig->image_name_2))
												<div class="item carousel-item" data-slide-number="2">
													<img  src="/images/gig_slider_images/{{$gig->image_name_2}}" alt="" class="img-fluid">
												</div>
												@endif
												@if(!empty($gig->image_name_3))
												<div class="item carousel-item" data-slide-number="3">
													<img  src="/images/gig_slider_images/{{$gig->image_name_3}}" alt="" class="img-fluid">
												</div>
												@endif
												@if(!empty($gig->image_name_4))
												<div class="item carousel-item" data-slide-number="4">
													<img  src="/images/gig_slider_images/{{$gig->image_name_4}}" alt="" class="img-fluid">
												</div>
												@endif
												@if(!empty($gig->image_name_5))
												<div class="item carousel-item" data-slide-number="5">
													<img  src="/images/gig_slider_images/{{$gig->image_name_5}}" alt="" class="img-fluid">
												</div>
												@endif
												@if(!empty($gig->image_name_6))
												<div class="item carousel-item" data-slide-number="6">
													<img  src="/images/gig_slider_images/{{$gig->image_name_6}}" alt="" class="img-fluid">
												</div>
												@endif
												@if(!empty($gig->image_name_7))
												<div class="item carousel-item" data-slide-number="7">
													<img  src="/images/gig_slider_images/{{$gig->image_name_7}}" alt="" class="img-fluid">
												</div>
												@endif

					                        <a class="carousel-control left pt-3" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
					                        <a class="carousel-control right pt-3" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>

					                    </div>
					                    <!-- main slider carousel nav controls -->


					                    <ul class="carousel-indicators list-inline">
											@if(!empty($gig->image_name))
											<li class="list-inline-item active">
					                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
													<img  src="/images/nav_images/{{$gig->image_name}}" alt="" class="img-fluid">
												</a>
											</li>
											@endif

											@if(!empty($gig->image_name_1))
					                        <li class="list-inline-item">
					                            <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
													<img  src="/images/nav_images/{{$gig->image_name_1}}" alt="" class="img-fluid">
												</a>
											</li>
											@endif

											@if(!empty($gig->image_name_2))
					                        <li class="list-inline-item">
					                            <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
													<img  src="/images/nav_images/{{$gig->image_name_2}}" alt="" class="img-fluid">
												</a>
											</li>
											@endif

											@if(!empty($gig->image_name_3))
					                        <li class="list-inline-item">
					                            <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
													<img  src="/images/nav_images/{{$gig->image_name_3}}" alt="" class="img-fluid">
												</a>
											</li>
											@endif

											@if(!empty($gig->image_name_4))
					                        <li class="list-inline-item">
					                            <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
													<img  src="/images/nav_images/{{$gig->image_name_4}}" alt="" class="img-fluid">
												</a>
											</li>
											@endif

											@if(!empty($gig->image_name_5))
					                        <li class="list-inline-item">
					                            <a id="carousel-selector-5" data-slide-to="5" data-target="#myCarousel">
													<img  src="/images/nav_images/{{$gig->image_name_5}}" alt="" class="img-fluid">
												</a>
											</li>
											@endif

											@if(!empty($gig->image_name_6))
					                        <li class="list-inline-item">
					                            <a id="carousel-selector-6" data-slide-to="6" data-target="#myCarousel">
													<img  src="/images/nav_images/{{$gig->image_name_6}}" alt="" class="img-fluid">
												</a>
											</li>
											@endif

											@if(!empty($gig->image_name_7))
					                        <li class="list-inline-item">
					                            <a id="carousel-selector-7" data-slide-to="7" data-target="#myCarousel">
													<img  src="/images/nav_images/{{$gig->image_name_7}}" alt="" class="img-fluid">
												</a>
											</li>
											@endif

					                    </ul>
						            </div>
						        </div>
						    <!--/main slider carousel-->
				        	</div>
				        	<table class="table table-striped table-bordered m50 package-type">
							    <thead>
						      		<tr>
							        	<th></th>
							        	<th>BASIC<i class="fas fa-angle-down fa-basic"></i></th>
								        <th>PREMIUM<i class="fas fa-angle-down fa-premium"></i></th>
								        <th>UNLIMITED<i class="fas fa-angle-down fa-unlimited"></i></th>
							      	</tr>
							    </thead>
							    <tbody>
							      	<tr>
								        <td>ADD YOUR TEXT</td>
								        <td><i class="fa fa-check" aria-hidden="true"></td>
								        <td><i class="fa fa-check" aria-hidden="true"></td>
								        <td><i class="fa fa-check" aria-hidden="true"></td>
							      	</tr>
							      	<tr>
								        <td>YOUR DESCRIPTION</td>
								        <td><i class="fas fa-times" aria-hidden="true"></td>
								        <td><i class="fa fa-check" aria-hidden="true"></td>
								        <td><i class="fa fa-check" aria-hidden="true"></td>
							      	</tr>
							      	<tr>
								        <td>HERE COMES TEXT</td>
								        <td><i class="fa fa-check" aria-hidden="true"></td>
								        <td><i class="fa fa-check" aria-hidden="true"></td>
								        <td><i class="fa fa-check" aria-hidden="true"></td>
							      	</tr>
							      	<tr>
								        <td>YOUR TEXT HERE</td>
								        <td><i class="fa fa-check" aria-hidden="true"></td>
								        <td><i class="fa fa-check" aria-hidden="true"></td>
								        <td><i class="fa fa-check" aria-hidden="true"></td>
							      	</tr>
							      	<tr>
								        <td>YOUR DESCRIPTION</td>
								        <td><i class="fa fa-check" aria-hidden="true"></td>
								        <td><i class="fa fa-check" aria-hidden="true"></td>
								        <td><i class="fa fa-check" aria-hidden="true"></td>
							      	</tr>
							      	<tr>
								        <td>SOME TEXT</td>
								        <td><i class="fas fa-times" aria-hidden="true"></td>
								        <td><i class="fas fa-times" aria-hidden="true"></td>
								        <td><i class="fa fa-check" aria-hidden="true"></td>
							      	</tr>
							      	<tr>
								        <td>SOME TEXT</td>
								        <td><i class="fas fa-times" aria-hidden="true"></td>
								        <td><i class="fas fa-times" aria-hidden="true"></td>
								        <td><i class="fa fa-check" aria-hidden="true"></td>
							      	</tr>
							      	<tr>
								        <td>PRICE</td>
								        <td>{{$gig->basic_price}}</td>
								        <td>{{$gig->premium_price}}</td>
								        <td>{{$gig->unlimited_price}}</td>
							      	</tr>
							      	<tr>
								        <td class="no-border"></td>
								        <td class="buy-here"><a href="{{ route('order_gig' , [$gig->id , 'basic'] ) }}" class="btn">BUY HERE</a></td>
								        <td class="buy-here"><a href="{{ route('order_gig' , [$gig->id , 'premium'] ) }}" class="btn">BUY HERE</a></td>
								        <td class="buy-here"><a href="{{ route('order_gig' , [$gig->id , 'unlimited'] ) }}" class="btn">BUY HERE</a></td>
							      	</tr>
							    </tbody>
						  	</table>
						</div>
						<div class="col-lg-4">
							<div class="col-md-12 summary recomended testimonial">
								<div class="col-md-12  recomended-heading">
									<h4 class="row">Testimonial</h4>
								</div>
								<div class="row">
				                    <div class="owl-carousel owl-theme testimonials" >
									  	<div class="col-md-12">
										  	<div class="row">
												<div class="col-md-12 testimonials-img">
													<img src="images/testimonial.png" alt="" class="col-md-4">
												</div>
												<div class="col-md-12 testimonials-content text-center mt15">
													<p>Loream Epsom....Loream Epsom....Loream Epsom....Loream Epsom....Loream Epsom....Loream </p>
													<h6 class="client-name mt30">Client Name</h6>
													<span class="client-company">Company Name</span>
												</div>
											</div>
									  	</div>
									  	<div class="col-md-12">
										  	<div class="row">
												<div class="col-md-12 testimonials-img">
													<img src="images/testimonial.png" alt="" class="col-md-4">
												</div>
												<div class="col-md-12 testimonials-content text-center mt15">
													<p>Loream Epsom....Loream Epsom....Loream Epsom....Loream Epsom....Loream Epsom....Loream </p>
													<h6 class="client-name mt30">Client Name</h6>
													<span class="client-company">Company Name</span>
												</div>
											</div>
									  	</div>
									  	<div class="col-md-12">
										  	<div class="row">
												<div class="col-md-12 testimonials-img">
													<img src="images/testimonial.png" alt="" class="col-md-4">
												</div>
												<div class="col-md-12 testimonials-content text-center mt15">
													<p>Loream Epsom....Loream Epsom....Loream Epsom....Loream Epsom....Loream Epsom....Loream </p>
													<h6 class="client-name mt30">Client Name</h6>
													<span class="client-company">Company Name</span>
												</div>
											</div>
									  	</div>
									  	<div class="col-md-12">
										  	<div class="row">
												<div class="col-md-12 testimonials-img">
													<img src="images/testimonial.png" alt="" class="col-md-4">
												</div>
												<div class="col-md-12 testimonials-content text-center mt15">
													<p>Loream Epsom....Loream Epsom....Loream Epsom....Loream Epsom....Loream Epsom....Loream </p>
													<h6 class="client-name mt30">Client Name</h6>
													<span class="client-company">Company Name</span>
												</div>
											</div>
									  	</div>
									  	<div class="col-md-12">
										  	<div class="row">
												<div class="col-md-12 testimonials-img">
													<img src="images/testimonial.png" alt="" class="col-md-4">
												</div>
												<div class="col-md-12 testimonials-content text-center mt15">
													<p>Loream Epsom....Loream Epsom....Loream Epsom....Loream Epsom....Loream Epsom....Loream </p>
													<h6 class="client-name mt30">Client Name</h6>
													<span class="client-company">Company Name</span>
												</div>
											</div>
									  	</div>
									  	<div class="col-md-12">
										  	<div class="row">
												<div class="col-md-12 testimonials-img">
													<img src="images/testimonial.png" alt="" class="col-md-4">
												</div>
												<div class="col-md-12 testimonials-content text-center mt15">
													<p>Loream Epsom....Loream Epsom....Loream Epsom....Loream Epsom....Loream Epsom....Loream </p>
													<h6 class="client-name mt30">Client Name</h6>
													<span class="client-company">Company Name</span>
												</div>
											</div>
									  	</div>
									</div>
				                </div>	
							</div>
							<div class="col-md-12 summary mt30 recomended recomended-service">
								<div class="col-md-12 recomended-heading">
									<h4 class="row">Other Services Recomended</h4>
								</div>
								@if (count($gigs) > 0)
								@foreach ($gigs->take(5) as  $open )
                                    @if($open->id != $gig->id)
								<div class="recomended-single-project row">
									<div class="project-img col-md-5">
										<a href="{{ route('gig_details',$open->id) }}"><img  src="/images/cover_images/{{$open->image_name}}" alt="" class="img-fluid"></a>
										{{-- <a href="#"><img src="images/other-service.png" alt="" class="img-fluid"></a> --}}
									</div>
									<div class="project-details col-md-7">
										<a href="{{ route('gig_details',$open->id) }}"><h5>{{$open->title}}</h5></a>
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
												<span>STARTING AT </span><span class="project-price">${{$open->basic_price}}</span>
											</div>
										</div>
									</div>
								</div>
								<hr>
								@endif
								@endforeach
							@if (count($gigs) < 2)
								<div class="alert alert-warning">
									No related gigs found!!
								</div>
							@endif

							@else 
							<div class="alert alert-warning">
								No gigs found!!
							</div>							
							@endif
							</div>
						</div>
					</div>
					<div class="col-md-12 mt30 direction">
						<h4>DON'T WAIT AROUND, ORDER NOW TO SECURE YOUR ORDER AND PLACE IN THE QUEUE</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a turpis turpis. Mauris dapibus augue a pulvinar auctor. Fusce consequat mi sed elit scelerisque elementum. Phasellus pellentesque, risus ut hendrerit egestas, est tellus viverra est, ut dignissim elit ipsum vel magna. Maecenas suscipit maximus nisi, ut vehicula dolor malesuada ut. Pellentesque suscipit viverra erat, et venenatis libero eleifend at. Duis nisl nibh, interdum scelerisque lacus et, pharetra volutpat lorem. In hac habitasse platea dictumst. Phasellus ultrices iaculis sagittis. Suspendisse potenti. Nunc dignissim nec arcu a condimentum. Etiam lacinia auctor orci, sit amet facilisis diam congue eu.</p>

						<p>Ut porttitor tincidunt enim interdum lobortis. Etiam odio leo, cursus non erat ut, feugiat pellentesque nisi. Integer aliquam felis est, non egestas libero sagittis sed.</p>
					</div>
			</div>
@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
@endsection
  