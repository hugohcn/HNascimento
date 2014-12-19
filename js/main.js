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

	//On form submit...
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
					});
		    	}else{
		    		//Mantain the form fields value

		    	}
		    },
		    error: function(error){
		    	console.log(error);
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