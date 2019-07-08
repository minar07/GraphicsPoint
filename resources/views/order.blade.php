@extends('layouts.app')
@section('content') 
		<header>
			
		
    		<div class="bottom-header">
    			<nav class="navbar navbar-expand-md navbar-light container">
				  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					    <span class="navbar-toggler-icon"></span>
				  	</button>
				  	<div class="collapse navbar-collapse" id="collapsibleNavbar">
					    
				  	</div>  
				</nav>
    		</div>
        </header>
        <div class="container mt30">
			<div class="main-content mt30">
				<form method="" action="">
					<div class="row">
						<div class="col-md-8">
							<div class="custimize-order">
								<h4 class="mb30">Customize Your Order</h4>
								<div class="row">
									<div class="col-md-9 order-summary">
										<div class="row">
											<div class="col-md-4">
												<a href="#"><img src="images/order.png" alt="" class="img-fluid"></a>
											</div>
											<div class="col-md-8">
												<a href="#"><h5>I will design corporate brochure and flyer</h5></a>
												<span>Star</span><span>(121 Reviews)</span>
												<div class="mt20 show-hide">
													<a href="#" class="brand-color">
														Hide What's included <i class="fa fa-angle-up" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3 order-qty">
										<div class="row">
											<div class="col-md-8">
												<label for="qty">Qty</label>
												<select name="qty" class="" id="qty">
													<option value="{{ $gig->{$package.'_price'} }}">1</option>
													<option value="{{ 2 * $gig->{$package.'_price'} }}">2</option>
												</select>
												<script>
													

													$(document).ready(function(){
														function updateprice(){
															var price = parseInt($('#qty').val());
															var fastdalivary = parseInt($('#fast-delivery-select').val());
															var aditionaldalivary = parseInt($('#aditional-rivision-select').val());
															var sourceselect =  parseInt($('#source-file-select').val());
															var foldablelayout =  parseInt($('#foldable-layout-select').val());
															var twopagein =  parseInt($('#two-page-select').val());
															var fourpagein =  parseInt($('#four-page-select').val());
															var threepagesel =  parseInt($('#three-page-select').val());
															var sixpagesel =  parseInt($('#six-page-select').val());

															var finalprice = parseInt(price + fastdalivary );
															console.log(finalprice);
															finalprice = parseInt(finalprice + aditionaldalivary );
															console.log(finalprice);
															finalprice = parseInt(finalprice + sourceselect );
															finalprice = parseInt(finalprice + foldablelayout );
															finalprice = parseInt(finalprice + twopagein );
															finalprice = parseInt(finalprice + fourpagein );
															finalprice = parseInt(finalprice + threepagesel );
															finalprice = parseInt(finalprice + sixpagesel );


															$( "#packageprice" ).html('$'+ price);
															$( "#subTotal" ).html('$'+ finalprice);
															// var servicecharge =  parseInt($('#service-charge').val());
															 var subtotal = parseInt($('#subTotal').val());
															// var totalpricewithcharge = parseInt(subtotal + servicecharge);
															 $( "#total-price" ).html('$'+ finalprice);


														}

														$( "#qty" ).change(function() {
															updateprice();
														});
														$( "#fast-delivery-select" ).change(function(){
															updateprice();
														});
														$("#aditional-rivision-select").change(function(){
															updateprice();
														});
														$("#source-file-select").change(function(){
															updateprice();
														});
														$("#foldable-layout-select").change(function(){
															updateprice();
														});
														$("#two-page-select").change(function(){
															updateprice();
														});
														$("#four-page-select").change(function(){
															updateprice();
														});
														$("#three-page-select").change(function(){
															updateprice();
														});
														$("#six-page-select").change(function(){
															updateprice();
														});
													});
												</script>
											</div>
											<div class="col-md-4" id="packageprice">${{ $gig->{$package.'_price'} }}</div>
										</div>
									</div>
								</div>
								<div class="row col-md-12 mt10">
									<div class="packages">
										@if($package == 'basic')
											<h5>Basic</h5>
											<p>Single side brochure/flyer JPEG & PDF</p>
											<p><i class="fa fa-check brand-color" aria-hidden="true"></i> 1 Revision</p>
											<p><i class="fa fa-check brand-color" aria-hidden="true"></i> Extra Fast 1 Day Delivery</p>
											<p><i class="fa fa-check brand-color" aria-hidden="true"></i> Additional Rivision</p>
											<p><i class="fa fa-check brand-color" aria-hidden="true"></i> Included Source File</p>
										@elseif ($package == 'premium')
											<h5>Premium</h5>
											<p>Single side brochure/flyer JPEG & PDF</p>
											<p><i class="fa fa-check brand-color" aria-hidden="true"></i> 1 Revision</p>
											<p><i class="fa fa-check brand-color" aria-hidden="true"></i> Extra Fast 1 Day Delivery</p>
											<p><i class="fa fa-check brand-color" aria-hidden="true"></i> Additional Rivision</p>
											<p><i class="fa fa-check brand-color" aria-hidden="true"></i> Included Source File</p>
											<p><i class="fa fa-check brand-color" aria-hidden="true"></i> Included Source File And Source Image</p>
										@else
											<h5>Ultimate</h5>
											<p>Single side brochure/flyer JPEG & PDF</p>
											<p><i class="fa fa-check brand-color" aria-hidden="true"></i> 1 Revision</p>
											<p><i class="fa fa-check brand-color" aria-hidden="true"></i> Extra Fast 1 Day Delivery</p>
											<p><i class="fa fa-check brand-color" aria-hidden="true"></i> Additional Rivision</p>
											<p><i class="fa fa-check brand-color" aria-hidden="true"></i> Included Source File</p>
											<p><i class="fa fa-check brand-color" aria-hidden="true"></i> Included Source File And Source Image</p>
											<p><i class="fa fa-check brand-color" aria-hidden="true"></i> Included Extra Services</p>
											<p><i class="fa fa-check brand-color" aria-hidden="true"></i> Included Other Functionalities</p>
										@endif
									</div>
								</div>
							</div>
							<hr>
							<div class="extras mt15">
								<div class="row extras-item">
									<div class="col-md-9">
										<div class="form-check">
										    <label class="form-check-label">
										      	<input class="form-check-input" type="checkbox" name="fast-delivery-input" id="fast-delivery-input"> 
										      	<i class="far fa-clock" aria-hidden="true"></i>
												<div class=" extras-with-icon">Extra Fast: <span>1 Day Delivery</span></div>
										    </label>
									  	</div>
									</div>
									<div class="col-md-3 extras-option">
										<select name="fast-delivery-select" class="col-md-12" id="fast-delivery-select">
											<option value="0">0 ($0)</option>
											<option value="20">1 ($20)</option>
											<option value="10">2 ($10)</option>

										</select>
										<script>
											
										</script>
									</div>
										
								</div>
								<div class="row extras-item">
									<div class="col-md-9">
										<div class="form-check extras-rivision">
										    <label class="form-check-label">
										      	<input class="form-check-input" type="checkbox" name="aditional-rivision-input" id="aditional-rivision-input"> 
										      	<i class="fa fa-refresh" aria-hidden="true"></i>
												<div class=" extras-with-icon">
													Aditional Revision <i class="fa fa-question-circle" aria-hidden="true"></i>
													<p>(+1 Day)</p>
												</div>
										    </label>
									  	</div>
									</div>
									<div class="col-md-3 extras-option">
										<select name="aditional-rivision-select" class="col-md-12" id="aditional-rivision-select">
											<option value="0">0 ($0)</option>
											<option value="20">1 ($20)</option>
											<option value="10">2 ($10)</option>
										</select>
									</div>
								</div>
								<div class="row extras-item">
									<div class="col-md-9">
										<div class="form-check">
										    <label class="form-check-label">
										      	<input class="form-check-input" type="checkbox" name="source-file-input" id="source-file-input"> 
												<div>
													Include Source File <i class="fa fa-question-circle" aria-hidden="true"></i>
												</div>
												<p>(+1 Day)</p>
										    </label>
									  	</div>
									</div>
									<div class="col-md-3 extras-option">
										<select name="source-file-select" class="col-md-12" id="source-file-select">
											<option value="0">0 ($0)</option>
											<option value="20">1 ($20)</option>
											<option value="10">2 ($10)</option>
										</select>
									</div>
								</div>
								<div class="row extras-item">
									<div class="col-md-9">
										<div class="form-check">
										    <label class="form-check-label">
										      	<input class="form-check-input" type="checkbox" name="foldable-layout-input" id="foldable-layout-input"> 
												<div>
													Foldable Brochure Layout <i class="fa fa-question-circle" aria-hidden="true"></i>
												</div>
												<p>(+1 Day)</p>
										    </label>
									  	</div>
									</div>
									<div class="col-md-3 extras-option">
										<select name="foldable-layout-select" class="col-md-12" id="foldable-layout-select">
											<option value="0">0 ($0)</option>
											<option value="20">1 ($20)</option>
											<option value="10">2 ($10)</option>
										</select>
									</div>
								</div>
								<div class="row extras-item">
									<div class="col-md-9">
										<div class="form-check">
										    <label class="form-check-label">
										      	<input class="form-check-input" type="checkbox" name="two-page-input" id="two-page-input"> 
												<div>
													Extra 2 Pages <i class="fa fa-question-circle" aria-hidden="true"></i>
												</div>
												<p>(+1 Day)</p>
										    </label>
									  	</div>
									</div>
									<div class="col-md-3 extras-option">
										<select name="two-page-select" class="col-md-12" id="two-page-select">
											<option value="0">0 ($0)</option>
											<option value="20">1 ($20)</option>
											<option value="10">2 ($10)</option>
										</select>
									</div>
								</div>
								<div class="row extras-item">
									<div class="col-md-9">
										<div class="form-check">
										    <label class="form-check-label">
										      	<input class="form-check-input" type="checkbox" name="four-page-input" id="four-page-input"> 
												<div>
													Extra 4 Pages <i class="fa fa-question-circle" aria-hidden="true"></i>
												</div>
												<p>(+2 Day)</p>
										    </label>
									  	</div>
									</div>
									<div class="col-md-3 extras-option">
										<select name="four-page-select" class="col-md-12" id="four-page-select">
											<option value="0">0 ($0)</option>
											<option value="20">1 ($20)</option>
											<option value="10">2 ($10)</option>
										</select>
									</div>
								</div>
								<div class="row extras-item">
									<div class="col-md-9">
										<div class="form-check">
										    <label class="form-check-label">
										      	<input class="form-check-input" type="checkbox" name="three-page-input" id="three-page-input"> 
												<div>
													Extra 3 Pages <i class="fa fa-question-circle" aria-hidden="true"></i>
												</div>
												<p>(+2 Day)</p>
										    </label>
									  	</div>
									</div>
									<div class="col-md-3 extras-option">
										<select name="three-page-select" class="col-md-12" id="three-page-select">
											<option value="0">0 ($0)</option>
											<option value="20">1 ($20)</option>
											<option value="10">2 ($10)</option>
										</select>
									</div>
								</div>
								<div class="row extras-item">
									<div class="col-md-9">
										<div class="form-check">
										    <label class="form-check-label">
										      	<input class="form-check-input" type="checkbox" name="six-page-input" id="six-page-input"> 
												<div>
													Extra 6 Pages <i class="fa fa-question-circle" aria-hidden="true"></i>
												</div>
												<p>(+4 Day)</p>
										    </label>
									  	</div>
									</div>
									<div class="col-md-3 extras-option">
										<select name="six-page-select" class="col-md-12" id="six-page-select">
											<option value="0">0 ($0)</option>
											<option value="20">1 ($20)</option>
											<option value="10">2 ($10)</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="col-md-12 summary">
								<div class="row">
									<h4 class="col-md-12">Summary</h4>
								</div>
								<hr>
								<div class="row" id="subTotalRow">
									<div class="col-md-6">Subtotal</div>
									<div class="col-md-6 text-right" id="subTotal">${{ $gig->{$package.'_price'} }}</div>
								</div>
								<div class="row mt15">
									<div class="col-md-6">Service Charge</div>
									<div class="col-md-6 text-right" id="service-charge" value="0">$0</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-6"><strong>Total</strong></div>
									<div class="col-md-6 text-right" id="total-price"><strong>$0</strong></div>
								</div>
								<div class="row mt15">
									<div class="col-md-6">Delevery Time</div>
									<div class="col-md-6 text-right">1 Day</div>
								</div>
							</div>
							<div class="col-md-12 summary mt30">
								<h4 class="col-md-12">Payment Method</h4>
								<hr>
								<ul class="payment-method mt30">
				        		 	<li><img src="images/paypal.png" alt=""></li>
				        		 	<li><img src="images/visa.png" alt=""></li>
				        		 	<li><img src="images/mastercard.png" alt=""></li>
				        		 	<li><img src="images/american-express.png" alt=""></li>
				        		 	<li><img src="images/diners-club.png" alt=""></li>
				        		 	<li><img src="images/discover.png" alt=""></li>
				        		 	<li><img src="images/jcb.png" alt=""></li>
			        		 	</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 mt30 place-order">
							<a href="{{ route('addmoney.paywithstripe') }}" class="btn btn-brand col-md-3">PLACE YOUR ORDER</a>
						</div>
					</div>
				</form>
			</div>
		</div>

        @endsection

