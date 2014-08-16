'use strict';
/*jshint undef:false */
/*jshint unused:false */
/*jshint latedef:false */

//  back to top link

var scrollTop, elementOffset, distance;

function back2Top(){
	$(document).scroll(function(){
		scrollTop     = $(window).scrollTop();
        elementOffset = $('.wrapper').offset().top;
        distance      = (elementOffset - scrollTop);

        if(distance < -200){
			$('.back-to-top').fadeIn();
        } else {
			$('.back-to-top').fadeOut('fast');
        }
	});

	$('.back-to-top').click(function(){
		$(window).scrollTop(0);
	});
}

$(document).ready(function(){
	back2Top();
});