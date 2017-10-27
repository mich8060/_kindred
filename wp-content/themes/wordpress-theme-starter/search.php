<?php get_header(); ?>
<?php get_sidebar(); ?>
	<main role="main">
		<section>
			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>

		</section>
	</main>
<?php get_footer(); ?>