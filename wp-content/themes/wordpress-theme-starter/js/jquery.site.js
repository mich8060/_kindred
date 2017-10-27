$(document).ready(function(e){

	$(".home-gallery-slides").responsiveSlides({
		auto: true,
		namespace: "home-gallery-slides",
		nav: true,
		pager: true, 
		pause: true,
		speed: 500,
		timeout: 4000
	});
	
	$(document).on({
		click:function(e){
			$('body').toggleClass('open');
		}
	},'header .menu'); 
	
	$(document).on({
		click:function(e){
			$('body').toggleClass('open');
		}
	},'.sub-menu a');
	
	$(document).on({
		click:function(e){
			var target = $(this.hash);
	      		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      	if(target.length){
	        	$('html, body').animate({
	          		scrollTop: target.offset().top
	        	}, 1000);
				e.preventDefault();
	        	return false;
	      	}
		}
	},'.sub-menu a');
	
	$(document).on({
		click:function(e){         
			e.preventDefault(); 
			$el = $(this);                   
			$tag = $el.attr('data')+'_detail';             
			$item = $('[data="'+$tag+'"]'); 
			$('.about-management-team').css('margin-bottom','auto');
			$('.work_management_bios').hide();
			$item.show();
			$height = $item.innerHeight();    
			$el.css('margin-bottom',($height+20)+'px');
			$('html, body').animate({
				scrollTop: $el.offset().top - 70
			}, 500);
		}
	},'.about-management-team');
	
	$(document).on({
		click:function(e){   
			e.preventDefault(); 
			e.stopPropagation();
			$('.about-management-team').css('margin-bottom','auto');
			$('.work_management_bios').hide();
			console.log('close');
		}
	},'.work_management_close');
    
	/*

    $(window).scroll( function(){                       
        $('.fade_in').each( function(i){
            var bottom_of_object = $(this).offset().top + ($(this).outerHeight() / 4);
            var bottom_of_window = $(window).scrollTop() + $(window).height();    
            if( bottom_of_window > bottom_of_object){  
                $(this).animate({'opacity':'1'},500);     
            } 
        });
    });
	    
	*/
	
	$.fn.aboutColumns = function(){
		if($(window).width() > 600){    
			var maxHeight = -1;
		 	$('.work_examples_column').each(function(){
			     maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
			});

			$('.work_examples_column').each(function() {
		  		$(this).height(maxHeight);
			});
		}
	}
	
	$(this).aboutColumns();
	
	$(window).on({
		resize:function(e){
			$(this).aboutColumns(); 
		},
		scroll:function(e){
			$scroll = $(window).scrollTop();
			if($scroll > 40){
				$('header').addClass('collapsed');
			}else {
				$('header').removeClass('collapsed');
			}
		}
	});
});