<?php if(have_posts()): while (have_posts()) : the_post(); ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<?php 
		    if(has_post_thumbnail()){
		        $image = get_the_post_thumbnail();
                $image = preg_replace('/(<[^>]+) class=".*?"/i', '$1', $image);
                $image = preg_replace('/(<[^>]+) width=".*?"/i', '$1', $image);
                $image = preg_replace('/(<[^>]+) height=".*?"/i', '$1', $image);
                echo $image;
		    } 
		?>
		<h2><?php the_title(); ?></h2>
		<span class="date"><?php the_time('F j, Y'); ?></span>
		<span class="author"><?php the_author_posts_link(); ?></span>
		<span class="comments"><?php if(comments_open(get_the_ID())) comments_popup_link(__( 'Add Comment',''), __( '1 Comment',''), __( '% Comments','')); ?></span>
		<?php the_excerpt(); ?>
		<?php edit_post_link(); ?>
	</a>
<?php endwhile; ?>
<?php else: ?>
    <h2><?php _e('Sorry, nothing to display.',''); ?></h2>
<?php endif; ?>
