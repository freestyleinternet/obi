<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
	<link rel="shortcut icon" href="<?php get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php get_template_directory_uri(); ?>/favicon.png" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
        <div class='wrapper'>
        	<a class='trigger' href='#menu'></a>
        	<a class='logo' href='#'></a>
            <nav id='menu'>	
                <?php wp_nav_menu( array('menu' => 'main-menu' )); ?>
            </nav>
		</div>
    </header>
    
   
		