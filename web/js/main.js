function scrollDown() {
    $("html, body").animate({ scrollTop: 700 }, "fast");
}

$("body").on("click", "#scroll", scrollDown);

$(window).scroll(function() {
      if($(window).scrollTop() > 0) {
		  $("body").off("click", "#scroll", scrollDown);
      } else {
		  $("body").on("click", "#scroll", scrollDown);
      }
}); 

/*$(function() {
	var $menu_popup = $('.menu-popup');
 
	$(".menu-triger").click(function(){
		$('body').addClass('body_pointer');		
		$menu_popup.show(0);
		$menu_popup.animate(
			{top: parseInt($menu_popup.css('top'),10) == 0 ? -$menu_popup.outerWidth() : 0}, 
			300
		);
		return false;
	});	
	
	$(".menu-close").click(function(){
		$('body').removeClass('body_pointer');		
		$menu_popup.animate(
			{top: parseInt($menu_popup.css('top'),10) == 0 ? -$menu_popup.outerWidth() : 0}, 
			300, 
			function(){
				$menu_popup.hide(0);
			}
		);
		return false;
	});	
	
	$(document).on('click', function(e){
		if (!$(e.target).closest('.menu-popup').length){
			$('body').removeClass('body_pointer');
			$menu_popup.animate(
				{top: parseInt($menu_popup.css('top'),10) == 0 ? -$menu_popup.outerWidth() : 0}, 
				300, 
				function(){
					$menu_popup.hide(0);
				}
			);
		}
	});
});*/