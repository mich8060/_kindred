<?php get_header(); ?>
<?php get_sidebar(); ?>
<main role="main">
	<section>
	    <?php 
	        $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
	        $args = array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'paged' => $page,
            );
	        query_posts($args);
	        get_template_part('loop');
	        get_template_part('pagination');
	        wp_reset_query();
	    ?>
	</section>
</main>
<?php get_footer(); ?>
