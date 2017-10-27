<?php get_header(); ?>  
<div class="header--spacer"></div>  
	<div class="intro tall">   
		<div class="intro--content">
			<div class="intro--headline">Oops! That page can&rsquo;t be found.</div>   
			<div class="intro--subheadline">Search above or try one of the links below:</div>
			<?php 
			
            if(has_nav_menu( 'primary-menu' )){
                wp_nav_menu(array(
                    'theme_location'    =>  'primary-menu',
                    'container'         =>  false,
                    'echo'              =>  true,
                    'items_wrap'        =>  '<ul>%3$s</ul>',
                    'depth'             =>  0,
                )); 
            }

            ?>
		</div>
		<canvas id="stage"></canvas> 
		<script src="<?php echo get_template_directory_uri(); ?>/js/bubbles.js"></script>
	</div>
<?php get_footer(); ?>