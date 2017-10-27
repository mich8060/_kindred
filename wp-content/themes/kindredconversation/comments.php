<? if(post_password_required()) return; ?>

<div class="comments">
	<div class="comments--container">
		<h2 class="comments--title"><?php comments_number( 'Leave a comment', 'Comments (1)', 'Comments (%)' ); ?></h2> 
		<?php      
			$commenter = wp_get_current_commenter();
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );
			$fields =  array(
				'author' =>
		    		'<input id="author" name="author" placeholder="Your name" type="text" value="' . esc_attr( $commenter['comment_author'] ).'" size="30"' . $aria_req . ' />',
				'email' =>
		    		'<input id="email" name="email" type="email" placeholder="Email Address" value="' . esc_attr(  $commenter['comment_author_email'] ).'" size="30"' . $aria_req . ' />',
			);                  
			$args = array(
			  'id_form'           	=> 'comments--form',
			  'class_form'        	=> 'comments--form',
			  'id_submit'         	=> 'comments--submit',
			  'class_submit'      	=> 'button black inline',
			  'name_submit'       	=> 'submit',
			  'title_reply'       	=> __(''),
			  'title_reply_to'    	=> __(''),
			  'cancel_reply_link' 	=> __('Cancel'),
			  'title_reply_before'  => '<div class="comments--cancel">',
			  'title_reply_after'   => '</div>',
			  'cancel_reply_before' => '',
			  'cancel_reply_after'  => '',
			  'label_submit'      	=> __('Post Comment...'),
			  'format'            	=> 'html5', 
			  'must_log_in'			=> '',
			  'logged_in_as'		=> '', 
			  'comment_notes_before'=> '',  
			  'fields' 				=> apply_filters( 'comment_form_default_fields', $fields ),
			  'comment_field' 	  	=> '<div class="comments--textarea"><textarea id="comment" name="comment" aria-required="true" placeholder="Your comment"></textarea></div>', 
			);
			comment_form($args);
		?> 
		<?php if(have_comments()) : ?>                                                                                      
			<ul class="comments--list">
			    <?php
			 		$args = array(                 
						'style'             => 'ul',
						'callback'          => 'comments_list',   
						'type'              => 'comment', 
						'page'              => '',
						'per_page'          => '',
						'avatar_size'       => 80,
					);
					wp_list_comments($args);
				?>
			</ul>
			<?php
			    // Are there comments to navigate through?
			    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
			?>
			<nav class="navigation comment-navigation" role="navigation">
			    <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation'); ?></h1>
			    <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
			    <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
			</nav><!-- .comment-navigation -->
			<?php if ( ! comments_open() && get_comments_number() ) : ?>
			<p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
			<?php endif; ?>
			<?php endif; // Check for comment navigation ?>
		<?php endif; ?>	
	</div>
</div>