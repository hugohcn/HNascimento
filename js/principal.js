/* Author: Hugo Nascimento
 * Date: 16/12/2014
 * Description: Main JS Project File.
 */

//Document Ready
$(function(){
	smoothScroll(650);

	$('.know-more').on('click', function(event){
		var descBox = $(this).parent().parent().find('.timeline-content');

		if($(descBox).is(':hidden')) {
			//controlling event button
			$(this).text('[-]');

			//Slide Down
			$(descBox).slideDown(400);	
		}else{
			//controlling event button
			$(this).text('[+]');

			//Slide Up
			$(descBox).slideUp(400);
		}
		
	});

	//On Contact Form Submit...
	$('#frmContact').on('submit', function(event){
		//Stops default submit
		event.preventDefault();
		
		//Do Ajax call
		$.ajax({
		    url: "//formspree.io/hugohcn@gmail.com", 
		    method: "POST",
		    data: {message: 
		    		"New website contact:\n\n" + 
		    		"Name: " + $(this).find("#txtFirstName").val() + $(this).find("#txtLastName").val() + "\n\n" +
		    		"E-mail: " + $(this).find("#txtEmailAdress").val() + "\n\n" +
		    		"Subject: " + $(this).find("#txtMessageSubject").val() + "\n\n" +
		    		"Message: " + $(this).find("#txtEmailMessage").val()
			},
		    dataType: "json",
		    success: function(data){
		    	//Show successfully send message
		    	if(data.success = "Email sent"){
					$('#frmContact').each (function(){
						this.reset();
						$('.contact-status').text("Thank you - your e-mail has been sent.");
						setTimeout(function() {    
							$('.contact-status').fadeOut(600);
				        }, 5000);
						
					});
		    	}else{
		    		//Mantain the form fields value
		    		$('.contact-status').text("Ooooops! Something war wrong. Try again!");

		    		setTimeout(function() {
						$('.contact-status').fadeOut(600);
			        }, 5000);
		    		
		    	}
		    },
		    error: function(error){
		    	$('.contact-status').text("Ooooops! Something war wrong. Try again!");

		    	setTimeout(function() {
					$('.contact-status').fadeOut(600);
		        }, 5000);
		    },
		    beforeSend: function(e){
		    	$('.contact-status').text("Sending E-mail...");
		    	$('.contact-status').fadeIn('slow');
		    }
		});
	});

	$('.project-details-link').on('click', function(event){
		event.preventDefault();
		$.pgwModal({
			target: '#project-detail-box',
			titleBar: false,
			closable: true,
			maxWidth: 1170,
		});
	});

	//Request project data, ehwn the modal start opening...
	$(document).bind('PgwModal::Open', function() {
	    //Request details
	    //Create image carousel
	    var owl = $(".project-images");

		owl.owlCarousel({
			responsive : {
				320: {
					items : 1
				},
				500: {
					items: 2
				},
				750 : {
					items: 3
				},
				940 : {
					items: 1
				}
			}
	  	});
	});

	//Portfolio Carousel
	var owl = $("#projects-container");

	owl.owlCarousel({
		items : 4,
		responsive : {
			320: {
				items : 1
			},
			500: {
				items: 2
			},
			750 : {
				items: 3
			},
			1000 : {
				items: 4
			}
		}
  	});

	//Mobile Menu
  	$.slidebars();
	
	//Timeline jQuery functions
	var $timeline_block = $('.cd-timeline-block');

	//Hide timeline blocks which are outside the viewport
	$timeline_block.each(function(){
		if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
			$(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
		}
	});

	//On scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		$timeline_block.each(function(){
			if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
				$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
			}
		});
	});
});


//Smooth Scroll Down
function smoothScroll (duration) {
	$('a[href^="#"]').on('click', function(event) {

	    var target = $( $(this).attr('href') );

	    if( target.length ) {
	        event.preventDefault();
	        $('html, body').animate({
	            scrollTop: target.offset().top -50
	        }, duration);
	    }
	});
}