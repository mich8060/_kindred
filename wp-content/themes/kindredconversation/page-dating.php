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
			<div class="tabs--title">Separating dating sessions</div>
			<p>Many of the core principals are the same, but dating after divorce also focuses on making sure you don’t make the same mistakes over again. The dating sessions build upon each other, so we recommend reading each session in the order outlined below.</p>
			<div class="tabs--actions">
				<a href="https://thekindredconversation.com/section-home-dating/dating-nbm/" class="active">Dating</a> 
				<a href="https://thekindredconversation.com/section-home-dating/dating-after-divorce/">Dating after divorce</a>
			</div>
		</div>
	</div>	        
    <div style="background:#fff;padding-top:40px;">      
		<div class="main--container">   
			<div class="tabs--sections"> 
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
							<input type="radio" name="toggle--options--sessions" id="toggle--options--008" />
							<label for="toggle--options--008"><span>Session</span> 08</label> 
						</div>
					</div>
				</div>
				<div class="toggle--sections first" data-toggle="1"> 
					<div class="toggle--content">
						<h3>Never been married?</h3>
						<p>Start by taking the <a href="<? get_site_url(); ?>_kendred/2015/03/31/keirsey-temperament-sorter" target="_blank">Keirsey Temperament Sorter</a> to discover your personality type.</p>  
					</div>  
			        <?                
						$args = array(
						  'post_name__in'	=> ['rbps-really-big-problems','differences-between-men-and-women','3-rules-knowing-thyself'], 
						);
						$wp_query = new WP_Query($args); 
						get_template_part('loop');
			 			wp_reset_query();   

			        ?>
		    	</div>
				<div class="toggle--sections" data-toggle="2">
					<?                
						$args = array(
						  'post_name__in'	=> ['healthy-relationship-look-like','boundaries-end-begin'], 
						);
						$wp_query = new WP_Query($args); 
						get_template_part('loop');
			 			wp_reset_query();   

			        ?>
				</div>  
				<div class="toggle--sections" data-toggle="3">  
					<?                
						$args = array(
						  'post_name__in'	=> ['understanding-relationship-fears-conquer'], 
						);
						$wp_query = new WP_Query($args); 
						get_template_part('loop');
			 			wp_reset_query();   

			        ?>
				</div> 
				<div class="toggle--sections" data-toggle="4">
					<?                
						$args = array(
						  'post_name__in'	=> ['dont-sell-bill-goods'], 
						);
						$wp_query = new WP_Query($args); 
						get_template_part('loop');
			 			wp_reset_query();   

			        ?>                                                                                   
				</div>
				<div class="toggle--sections" data-toggle="5">
					<?                
						$args = array(
						  'post_name__in'	=> ['set-boundaries-start-speaking-truth'], 
						);
						$wp_query = new WP_Query($args); 
						get_template_part('loop');
			 			wp_reset_query();   

			        ?>
				</div>
				<div class="toggle--sections" data-toggle="6">   
					<?                
						$args = array(
						  'post_name__in'	=> ['life-is-a-conversation'], 
						);
						$wp_query = new WP_Query($args); 
						get_template_part('loop');
			 			wp_reset_query();   

			        ?>

				</div>                     
				<div class="toggle--sections" data-toggle="7">  
					<?                
						$args = array(
						  'post_name__in'	=> ['avoid-5-biggest-mistakes-can-make-first-date','slow-steady-wins-race'], 
						);
						$wp_query = new WP_Query($args); 
						get_template_part('loop');
			 			wp_reset_query();   

			        ?>
				</div>
				<div class="toggle--sections" data-toggle="8"> 
					<?                
						$args = array(
						  'post_name__in'	=> ['out-with-the-old-in-with-the-new'], 
						);
						$wp_query = new WP_Query($args); 
						get_template_part('loop');
			 			wp_reset_query();   

			        ?>                                                                                                              		
				</div>
		    	
			</div> 
			<div class="tabs--sections">
				<div class="toggle-sections" data-toggle="1">
					<div class="toggle--content">   
						<div style="text-align:center;"><h3>** COMING SOON ** </h3g></div>
					</div>
				</div>                                                              
			</div> 
		</div>
	</div>
	<div class="line"></div> 
	<?php endif; ?>
	<div class="post--latest"> 
		<?php if($paged == 1): ?>
			<div class="post--headline">Recent dating articles</div> 
			<div class="post--subheadline">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
			<?php endif; ?>
			<?
				$args = array(                  
					'category_name'	=> 'dating',
					'post_type' 	=> 'post', 
					'posts_per_page'=> 18, 
					'paged' 		=> $paged
				);
				$wp_query = new WP_Query($args); 
				get_template_part('loop');  
				                                                            
				                                     
			?> 
			<div class="step"> 
				<?php 
				 	if($paged < $wp_query->max_num_pages){ next_posts_link('<span>old</span>', $wp_query->max_num_pages); }
					if($paged > 1){ previous_posts_link('<span class="next">new</span>'); }   
				?>
			</div>                                  
		</div>                                
	</div>  
</main>
<?php get_footer(); ?>