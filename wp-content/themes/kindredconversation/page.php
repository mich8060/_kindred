<?php get_header(); ?>  
<div class="header--spacer"></div>
<?php get_template_part('intro'); ?>
<main role="main">  
                                                                                       
	<div class="main--container md">        
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
	</div>
</main>                                                                          
<?php get_footer(); ?>
