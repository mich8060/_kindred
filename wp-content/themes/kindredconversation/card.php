<div class="post">                      
	<div class="post--body"> 
		<div class="post--categories">
			<?  
				$categories = get_the_category();
				$cat = $categories[0];
				echo '<a href="'.home_url().'/category/'.$cat->slug.'">'.$cat->name.'</a>'; 
			?>
		</div>
		<a href="#" class="post--container" title="<?php echo $post_card->post_title; ?>" data-id="<? echo $post_card->id; ?>">   
			<div class="post--head">
				<div class="post--display">  
					<h2 class="post--title"><?php echo $post_card->post_title; ?></h2>             
					<div class="post--meta">   
						<div class="post--author">By <?php echo $post_card->post_author; ?></div>          
					</div>
			   		<div class="post--meta"> 
						<div class="post--date"><?php the_date('j M, Y'); ?></div>           
					</div>
				</div>
			</div>                                       
			<div class="post--excerpt"><?php the_excerpt(); ?></div>
			<div class="post--action">
				<div class="button inline">Read story</div>
			</div>
			<div class="post--meta">                                      
				<div class="post--comments"><?php comments_number( '0 comments', '1 comments', '% comments' ); ?></div>
				<div class="post--length"><?php echo bac_post_word_count(); ?></div>          
			</div> 
		</a>

	</div> 
</div>