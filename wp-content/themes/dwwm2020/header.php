<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
	<a href="#main-menu" class="screen-reader-text">Aller à la navigation principale</a>
	<a href="#main-content" class="screen-reader-text">Aller au contenu principal</a>
	<header class="main-header">
		<div class="container">
            <div class="logo"><a href="<?php if(!is_front_page()) { echo home_url();}?>"><?php echo get_field('logo', 'option');?></a></div>
			<nav class="main-nav">
				<button aria-expanded="false" aria-controls="main-menu">Menu</button>
                <?php  
                    wp_nav_menu(
                        array(
                            'theme_location' 	=> 'menu-du-header',
                            'container' 		=> '',
                            'items_wrap'      => '<ul id="main-menu" class="menu" hidden>%3$s</ul>',
                        )							
                    );
                ?>
            </nav> 
		</div>
    </header>
    
    