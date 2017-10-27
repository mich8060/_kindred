<?php 

global $wp_registered_sidebars, $wp_registered_widgets; 

/*
	Kindred Conversation: Custom Functions
	By: Michael Stevens - October 6, 2017	
*/ 

	// Kindred Conversation: Register custom menus
	function register_menu() {
		register_nav_menu('primary-menu', __('Primary Menu'));
		register_nav_menu('secondary-menu', __('Secondary Menu'));   
	}
	
	// Excerpt word limit in search results.
	function custom_excerpt_length($length) { return 15; }
	
	// Limit search results to post types.
	function searchfilter($query) {  
	    if ($query->is_search && !is_admin() ) {
	        $query->set('post_type',array('post'));
	    }   
		return $query;
	}
	
	// Number of search results returned per search page.    
	function search_size($queryVars) {
		if(isset($_REQUEST['s'])){   
			$queryVars['posts_per_page'] = 18;
		}                                       
		return $queryVars;
	}
	
	// Calculates read time for each post. (Based on average words per minute read) 
	function bac_post_word_count(){
	    global $post;                                                          
	    $char_list = '';
	    $words = str_word_count(strip_tags($post->post_content), 0, $char_list); 
		$time = round($words / 200).' minute read';
		echo $time;
	}
	
	// Execute PHP within Posts.
	function insert_php($content){  
		preg_match_all('!\[php[^\]]*\](.*?)\[/php[^\]]*\]!is',$content,$matches);
		$nummatches = count($matches[0]);
		for($i=0;$i<$nummatches; $i++){
			ob_start();
			eval($matches[1][$i]);
			$replacement = ob_get_contents();
			ob_clean();
			ob_end_flush();
			$content = preg_replace('/'.preg_quote($matches[0][$i],'/').'/',$replacement,$content,1);
		}
		return $content;
	}
	
	// Position textarea in comments below name & email.
	function comment_to_bottom($fields) {
		$comment_field = $fields['comment'];
		unset( $fields['comment'] );
		$fields['comment'] = $comment_field;
		return $fields;
	}
	 
	// Display '...' when excerpt exceeds limit.
	function excerpt_more($text) {
	    $text = '&hellip;';
	    return $text;
	}
	
	// Execute php in widget code
	function execute_php($html){
	     if(strpos($html,"<"."?php")!==false){
	          ob_start();
	          eval("?".">".$html);
	          $html=ob_get_contents();
	          ob_end_clean();
	     }
	     return $html;
	}
	
	function widgets_init(){
	    register_sidebar(array(
	        'name'          => __('Home', 'ccp'),
	        'id'            => 'sidebar-1',
	        'description'   => __( 'Items that display in your homepage', 'ccp' ),
	        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</aside>',
	        'before_title'  => '<h3 class="widget-title">',
	        'after_title'   => '</h3>',
	    ));
	}
	         
	// Convert the display time to human readable time.
	function smk_get_comment_time($comment_id = 0){
	    return sprintf( 
	        _x('%s ago', 'Human-readable time', 'text-domain'), 
	        human_time_diff( 
	            get_comment_date( 'U', $comment_id ), 
	            current_time('timestamp') 
	        ) 
	    );
	} 
      
	// Structure the comment blocks.
	function comments_list($comment, $args, $depth) {
		echo '<li class="comments--item">'; 
		echo '<div class="comments--image">'.get_avatar($comment, $size='160', $default='<path_to_url>').'</div>';
		echo '<div class="comments--body">';
		echo '<div class="comments--meta">'; 
		echo '<span class="comments--author">'.get_comment_author_link().'</span>';   
		echo '<span class="comments--date">'.smk_get_comment_time(get_comment_ID()).'</span>';
			edit_comment_link(__('edit'),'  ',''); 
		echo '</div>';          
		if($comment->comment_approved == '0'){
			_e('Your comment is awaiting moderation.');
		} 

		echo '<div class="comments--content">';
		comment_text();
		echo '</div>'; 
		echo '<div class="comments--replies">';
		comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); 
		echo '</div>';
		echo '</div>';
		echo '</li>';
	} 
	                                                  
    // Filters classes that can be assigned to the body tag.
	function body_blacklist( $wp_classes, $extra_classes ) {     
	    $blacklist = array('tag');
	    $wp_classes = array_diff( $wp_classes, $blacklist );;  
	    return array_merge( $wp_classes, (array) $extra_classes );
	}


/*
	Kindred Conversation: Custom Filters
	By: Michael Stevens - October 6, 2017	
*/                                       
	add_filter( 'jetpack_development_mode', '__return_true' );  // JetPack Dev Mode. - REMOVE    
	add_filter( 'show_admin_bar', '__return_false' );  			// Disable admin bar in preview. 
	add_filter('excerpt_length','custom_excerpt_length'); 		// Excerpt word limit in search results. 
	add_filter('pre_get_posts','searchfilter');					// Limit search results to post types.
	add_filter('request','search_size');						// Number of search results returned per search page.
	add_filter('the_content','insert_php', 9);				    // Execute PHP within Posts.
	add_filter( 'comment_form_fields', 'comment_to_bottom' );	// Position textarea in comments below name & email.
	add_filter('excerpt_more','excerpt_more');					// Display '...' when excerpt exceeds limit.   
	add_filter('widget_text','execute_php',100);				// Execute php in widget code 
	add_filter('body_class','body_blacklist',10,2);				// Filters classes that can be assigned to the body tag.
	 

/*
	Kindred Conversation: Custom Theme Support 
	By: Michael Stevens - October 6, 2017	
*/
	if(function_exists('add_theme_support')){ 
	    add_theme_support('menus');          
	    add_theme_support('post-thumbnails'); 
	    add_theme_support('custom-header');
	    add_theme_support('automatic-feed-links');
	    add_theme_support('post-formats', array('audio','standard','quote'));
	}


/*
	Kindred Conversation: Custom Actions 
	By: Michael Stevens - October 6, 2017	
*/
	add_action('init', 'register_menu');
	add_action('widgets_init','widgets_init'); 
 
  
/*
	!!!!--- REMOVE ME ---!!!!
// Enable shortcodes in widgets
$tmp_dir = get_template_directory(); 
add_filter('widget_text', 'do_shortcode');					// Enable Widgets on the admin site.
add_filter('widget_text','shortcode_unautop');              // Enable Widgets on the admin site.
*/ 