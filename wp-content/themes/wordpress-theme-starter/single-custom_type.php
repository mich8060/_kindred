<?php
/*
 * CUSTOM POST TYPE TEMPLATE
 *
 * This is the custom post type post template. If you edit the post type name, you've got
 * to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is "register_post_type( 'bookmarks')",
 * then your single template should be single-bookmarks.php
 *
 * Be aware that you should rename 'custom_cat' and 'custom_tag' to the appropiate custom
 * category and taxonomy slugs, or this template will not finish to load properly.
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
<main role="main">
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
</main>
<?php get_footer(); ?>