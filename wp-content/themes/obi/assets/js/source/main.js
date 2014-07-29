(function($) {

	var stickyHeaderTop = $('header').offset().top;
	 
	$(window).scroll(function(){
		if( $(window).scrollTop() > stickyHeaderTop ) {
			$('header').css({position: 'fixed', top: '0px'});
		} else {
			$('header').css({position: 'relative', top: '0'});
		}
	});

	$('div.bgParallax').each(function(){
		var $obj = $(this);
	
		$(window).scroll(function() {
			var yPos = -($(window).scrollTop() / $obj.data('speed')); 
	
			var bgpos = 'center '+ yPos + 'top';
	
			$obj.css('background-position', bgpos );
	 
		}); 
	});
	
})(jQuery);
