(function($){
	$(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});
})(jQuery);

	  
jQuery(function($) {
$('.navbar .dropdown').hover(function() {
	$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
	
	}, function() {
		$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
	
	});
	
	$('.navbar .dropdown > a').click(function(){
		location.href = this.href;
	});

});