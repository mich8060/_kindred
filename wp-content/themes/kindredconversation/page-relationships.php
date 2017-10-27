<?php get_header(); ?>  
<div class="header--spacer"></div>  
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
<?php get_template_part('intro'); ?> 
<main class="main" role="main">

	<div class="main--container md">                                               
		<?php if($paged == 1): ?>
			<div class="template">
				<?php 

					if(have_posts()): 
						while (have_posts()) : the_post();
							the_content();
						endwhile;
					else:
						_e( 'Sorry, nothing to display.', 'html5blank' );
					endif;
			    ?>
			</div>
		<?php endif; ?>
	</div> 
	<?php if($paged == 1): ?>  
	<div class="tabs">
		<div class="tabs--container">
			<div class="tabs--title">In a relationship?</div>
			<p>If you are familiar with our dating sessions, many of the core principals will be familiar to you. The relationship sessions build upon each other, so we recommend reading each session in the order outlined below.</p>

		</div>
	</div> 
	<div class="main--container"> 
		<div class="toggle">
			<div class="toggle--container">
				<div class="toggle--options">  
					<input type="radio" name="toggle--options--sessions" id="toggle--options--001" checked />
					<label for="toggle--options--001"><span>Session</span> 01</label>
					<input type="radio" name="toggle--options--sessions" id="toggle--options--002" />
					<label for="toggle--options--002"><span>Session</span> 02</label>
					<input type="radio" name="toggle--options--sessions" id="toggle--options--003" />
					<label for="toggle--options--003"><span>Session</span> 03</label>
					<input type="radio" name="toggle--options--sessions" id="toggle--options--004" />
					<label for="toggle--options--004"><span>Session</span> 04</label>
					<input type="radio" name="toggle--options--sessions" id="toggle--options--005" />
					<label for="toggle--options--005"><span>Session</span> 05</label>
					<input type="radio" name="toggle--options--sessions" id="toggle--options--006" />
					<label for="toggle--options--006"><span>Session</span> 06</label>
					<input type="radio" name="toggle--options--sessions" id="toggle--options--007" />
					<label for="toggle--options--007"><span>Session</span> 07</label>
				</div>
			</div>
		</div>
		<div class="toggle--sections first" data-toggle="1">  
	        <?                
				$args = array(
				  'order' => 'ASC',
				  'post_name__in'	=> ['healthy-relationship-look-like','boundaries-end-begin','activity-partner-awareness-quiz'], 
				);
				$wp_query = new WP_Query($args); 
				get_template_part('loop');
	 			wp_reset_query();   

	        ?>
    	</div>
		<div class="toggle--sections" data-toggle="2">  
	        <?                
				$args = array(  
				  'order' => 'ASC',       
				  'post_name__in'	=> ['keirsey-temperament-sorter','3-rules-knowing-thyself','understanding-unique-personality-type'], 
				);
				$wp_query = new WP_Query($args); 
				get_template_part('loop');
	 			wp_reset_query();   

	        ?>
    	</div>
		<div class="toggle--sections" data-toggle="3">  
	        <?                
				$args = array(            
				  'post_name__in'	=> ['understanding-communication-style','life-is-a-conversation'], 
				);
				$wp_query = new WP_Query($args); 
				get_template_part('loop');
	 			wp_reset_query();   

	        ?>
    	</div>   
		<div class="toggle--sections" data-toggle="4">  
	        <?                
				$args = array(            
				  'post_name__in'	=> ['how-to-set-your-boundaries'], 
				);
				$wp_query = new WP_Query($args); 
				get_template_part('loop');
	 			wp_reset_query();   

	        ?>
    	</div>
		<div class="toggle--sections" data-toggle="5">  
	        <?                
				$args = array(            
				  'post_name__in'	=> ['defining-communicating-dream-relationship'], 
				);
				$wp_query = new WP_Query($args); 
				get_template_part('loop');
	 			wp_reset_query();   

	        ?>
    	</div>   
		<div class="toggle--sections" data-toggle="6">  
	        <?                
				$args = array(            
				  'post_name__in'	=> ['red-flags-knowing-time-break'], 
				);
				$wp_query = new WP_Query($args); 
				get_template_part('loop');
	 			wp_reset_query();   

	        ?>
    	</div>  
		<div class="toggle--sections" data-toggle="7">  
	        <?                
				$args = array(            
				  'post_name__in'	=> ['nurturing-and-cultivation'], 
				);
				$wp_query = new WP_Query($args); 
				get_template_part('loop');
	 			wp_reset_query();   

	        ?>
    	</div> 
		<div style="height:100px;"></div>  
	</div>
		<div class="line"></div> 
		<?php endif; ?>
		<div class="post--latest"> 
			<?php if($paged == 1): ?>
			<div class="post--headline">Recent relationship articles</div> 
			<div class="post--subheadline">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
			<?php endif; ?>
			<?
				$args = array(                  
					'category_name'	=> 'relationships',
					'post_type' 	=> 'post', 
					'posts_per_page'=> 18, 
					'paged' 		=> $paged
				);
				$wp_query = new WP_Query($args); 
				get_template_part('loop');  
				                                                            
				                                     
			?> 
			<div class="step"> 
				<?php 
				 	if($paged < $wp_query->max_num_pages){
						next_posts_link('<span>old</span>', $wp_query->max_num_pages);
					}
					if($paged > 1){
						previous_posts_link('<span class="next">new</span>'); 
					}   
				?>
			</div>                                  
		</div>                                
	</div>  
</main>
<?php get_footer(); ?>