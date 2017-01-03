jQuery(document).ready(function ($) {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

jQuery(document).ready(function ($) {
$('.container').each(function(){  
	
	var highestBox = 0;
	$('.col4.center.white', this).each(function(){
	
		if($(this).height() > highestBox) 
		   highestBox = $(this).height(); 
	});  
	
	$('.col4.center.white',this).height(highestBox);
	

});
});

jQuery(document).ready(function ($) {
  function fade() {
    $('.animated').each(function() {
      /* Check the location of each desired element */
      var objectBottom = $(this).offset().top + $(this).outerHeight();
      var windowBottom = $(window).scrollTop() + $(window).innerHeight();

      /* If the object is completely visible in the window, fade it in */
      if (objectBottom < windowBottom) {
        if ($(this).css('opacity')==0) {$(this).fadeTo(500,1);}
      } else {
        if ($(this).css('opacity')==1) {$(this).fadeTo(500,0);}
      }
    });
  }
  fade(); //Fade in completely visible elements during page-load
  $(window).scroll(function() {fade();}); //Fade in elements during scroll
});