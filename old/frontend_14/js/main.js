$(document).ready(function(){

	/*Super slides*/
	$('#slides').superslides({
		animation: 'fade',
		play: 4000,
		pagination: false
	});

	/*Typed Js*/
	var typed = new Typed(".typed", {
  		strings: ["Web Programmer", "App Developer","Mobile Apps Developer"],
  		loop: true,
  		showCursor: false,
  		typeSpeed: 50,
  		startDelay: 1000
	});

	/*Owl Carousel*/
	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:5
	        }
	    }
	});

	/*Eset Pie Chart*/
	
		var skillsTopOffset = $('.skillsSection').offset().top;
		$(window).scroll(function(){
			if(window.pageYOffset > skillsTopOffset - $(window).height()+200) {
				$('.chart').easyPieChart({
			        easing: 'easeInOut',
			        barColor: '#fff',
			        trackColor: false,
			        scaleColor: false,
			        lineWidth: 4,
			        size: 152,
			        onStep: function(from, to, percent){
			            $(this.el).find('.percent').text(Math.round(percent));
			        }
		    	});
			}
		});
		/*Eset Pie Chart*/	
});