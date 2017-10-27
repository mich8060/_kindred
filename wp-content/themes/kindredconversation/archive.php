<?php get_header(); ?>
<div class="header--spacer"></div>
<div class="intro">   
	<div class="intro--content">
		<h1 class="intro--headline">Archive</h1> 
		<div class="intro--subheadline"><?php the_archive_title(); ?></div>
	</div>
	<canvas id="stage"></canvas> 
	<script src="<?php echo get_template_directory_uri(); ?>/js/bubbles.js"></script>
</div> 
<main role="main">
	<div class="main--container">
 		<div class="template">
 			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
 		</div>
	</div>
</main>
<?php get_footer(); ?>