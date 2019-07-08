@extends('layouts.app')

@section('content')

					<div class="row">
						<div class="col-md-8">

								<div class="slider-row summary recomended">
									<h4><strong>Title: </strong>{{$gig->title}}</h4>
									<hr>
									<div class="row">
										<div class="col-md-6">
											<p id="item-category"><strong>Category: </strong>{{$gig->category->category}}</p>
										</div>
										<div class="col-md-6 text-right">
											 
											
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
							<br>
										<div class="row">
											<div class="col-md-12">
											<strong>Description:</strong> {{$gig->description}}
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-12">
											<strong>Basic Price:</strong> {{$gig->basic_price}}
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-12">
											<strong>Premium Price:</strong> {{$gig->premium_price}}
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-12">
											<strong>Unlimited Price:</strong> {{$gig->unlimited_price}}
											</div>
										</div>
				        	
						</div>

					</div>
@endsection