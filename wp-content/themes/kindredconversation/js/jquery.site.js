$(document).ready(function(e){

	$('body').append('<link rel="stylesheet" type="text/css" href="http://localhost:8888/_kindred/wp-content/themes/kindredconversation/css/mejs.css">');
	$('.mejs-container').css('height','56px');
	
	$(document).on({
		click:function(e){
			e.preventDefault();
			$('body').toggleClass('header--open'); 
		}
	},'.header--menu'); 
	 
	if($('.toggle--options label').length){   
		var locked= false;
		$('.toggle--options label').each(function(i,n){
			level = $('.toggle--options label').length - i;      
			$(this).css('z-index',level);
		});
	} 
	
	$(document).on({
		click:function(e){ 
			$el = $(this);
			$index = (Math.round($el.index() / 2) - 1);
			$('.toggle--sections').hide();
			$('.toggle--sections').eq($index).show();               
			$('.toggle--options label').removeClass('before last');
			$el.prevAll().not('input').addClass('before');
			$el.prevAll("label:first").addClass('last');
			$('.toggle--options label').each(function(i,n){
				level = $('.toggle--options label').length - i;
				if($(this).hasClass('before')){
					$(this).css('z-index',i);
				}else{
					$(this).css('z-index',level);
				}          
				
			});
		}
	},'.toggle--options label');
	
	$(document).on({
		click:function(e){
			e.preventDefault(); 
			$('.tabs--actions a').removeClass('active'); 
			$(this).addClass('active');
			$index = $(this).index();     
			$('.tabs--sections').hide();
			$('.tabs--sections').eq($index).show();
		}
	},'.tabs--actions a');
	
	if($('.step a').length == 1){
		console.log($('.step a').length);
		$('.step').css('background-image','url()');
	}
	
	$(document).on({
		click:function(e){       
			e.preventDefault();  
			_e = $(this).find('.modal');
			_e.addClass('active');
		}
	},'.section--image');
	
	$(document).on({
		click:function(e){        
			e.preventDefault(); 
			e.stopPropagation();      
			_e = $(this).closest('.modal');                     
			_e.find('iframe').attr('src',_e.find('iframe').attr('src'));   ;
			_e.removeClass('active'); 
		}
	},'.modal--close, .modal--overlay');


});