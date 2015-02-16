jQuery(document).ready(function($){
	if (!Modernizr.svg) {
		$("img").each(function() {
			if ($(this).data("fallback")){
				$(this).attr("src", $(this).data("fallback"));
			}
		});
	}
});