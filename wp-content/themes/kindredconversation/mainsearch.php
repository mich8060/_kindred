<form method="get" action="<?php echo home_url(); ?>" role="search" class="search">   
	<input type="search" name="s" placeholder="<?php _e('Search',''); ?>" value="<?php the_search_query(); ?>" autocomplete="off" />
	<button type="submit" class="search--submit"></button>         
</form>                                                                                        
