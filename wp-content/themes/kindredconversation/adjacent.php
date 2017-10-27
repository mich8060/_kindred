<div class="adjacent">
<?php      
	$next = get_adjacent_post(false,'',true);   
	$title = $next->post_title;
	$link = get_permalink($next); 
	if(gettype($next) != 'string'){
		echo '<a href="'.$link.'" class="adjacent--link"><span>Next Post</span>'.$title.'</a>';
	}
	
	$prev = get_adjacent_post(false,'',false); 
	$title = $prev->post_title;
	$link = get_permalink($prev);
	if(gettype($prev) != 'string'){
		echo '<a href="'.$link.'" class="adjacent--link"><span>Previous Post</span>'.$title.'</a>';
	}

?>
</div> 