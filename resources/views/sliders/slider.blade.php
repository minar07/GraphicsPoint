<!DOCTYPE html>
<html>
	<head>
		<title>Graphics Point</title>
		
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <meta name="description" content=""> 
        <meta name="keywords" content=""> 
        
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/owl.carousel.min.css">
		<link rel="stylesheet" href="../css/owl.theme.default.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/mediaquries.css">
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/custom.js"></script>


        <style>
                table {
                    width:100%;
                }
                table, th, td {
                    border: 1px solid black;
                    border-collapse: collapse;
                }
                th, td {
                    padding: 15px;
                    text-align: left;
                }
                table#t01 tr:nth-child(even) {
                    background-color: #eee;
                }
                table#t01 tr:nth-child(odd) {
                   background-color: #fff;
                }
                table#t01 th {
                    background-color: black;
                    color: white;
                }
                </style>
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="105">
		<div class="admin-wrapper">
			<header>
				<div class="admin-header">
					<div class="container">
						<div class="row">
							<div class="col-md-6 logo">
								<a class="" href="#"><img src="../images/logo.png" alt="Logo"></a>
							</div>
							<div class="col-6 text-right">
								<div class="dropdown">
								  	<button type="button" class="admin-dropdown dropdown-toggle" data-toggle="dropdown">
								   	 	Admin
								  	</button>
								  	<div class="dropdown-menu">
								    	<a class="dropdown-item" href="#">My Account</a>
								    	<a class="dropdown-item" href="#">Logout</a>
								  	</div>
								</div>
							</div>
						</div>
					</div>
	    		</div>
	        </header>
	        <hr>
			<div class="container">
			    
                    

            <div class="col-sm-9">
                <div class="row">

                        <h2>Slider Image</h2>

                        <table style="width:100%">
                        <tr>
                            <th>Slider Image One</th>
                            <th>Slider Image Two</th>
                            <th>Slider Image Three</th>

                        </tr>

                        <tr>
							@foreach ($slide as $open)

                            <td><a href="#"><img style="width:60%" src="/storage/slider_images/{{$open->image_name_1}}" alt="" class="img-fluid"></a></td>
                            <td><a href="#"><img style="width:60%" src="/storage/slider_images/{{$open->image_name_2}}" alt="" class="img-fluid"></a></td>
                            <td><a href="#"><img style="width:60%" src="/storage/slider_images/{{$open->image_name_3}}" alt="" class="img-fluid"></a></td>
                            <td><a href="/sliders/{{$slide[0]->id}}/edit"  class="btn btn-warning">Edit</a></td>
							@endforeach
                        </tr>

                        </table>
                   
                </div>
            </div>


					{{-- <div class="col-sm-9">
							<!-- column 2, content goes here... -->
									{!! Form::open(['action' => 'GigController@storeSlide', 'method'=> 'post', 'enctype'=>'multipart/form-data','files'=>true]) !!}							
								
								  <div class="form-group">
									<label for="slider_image_one">Slider Image One</label>
									<input type="file" class="form-control" id="project-image1" name="slider_image_one" placeholder="Enter Project Description">
								 </div>
								 <div class="form-group">
									<label for="slider_image_two">Slider Image Two</label>
									<input type="file" class="form-control" id="project-image2" name="slider_image_two" placeholder="Enter Project Description">
								</div> 
								<div class="form-group">
									<label for="slider_image_three">Slider Image Three</label>
									<input type="file" class="form-control" id="project-image3" name="slider_image_three" placeholder="Enter Project Description">
								</div>
								  
								  {{Form::submit('Add',  ['class'=> 'btn btn-primary'])}}
								  {!! Form::close() !!}
						</div> --}}

			    </div>
			</div>
	    </div>
        <footer class="col-md-12">
	        <div class="container footer">
		        <div class="row">
		        	<div class="col-md-3">
		        		<a class="" href="#"><img src="../images/footer-logo.png" alt=""></a>
		        		<ul class="payment-method mt30">
		        		 	<li><img src="../images/paypal.png" alt=""></li>
		        		 	<li><img src="../images/skrill.png" alt=""></li>
		        		 	<li><img src="../images/mastercard.png" alt=""></li>
		        		 	<li><img src="../images/western-union.png" alt=""></li>
		        		 </ul> 
			        </div>
		        	<div class="col-md-3">
		        		<h4 class="footer-content-heading">Categories</h4>
					    <ul class="mt30 bottom-menu">
					      	<li>
						        <a href="#">Graphics & Design</a>
					      	</li>
					      	<hr>
					      	<li>
					        	<a href="#">Degital Marketing</a>
					      	</li>
					      	<hr>
					      	<li>
					        	<a href="#">Programming & Tech</a>
					      	</li>    
					    </ul>
		        	</div>
		        	<div class="col-md-3">
		        		<h4 class="footer-content-heading">About us</h4>
					    <ul class="mt30 bottom-menu">
					      	<li>
						        <a href="#">Contact us</a>
					      	</li>
					      	<hr>
					      	<li>
						        <a href="#">About us</a>
					      	</li>
					      	<hr>
					      	<li>
					        	<a href="#">Trust & Safety</a>
					      	</li>
					      	<hr>
					      	<li>
					        	<a href="#">Testimonials</a>
					      	</li>
					      	<hr>   
					      	<li>
					        	<a href="#">Events</a>
					      	</li>    
					    </ul>
		        	</div>
		        	<div class="col-md-3 blog">
						<h4 class="footer-content-heading">Blog</h4>
						<div class="row mt30">
							<div class="col-4">
								<a href="#"><img src="../images/blog.png" alt="" class="img-fluid"></a>
							</div>
							<div class="col-8">
								<a href="#"><h5>Unraveling Your Unique Selling.....</h5></a>
								<p>A business logo is one of the core elements that have the capab</p>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-4">
								<a href="#"><img src="../images/blog.png" alt="" class="img-fluid"></a>
							</div>
							<div class="col-8">
								<a href="#"><h5>Unraveling Your Unique Selling.....</h5></a>
								<p>A business logo is one of the core elements that have the capab</p>
							</div>
						</div>
		        	</div>
		        </div>
		    </div>
	        <div class="row copyrights">
	        	<div class="container text-right">
	        		<p>@ All right reserved 2018. Privacy Policy and Refund Policy</p>
	        	</div>
	        </div>
	    </footer>
    </body>
</html>