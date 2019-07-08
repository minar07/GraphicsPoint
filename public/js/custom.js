$(document).ready(function(){
  var owl = $('.owl-carousel.clients');
	owl.owlCarousel({
	    loop:true,
	    margin:10,
	    autoplay:true,
	    autoplayTimeout:2000,
	    autoplayHoverPause:true,
	    responsiveClass:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:3,
	            nav:true
	        },
	        1000:{
	            items:5,
	            nav:true
	        }
	    }
	})


	
  var owl = $('.owl-carousel.testimonials');
	owl.owlCarousel({
	    loop:true,
	    margin:10,
	    autoplay:true,
	    autoplayTimeout:4000,
	    autoplayHoverPause:true,
	    responsiveClass:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:false
	        },
	        600:{
	            items:1,
	            nav:false
	        },
	        1000:{
	            items:1,
	            nav:false
	        }
	    }
	})




$(".show-hide > a").click(function(e){
		e.preventDefault();
        $(".packages").slideToggle();
        $(this).html() == 'Show Whats included <i class="fa fa-angle-down" aria-hidden="true"></i>' ? $(this).html('Hide Whats included <i class="fa fa-angle-up" aria-hidden="true"></i>') : $(this).html('Show Whats included <i class="fa fa-angle-down" aria-hidden="true"></i>');
    });


});


