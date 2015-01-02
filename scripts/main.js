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

function refillsVerticalAccordion(){

	$('.js-vertical-tab-content').hide();
	$('.js-vertical-tab-content:first').show();

	/* if in tab mode */
	$('.js-vertical-tab').click(function(event) {
		event.preventDefault();

		$('.js-vertical-tab-content').hide();
		var activeTab = $(this).attr('rel');
		$('#'+activeTab).show();

		$('.js-vertical-tab').removeClass('is-active');
		$(this).addClass('is-active');

		$('.js-vertical-tab-accordion-heading').removeClass('is-active');
		$('.js-vertical-tab-accordion-heading[rel^="'+activeTab+'"]').addClass('is-active');
	});

	/* if in accordion mode */
	$('.js-vertical-tab-accordion-heading').click(function(event) {
		event.preventDefault();

		$('.js-vertical-tab-content').hide();
		var accordionActiveTab = $(this).attr('rel');
		$('#'+accordionActiveTab).show();

		$('.js-vertical-tab-accordion-heading').removeClass('is-active');
		$(this).addClass('is-active');

		$('.js-vertical-tab').removeClass('is-active');
		$('.js-vertical-tab[rel^="'+accordionActiveTab+'"]').addClass('is-active');
	});
}


function refillsExpander() {
  $('.js-expander-trigger').click(function(){
    $(this).parent().next().slideToggle("expander-hidden");
    $(this).find(".expander-toggle-arrow").toggleClass("open")
  });
}

$(document).ready(function(){
	back2Top();
	toggleMenu();
	stupidLinkBorderImageThing();
	addPlaceholder('#mc_mv_EMAIL', 'Email');
	refillsVerticalAccordion();
	refillsExpander();
});
