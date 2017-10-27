	<footer class="footer" role="contentinfo"> 
    	<div class="footer--container">
    		<div class="footer--contact">
				Are you looking for answers to your relationship questions?
				<a href="#" href="contact" class="button">Contact us</a>
			</div> 
			<div class="footer--mark">
				<img src="<?php echo get_template_directory_uri(); ?>/img/kindred_mark@2x.png" alt="" />
			</div>
			<nav class="footer--nav" role="navigation">
	            <?php 

	            if(has_nav_menu( 'secondary-menu' )){
	                wp_nav_menu(array(
	                    'theme_location'    =>  'secondary-menu',
	                    'container'         =>  false,
	                    'echo'              =>  true,
	                    'items_wrap'        =>  '<ul>%3$s</ul>',
	                    'depth'             =>  0,
	                )); 
	            }

	            ?>
	        </nav>
		    <div class="footer--copyright">2015-<?php echo date('Y'); ?> &copy; KindredConversation.com – All Rights Reserved – The Kindred Conversation</div>
    	</div>
    </footer>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.extend.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slides.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.site.js"></script>
<?php wp_footer(); ?>
</body>
</html>
