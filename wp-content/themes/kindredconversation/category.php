<?php get_header(); ?>  
<div class="header--spacer"></div>
<?php $category = get_the_category()[0]->slug; ?>  
<div class="intro">   
	<div class="intro--content"> 
		<div class="intro--title">Category</div>
		<div class="intro--headline">                   
			<?php echo get_the_category()[0]->name; ?>
		</div>
	</div>
	<canvas id="stage"></canvas> 
	<script src="<?php echo get_template_directory_uri(); ?>/js/bubbles.js"></script>
</div>
<main role="main">   
		<?                                                                             
			$args = array(                  
				'category_name'	=> $category,
				'post_type' 	=> 'post', 
				'posts_per_page'=> 18, 
				'paged' 		=> $paged
			);
			$wp_query = new WP_Query($args); 
			get_template_part('loop');         
			next_posts_link( '&larr; Older posts', $wp_query ->max_num_pages);
			previous_posts_link( 'Newer posts &rarr;' );
		?> 
</main>                                                                          
<?php get_footer(); ?>