<?php get_header(); ?>  
<div class="header--spacer"></div>
<?php get_template_part('intro'); ?>
<main role="main">   
		<?
			$args = array(                  
				'category_name'	=> 'articles',
				'post_type' 	=> 'post', 
				'posts_per_page'=> 18, 
				'paged' 		=> $paged
			);
			$wp_query = new WP_Query($args); 
			get_template_part('loop');                   
		?> 
		<div class="step"> 
			<?php 
			 	if($paged < $wp_query->max_num_pages){
					next_posts_link('<span>old</span>', $wp_query->max_num_pages);
				}
				if($paged > 1){
					previous_posts_link('<span class="next">new</span>'); 
				}   
			?>
		</div>
</main>                                                                          
<?php get_footer(); ?>
