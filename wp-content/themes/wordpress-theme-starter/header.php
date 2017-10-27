<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' &ndash;'; } ?> <?php bloginfo('name'); ?></title>    
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" />
<meta name="description" content="<?php bloginfo('description'); ?>">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon" />
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" /> 
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/screen.css" />
</head>
<body <?php body_class(); ?>>
<overlay></overlay>
<div class="wrapper">
<header class="header" role="banner">
    <div class="header--container">
		<a href="#" class="menu">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</a>
        <div class="header--branding"><a href="<?php echo home_url(); ?>"></a></div> 
		<div class="header--search">
			<?php get_template_part( 'mainsearch', get_post_format() ); ?>
		</div>
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
	<div class="clear"></div>
</header>