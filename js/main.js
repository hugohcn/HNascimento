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
			$(descBox).slideDown('slow');	
		}else{
			//controlling event button
			$(this).text('[+]');

			//Slide Up
			$(descBox).slideUp('slow');
		}
		
	});

	//On Contact Form Submit...
	$('#frmContact').on('submit', function(event){
		//Stops default submit
		event.preventDefault();
		
		//Do Ajax call
		$.ajax({
		    url: "//forms.brace.io/hugohcn@gmail.com", 
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
		    	console.log(data);
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
		    		$('.contact-status').text("Ooooops! Something war wrong. Try again!!");

		    		setTimeout(function() {
					$('.contact-status').fadeOut(600);
			        }, 5000);
		    		
		    	}
		    },
		    error: function(error){
		    	console.log(error);
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
	    //ajax web api request...
	});

	//Carousel
	
	var owl = $("#projects-container");

	owl.owlCarousel({
		items : 4,
		responsive : {
			320: {
				dots : true,
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