<div class="post--wrapper">
<?php if(have_posts()): while (have_posts()) : the_post(); ?>   
	<div class="post">
		<? $post_type = get_post_type(); ?>
		<div class="post--body">
			<div class="post--categories">
				<?  
					$categories = get_the_category();
					$cat = $categories[0];
					echo '<a href="'.home_url().'/category/'.$cat->slug.'">'.$cat->name.'</a>'; 
				?>
			</div>
			<a href="<?php the_permalink(); ?>" class="post--container" title="<?php the_title(); ?>" data-id="<? echo the_ID(); ?>">   
				<div class="post--head">
					<div class="post--display">  
						<h2 class="post--title"><?php the_title(); ?></h2>             
						<div class="post--meta">   
							<div class="post--author">By <?php the_author(); ?></div>          
						</div>
				   		<div class="post--meta"> 
							<div class="post--date"><?php the_date('j M, Y'); ?></div>           
						</div>
					</div>
				</div>                                       
				<div class="post--excerpt"><?php the_excerpt(); ?></div>
				<div class="post--action">
					<div class="button underline">Read story</div>
				</div>
				<div class="post--meta">                                      
					<div class="post--comments"><?php comments_number( '0 comments', '1 comments', '% comments' ); ?></div>
					<div class="post--length"><?php echo bac_post_word_count(); ?></div>          
				</div> 
			</a>

		</div> 
	</div>        
<?php endwhile; ?>
<?php else: ?>
    <h2><?php _e('Sorry, nothing to display.',''); ?></h2>
<?php endif; ?> 
</div>
