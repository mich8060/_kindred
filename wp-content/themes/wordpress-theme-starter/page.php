<?php get_header(); ?>
<main role="main">
	<div class="hero"><img src="<?php echo get_template_directory_uri(); ?>/img/hero-1.jpg" alt="" /></div>
	<div class="container">
		<div class="col-lg-12">
			<?php
			
			if( $post->post_parent !== 0 ) {
				$parent_title = get_the_title($post->post_parent);
			    $parent = get_page_by_title($parent_title);
				$parent_link = '<a href="'.$parent->guid.'">'.$parent_title.' /</a> ';
			}
			
			?>
			<h1><?php echo $parent_link; ?><?php the_title(); ?></h1>
			<hr class="line" />
		</div>
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
</main>
<?php get_footer(); ?>
