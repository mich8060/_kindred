(function($){
	$.fn.slowEach = function(callback,interval,complete){
		var array = this;
		if(!array.length) return;
		var i = 0;
		next();
		function next(){
			if( callback.call( array[i], i, array[i] ) !== false ){
				if( ++i < array.length ){
					setTimeout(next, interval);
				}else{
					if(complete){
						complete();
					}
				}
			}
		}
	};
	$.fn.panels = function(){
		var settings = {
			current: 0,
			distance: 0,
			direction: null,
			height: $(window).height(),
			items: $(this).find('li'),
			offset: $(this).offset().top,
			panels: $(this),
			scroll: 0
		}
		settings.panels.css('height',settings.height * settings.items.length);
		settings.items.css('height',settings.height).each(function(index){
			$(this).css('z-index',settings.items.length - index);
		});
		$(window).on('scroll',function(){
			settings.scroll = $(this).scrollTop();
			if(settings.scroll >= settings.offset){
				settings.direction = (settings.scroll > settings.distance) ? "down" : "up";
				settings.distance = settings.scroll;
				settings.current = parseInt((settings.scroll - settings.offset) / settings.height);
				if(settings.direction == "down"){
					$item = settings.items.eq(settings.current);
					if(!$item.hasClass('panels-neutral') && !$item.is("li:last")){
						$item.removeClass('panels-scroll');
						$item.addClass('panels-static');
					}
				}else{
					$item = settings.items.eq(settings.current + 1);
					if(!$item.hasClass('panels-neutral') && !$item.is("li:last")){
						$item.addClass('panels-scroll');
						$item.removeClass('panels-static');
					}
				}
			}
		});
	}
})(jQuery);