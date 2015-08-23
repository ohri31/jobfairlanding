$(document).ready(function() {
    var offset=250,
    scrollDuration=300; 
        $(window).scroll(function() {
	    if ($(this).scrollTop() > offset) {
                $('.top').fadeIn(500);
                } else {
		$('.top').fadeOut(500); 
		}
	});
	$('.top').click(function(event) {
	event.preventDefault();
            $('html, body').animate({
	        scrollTop: 0}, scrollDuration);
                })
	});