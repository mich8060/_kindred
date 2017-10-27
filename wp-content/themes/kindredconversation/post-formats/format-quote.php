<?php get_header(); ?> 
<div class="header--spacer"></div>
<main class="main" role="main">   
	<?php if (have_posts()): while (have_posts()) : the_post(); ?> 
	<div class="article">
		<div class="article--edit"><?php edit_post_link(); ?></div>
		<div class="article--head">
	    	<div class="article--container">
 				<?php the_post_thumbnail(); ?>                       
				<?php get_template_part('social'); ?> 
	    	</div>
		</div>
	    <div class="article--body">
	        <section>            
				<h1><?php the_title(); ?></h1>
				<div class="article--meta inline">
		    		<span class="date"><?php the_time('F j, Y'); ?></span>
		    		<span class="author"><?php _e('By',''); ?> <? the_author_posts_link(); ?></span>
				</div>                                                                   
	    		<?php the_content(); ?>
	    		<?php the_tags('<div class="tag">','','</div>'); ?> 
	    	<?php endwhile; ?>
	    	</section>
			<?php get_template_part('adjacent'); ?>
	    </div>                                   	
		<?php comments_template(); ?>
	</div>
	<?php endif; ?>
</main>
<?php get_footer(); ?>