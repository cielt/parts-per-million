(function ($) {
	'use strict';

	var TakingCare = {};

	$(function () {
		var $body = $('body'),
			bodyLayout = $body.data('layout'),
			$globalMenuBtns = $('#global-menu-btn, #close-menu-btn, .menu-overlay'),
			$heroEl, // main marquee el for Waypoint settings
			$marqueeMain = $('.marquee-main'),
			headerWaypoint,
			$scrollDownArrow = $marqueeMain.find('.scroll-to-content-btn'),
			$siteNavBlock = $('.site-nav-block'),
			$siteNavMenu = $('.site-nav-menu');

		// Global Nav Menu
		if ($globalMenuBtns.length) {
			$globalMenuBtns.on('click', function (ev) {
				ev.preventDefault();
				$body.toggleClass('nav-open nav-closed');
				$siteNavBlock.scrollTop(0);
			});
		}

		// Global Nav Links
		if ($siteNavMenu.find('.page_item > a').length) {
			$siteNavMenu.on('click', '.page_item a', function () {
				$body.removeClass('nav-open').addClass('.nav-closed');
			});
		}

		// scroll-down arrow
		$scrollDownArrow.arctic_scroll();

		// Waypoints: waypoint el depends on page
		switch (bodyLayout) {
			case 'ppm-home':
				$heroEl = $('.marquee-main');
				break;
			case 'ppm-page':
			default:
				$heroEl = $('.featured-image-frame');
				break;
		}

		if ($body.hasClass('header-waypoint')) {
			headerWaypoint = new Waypoint({
				element: $heroEl,
				handler: function (direction) {
					if (direction === 'up') {
						$body.removeClass('scroll-down');
					} else {
						$body.addClass('scroll-down');
					}
				},
				offset: function () {
					var heroElHeight = this.element.outerHeight();
					return -(heroElHeight - 1);
				},
			});
		}
	});
})(jQuery);
