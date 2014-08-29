(function($) {
	
	var $containerWidth = $(window).width();
    if ($containerWidth <= 800) {
		//('nav#menu').mmenu();
	}
	else {
		
		var stickyHeaderTop = $('header').offset().top;
		$(window).scroll(function(){
			if( $(window).scrollTop() > stickyHeaderTop ) {
				$('header').css({position: 'fixed', top: '0px'});
			} else {
				$('header').css({position: 'relative', top: '0'});
			}
		});
		
		$('a.innovation').click(
			function() {
				$('.tab input[type=radio]#tab-2').attr('checked','checked');
			}
		);

		// About custom  slider
		$(function(){
			
			$("#next .circle-trigger, ul li a.about, ul li a.team").click(function(){
			 //$("#next .circle-trigger p").text($(this).text() == 'Meet the Team' ? 'About obi' : 'Meet the Team');
			 
			 $("#next .circle-trigger p").text(function(_, oldText) {
         		return oldText === 'Meet the Team' ? 'About obi' : 'Meet the Team';
     		});
			 
			  //$("#next .circle-trigger p").text('About OBI');
			  $("#next").toggleClass( "active" );
			});
			
			var $gal = $('#content-slider'),
				$sli = $('#slider'),
				$box = $('div.slide',$sli),
				W    = $gal.width(), // 960
				N    = $box.length,  // 2
				C    = 0;            // a counter
		
			$sli.width(W*N);
	
			$('#next, ul li a.about, ul li a.team, a.abouttrig').click(function(){
				C = (this.id=='next' ? ++C : --C) <0 ? N-1 : C%N;
				$sli.stop().animate({left: -C*W },800);
			});
		});
		
	}

	$('div.bgParallax').each(function(){
		var $obj = $(this);
	
		$(window).scroll(function() {
			var yPos = -($(window).scrollTop() / $obj.data('speed')); 
	
			var bgpos = 'center '+ yPos + 'top';
	
			$obj.css('background-position', bgpos );
	 
		}); 
	});

	// Smooth scroll for anchors
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top + -140
			}, 800);
			return false;
		  }
		}
	  });
	});
		
})(jQuery);
