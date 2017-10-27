<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php remove_all_filters( 'wp_title' ); ?>
<title><?php echo get_bloginfo('name'); wp_title('–', true, 'left'); ?></title>    
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" />
<meta name="description" content="<?php bloginfo('description'); ?>" /><?php wp_head(); ?>   
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.ico" sizes="16x16" />
<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png" sizes="16x16" />
<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png" sizes="32x32" />
<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-96x96.png" sizes="96x96" />
<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-180x180.png" sizes="180x180" />
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon" />
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" />  
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/screen.css" />

</head>
<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script id="facebook-jssdk" src="//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10"></script> 
<script id="twitter-wjs" src="http://platform.twitter.com/widgets.js"></script> 
<script type="text/javascript" async defer src="http://assets.pinterest.com/js/pinit.js"></script>
<overlay></overlay>
<div class="wrapper">
<header class="header filled" role="banner">
    <div class="header--container">
		<a href="#" class="header--menu">
			<div class="header--line"></div>
			<div class="header--line"></div>
			<div class="header--line"></div>
		</a>
        <div class="header--branding"><a href="<?php echo home_url(); ?>"></a></div>
 		<div class="header--taxonomy">
 			<search class="header--search">
				<?php get_template_part( 'mainsearch', get_post_format() ); ?>
			</search>
	        <nav class="header--nav" role="navigation">
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
	        </nav>
 		</div>


    </div>
	<div class="clear"></div>
</header>                                      