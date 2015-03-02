/*global $:false */
$(document).ready(function(){
	'use strict';

	$('.portfolio-images').owlCarousel({
	    loop:true,
	    nav:false,
	    dots: false,
	    items: 1,
	    autoplay:true,
		autoplayTimeout:4000,
		autoWidth:false,
		animateOut: 'fadeOut'
	});

	$('.testimonials-container').owlCarousel({
	    loop:true,
	    nav:true,
	    dots: false,
	    responsiveClass:true,
	    items: 1,
	    autoplay:true,
		autoplayTimeout:7500,
		navText: [
	      "<div class='prev-slide-button'>&nbsp;</div>",
	      "<div class='next-slide-button'>&nbsp;</div>"
	    ],
	    controlsClass: 'ctrl-class-nav-owl',
	    navContainerClass: 'nav-container-owl',
	    responsive:{
	        0:{
	            nav:false,
	        },
	        480:{
	            nav:true
	        }
	    }
	});

	smoothScroll(650);
	
	$('#cit-title,#accenture-title,#freelancer-title').on('click', function(event){
		var detailContainer = $(this).parent().find('.cd-timeline-content-wrapper');
		openJobDetails(detailContainer);
	});
  
	$('#frmContact').on('submit', function(event){
		//Stops default submit
		event.preventDefault();
		
		//Do Ajax call
		$.ajax({
		    url: '//formspree.io/hugohcn@gmail.com', 
		    method: 'POST',
		    data: {message: 
		    		'New website contact:\n\n' +
		    		'Name: ' + $(this).find('#txtFirstName').val() + $(this).find('#txtLastName').val() + '\n\n' +
		    		'E-mail: ' + $(this).find('#txtEmailAdress').val() + '\n\n' +
		    		'Subject: ' + $(this).find('#txtMessageSubject').val() + '\n\n' +
		    		'Message: ' + $(this).find('#txtEmailMessage').val()
			},
		    dataType: 'json',
		    success: function(data){
		    	//Show successfully send message
		    	if(data.success == 'Email sent'){
					$('#frmContact').each (function(){
						this.reset();
						$('.contact-status').text('Thank you - your e-mail has been sent.');
						setTimeout(function() {    
							$('.contact-status').fadeOut(600);
				        }, 5000);
						
					});
		    	}else{
		    		//Mantain the form fields value
		    		$('.contact-status').text('Ooooops! Something was wrong. Try again!');

		    		setTimeout(function() {
						$('.contact-status').fadeOut(600);
			        }, 5000);
		    		
		    	}
		    },
		    error: function(error){
		    	$('.contact-status').text('Ooooops! Something was wrong. Try again!');

		    	setTimeout(function() {
					$('.contact-status').fadeOut(600);
		        }, 5000);
		    },
		    beforeSend: function(e){
		    	$('.contact-status').text('Sending E-mail...');
		    	$('.contact-status').fadeIn('slow');
		    }
		});
	});
	
	
	$.slidebars({
  		siteClose: true,
        disableOver: 600,
        hideControlClasses: true,
        scrollLock: false
  	});
	
	//Timeline jQuery functions
	var $timeLineBlock = $('.cd-timeline-block');
	
	//Hide timeline blocks which are outside the viewport
	$timeLineBlock.each(function(){
		if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
			$(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
		}
	});

	var offset = 500;
    var duration = 500;

	//On scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		if ($(this).scrollTop() > offset) {
			if(!$('.menu-container').hasClass('on-menu-stick-style')){
				$('.menu-container').addClass('on-menu-stick-style');
			}
			
        } else {
        	if($('.menu-container').hasClass('on-menu-stick-style')){
				$('.menu-container').removeClass('on-menu-stick-style');
			}
        }

		$timeLineBlock.each(function(){
			if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
				$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
			}
		});
	});

    
    $('.back-to-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, duration);
        return false;
    });

});

//Smooth Scroll Down
function smoothScroll (duration) {
	'use strict';
	$('a[href^="#"]').on('click', function(event) {

	    var target = $( $(this).attr('href') );

	    if( target.length ) {
	        event.preventDefault();
	        $('html, body').animate({
	            scrollTop: target.offset().top -113
	        }, duration);
	    }
	});
}

function openJobDetails(detailContainer){
	'use strict';
	if($(detailContainer).is(':hidden')){
		$(detailContainer).slideDown(500);	
	}
	else{
		$(detailContainer).slideUp(500);
	}
}