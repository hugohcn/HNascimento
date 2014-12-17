/* Author: Hugo Nascimento
 * Date: 16/12/2014
 * Description: Main JS Project File.
 */

//Document Ready
$(function(){
	smoothScroll(650);
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