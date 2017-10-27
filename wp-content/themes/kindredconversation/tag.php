<?php get_header(); ?>
<?php get_sidebar(); ?>
	<main role="main">
		<section>
			<h1><?php _e('Tag Archive:',''); echo single_tag_title('', false); ?></h1>
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</section>
	</main>
<?php get_footer(); ?>
