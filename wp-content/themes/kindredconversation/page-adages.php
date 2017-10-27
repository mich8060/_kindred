<?php get_header(); ?>  
<div class="header--spacer"></div>
<?php get_template_part('intro'); ?>
<main role="main">  
                                                                                       
	<div class="main--container md">
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>              
		<?php if($paged == 1): ?>        
		<div class="template">
			<?php 

				if(have_posts()): 
					while (have_posts()) : the_post();
						the_content();
					endwhile;
				else:
					_e( 'Sorry, nothing to display.', 'html5blank' );
				endif;
		    ?>
		</div>  
		<?php endif; ?> 
	</div>                           
	<?php if($paged == 1): ?>   
	<div style="height:60px;"></div>
	<div class="post--headline">Explore the New Adages</div> 
 	<div class="post--subheadline">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div> 
	<?php endif; ?>
		<?
			$args = array(                  
				'category_name'	=> 'new-adages',
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
	</div>
</main>                                                                          
<?php get_footer(); ?>
