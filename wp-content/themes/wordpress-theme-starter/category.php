<?php get_header(); ?>
<?php get_sidebar(); ?>
<main role="main">
    <section>
        <h1><?php _e('Categories for ',''); single_cat_title(); ?></h1>
        <?php get_template_part('loop'); ?>
        <?php get_template_part('pagination'); ?>
    </section>
</main>
<?php get_footer(); ?>
