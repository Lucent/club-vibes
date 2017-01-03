// Navigation Smooth Dropdown
jQuery(function(){
	jQuery('ul.sf-menu').superfish();
});
jQuery(function(){
	jQuery('ul.menu').superfish();
});

// Mobile Navigation
jQuery(document).ready(function ($) {
$('#mobnav-btn').click(
function () {
    $('.sf-menu').toggleClass("xactive");
});
});

// Smooth Scroll to Top button
jQuery(document).ready(function ($) {
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});