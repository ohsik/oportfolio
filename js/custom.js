jQuery(document).ready(function ($) {

    //Back to top button on footer & right bottom of page on scrolling
    $(window).scroll(function(){
		if ($(this).scrollTop() > 560) {
			$('.back-to-top').fadeIn("slow");
		} else {
			$('.back-to-top').fadeOut("slow");
		}
	});
    
    $('.back-to-top').click(function() {
        $('html, body').animate({scrollTop : 0}, 1000);
    });
	
	//Wow js
	new WOW().init();

});
