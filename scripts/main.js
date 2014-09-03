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

function toggleMenu(){
	$('.menu-link').click(function(){
		$('#menu-main-nav').slideToggle('fast');
	});
}

function stupidLinkBorderImageThing(){
	$('a').has('img').addClass('no-border-bottom');
}

function addPlaceholder(target, text) {
	$(target).attr('placeholder', text);
}

$(document).ready(function(){
	back2Top();
	toggleMenu();
	stupidLinkBorderImageThing();
	addPlaceholder('#mc_mv_EMAIL', 'Email');
});