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
	
})(jQuery);