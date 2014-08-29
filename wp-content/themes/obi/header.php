<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
	<link rel="shortcut icon" href="<?php get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php get_template_directory_uri(); ?>/favicon.png" />
    <script type="text/javascript" src="//use.typekit.net/dmt1tyf.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
        <div class='wrapper'>
        	<a class='logo' href='<?php bloginfo('url'); ?>'></a>
            <ul class='contact-details'>
            	<?php if( get_field('telephone_number') ): ?><li><span>t)</span> <?php the_field('telephone_number'); ?></li><?php endif; ?>
                <?php if( get_field('email_address1') ): ?><li><span>e)</span> <a href='mailto:<?php the_field('email_address1'); ?>'><?php the_field('email_address1'); ?></a></li><?php endif; ?>
            </ul>
            <nav id='menu'>	
                <ul>
                	<li><a href='#services'>Our Services</a></li>
                    <li><a class='about' href='#about'>About us</a></li>
                    <li><a class='team' href='#about'>Meet the team</a></li>
                    <li><a href='#contact'>Get in touch</a></li>
                </ul>
            </nav>
		</div>
    </header>
    
   
		