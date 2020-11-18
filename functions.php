<?php
function initWordpress() {
    register_nav_menu( 'menu', 'Menu principal');
}
add_action('init', 'initWordpress');

function register_assets() {
    //Déclarer reset.css
    wp_enqueue_style( 
        'reset', 
        get_template_directory_uri() . '/css/reset.css',
        array(), 
        '1.0'
    );

    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'style',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
  	
    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'home', 
        get_template_directory_uri() . '/css/front-page.css',
        array(), 
        '1.0'
    );

    wp_enqueue_style( 
        'header', 
        get_template_directory_uri() . '/css/header.css',
        array(), 
        '1.0'
    );

    wp_enqueue_style( 
        'footer', 
        get_template_directory_uri() . '/css/footer.css',
        array(), 
        '1.0'
    );

    wp_enqueue_style( 
        'site', 
        get_template_directory_uri() . '/css/site.css',
        array(), 
        '1.0'
    );
    wp_enqueue_style( 
        'page', 
        get_template_directory_uri() . '/css/page.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'register_assets' );

function register_post_types() {
    // La déclaration de nos Custom Post Types et Taxonomies ira ici

}
add_action( 'init', 'register_post_types' );