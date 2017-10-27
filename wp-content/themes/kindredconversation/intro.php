<div class="intro">
	<div class="intro--content">
		<h1 class="intro--headline"><?php the_title(); ?></h1> 
		<?php 
		  	$meta = get_post_meta(get_the_ID(),'subheadline');
		  	if(count($meta)){ echo '<h2 class="intro--subheadline">'.$meta[0].'</h2>'; }
		
		  	$action = get_post_meta(get_the_ID(),'action');
		  	if(count($action)){ echo $action[0]; }
		?>                                                            
		
	</div>
	<canvas id="stage"></canvas> 
	<script src="<?php echo get_template_directory_uri(); ?>/js/bubbles.js"></script>
</div>