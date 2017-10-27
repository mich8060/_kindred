<?php get_header(); ?>
<main role="main">
    <section>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <h1>Quote Format</h1>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	<?php endwhile; ?>
	<?php else: ?>
        <h1><?php _e('Sorry, nothing to display.',''); ?></h1>
	<?php endif; ?>
	</section>
</main>
<?php get_footer(); ?>