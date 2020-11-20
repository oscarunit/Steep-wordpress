<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title><?php bloginfo('name');?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>
    <!--HEADER-->
    <header>
        <a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>\images\logo_steep.svg" alt="logo STEEP" class="header__logo"></a>
        <?php 
            /*On charge le menu*/
            echo wp_nav_menu('Menu Principal');
        ?>
        <img src="<?php echo get_template_directory_uri(); ?>\images\rechercher.svg" alt="Recherche" class="header__search">
    </header>