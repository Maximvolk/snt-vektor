(function($) {
	// Move the Offcanvas Toggle button in the Header
	$(document).ready(function() {
		$("div.g-offcanvas-toggle:not(.offcanvas-toggle-particle)").prependTo($("#g-navigation"));
	});
})(jQuery);
