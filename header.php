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
    <header class="header">
        <a href="index.php"><img src="wp-content\themes\steep\images\Logo_STEEP.svg" alt="logo STEEP" class="header__logo"></a>
        <nav class="header__nav">
            <li class="header__nav__link"><a href="">Activités de recherche <img src="wp-content\themes\steep\images\arrow.svg" alt="Flêche vers le bas" class="header__nav__link__arrow"></a></li>
            <li class="header__nav__link"><a href="">Vous formez <img src="wp-content\themes\steep\images\arrow.svg" alt="Flêche vers le bas" class="header__nav__link__arrow"></a></li>
            <li class="header__nav__link"><a href="">Qui sommes-nous ? <img src="wp-content\themes\steep\images\arrow.svg" alt="Flêche vers le bas" class="header__nav__link__arrow"></a></li>
        </nav>
        <img src="wp-content\themes\steep\images\rechercher.svg" alt="Recherche" class="header__search">
    </header>