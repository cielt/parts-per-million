// Arctic Scroll by Paul Adam Davis
// https://github.com/PaulAdamDavis/Arctic-Scroll
(function ($) {
	$.fn.arctic_scroll = function (options) {
		var defaults = {
				elem: $(this),
				speed: 500,
			},
			allOptions = $.extend(defaults, options);

		allOptions.elem.click(function (event) {
			event.preventDefault();
			var $this = $(this),
				$htmlBody = $('html, body'),
				offset = $this.attr('data-offset') ? $this.attr('data-offset') : false,
				position = $this.attr('data-position')
					? $this.attr('data-position')
					: false,
				toMove;

			if (offset) {
				toMove = parseInt(offset);
				$htmlBody
					.stop(true, false)
					.animate(
						{ scrollTop: $(this.hash).offset().top + toMove },
						allOptions.speed
					);
			} else if (position) {
				toMove = parseInt(position);
				$htmlBody
					.stop(true, false)
					.animate({ scrollTop: toMove }, allOptions.speed);
			} else {
				$htmlBody
					.stop(true, false)
					.animate({ scrollTop: $(this.hash).offset().top }, allOptions.speed);
			}
		});
	};
})(jQuery);
