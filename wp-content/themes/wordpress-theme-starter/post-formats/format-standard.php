<?php get_header(); ?>
<main role="main">
    <div class="container-sm">
        <section>
    	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    		<?php 
    		    if(has_post_thumbnail()){
    		        $image = get_the_post_thumbnail();
                    $image = preg_replace('/(<[^>]+) class=".*?"/i', '$1', $image);
                    $image = preg_replace('/(<[^>]+) width=".*?"/i', '$1', $image);
                    $image = preg_replace('/(<[^>]+) height=".*?"/i', '$1', $image);
                    echo $image;
    		    } 
    		?>
            <h1>Standard Format</h1>
    		<h1><?php the_title(); ?></h1>
    		<span class="date"><?php the_time('F j, Y'); ?></span>
    		<span class="author"><?php _e('By',''); ?> <?php the_author_posts_link(); ?></span>
    		<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Add Comment',''), __( '1 Comment',''), __('% Comments','')); ?></span>
    		<?php the_content(); ?>
    		<?php the_tags(__( 'Tags: ','')); ?>
    		<p><?php the_category(', ');?></p>
    		<?php edit_post_link(); ?>
    		<?php comments_template(); ?>
    	<?php endwhile; ?>
    	<?php else: ?>
            <h1><?php _e('Sorry, nothing to display.',''); ?></h1>
    	<?php endif; ?>
    	</section>
    </div>
</main>
<?php get_footer(); ?>