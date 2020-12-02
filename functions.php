<?php
/*Ajout des images mises en avant*/
add_theme_support( 'post-thumbnails' );

/*Ajout de la possibilité de créer des menus*/
function initWordpress() {
    register_nav_menu( 'menu', 'Menu principal');
}
add_action('init', 'initWordpress');

/*Décalaration des feuilles de style et des scripts*/
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
  	
    // Déclaration des autre feuilles de style
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

    wp_enqueue_style( 
        'contact', 
        get_template_directory_uri() . '/css/contact.css',
        array(), 
        '1.0'
    );

    wp_enqueue_style( 
        'contact', 
        get_template_directory_uri() . '/css/flickity.css',
        array(), 
        '1.0'
    );


    //Déclaration des scripts
    wp_enqueue_script(
        'jquerry',
        get_template_directory_uri(). '/js/jquery-3.5.1.min.js',
        array(),
        '3.5.1',
        true
    );

    wp_enqueue_script( 
        'flickity.pkgd.min', 
        get_template_directory_uri() . '/js/flickity.pkgd.min.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );

    wp_enqueue_script( 
    'front-page', 
    get_template_directory_uri() . '/js/front-page.js', 
    array( 'jquery' ), 
    '1.0', 
    true
    );
    
}
add_action( 'wp_enqueue_scripts', 'register_assets' );


// Functions d'ajout de Custom Post Types et Taxonomies
function register_post_types() {
        // CPT Vidéo
        $labelsVideo = array(
            'name' => 'Video',
            'all_items' => 'Toutes les videos',  // affiché dans le sous menu
            'singular_name' => 'vidéo',
            'add_new_item' => 'Ajouter une video',
            'edit_item' => 'Modifier une video',
            'menu_name' => 'Vidéo'
        );
    
        $argsVideo = array(
            'labels' => $labelsVideo,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => false,
            'supports' => array( 'title', 'editor','thumbnail', 'custom-fields' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-video-alt3',  
            'taxonomies'  => array( 'category' ),
        );
    
        register_post_type( 'video', $argsVideo );

        // CPT Comprendre et agir
        $labelsComprendreAgir = array(
            'name' => 'Comprendre et Agir',
            'all_items' => 'Tous Comprendre et Agir',  // affiché dans le sous menu
            'singular_name' => 'Comprendre et Agir',
            'add_new_item' => 'Ajouter Comprendre et Agir',
            'edit_item' => 'Modifier Comprendre et Agir',
            'menu_name' => 'Comprendre et Agir',
            'taxonomies'  => array( 'category' ),
        );
    
        $argsComprendreAgir = array(
            'labels' => $labelsComprendreAgir,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => false,
            'supports' => array( 'title', 'editor','thumbnail', 'custom-fields', 'excerpt' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-format-chat',
        );
    
        register_post_type( 'ComprendreAgir', $argsComprendreAgir );

        // CPT Cours
        $labelsCours = array(
            'name' => 'Cours',
            'all_items' => 'Tous les Cours',  // affiché dans le sous menu
            'singular_name' => 'Cours',
            'add_new_item' => 'Ajouter des Cours',
            'edit_item' => 'Modifier Cours',
            'menu_name' => 'Cours',
            'taxonomies'  => array( 'category' ),
        );
    
        $argsCours = array(
            'labels' => $labelsCours,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => false,
            'supports' => array( 'title', 'editor','thumbnail', 'custom-fields' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-welcome-learn-more',
        );
    
        register_post_type( 'Cours', $argsCours );

        // CPT Séminaires
        $labelsSeminaires = array(
            'name' => 'Séminaires',
            'all_items' => 'Tous les Séminaires',  // affiché dans le sous menu
            'singular_name' => 'Séminaires',
            'add_new_item' => 'Ajouter des Séminaires',
            'edit_item' => 'Modifier Séminaires',
            'menu_name' => 'Seminaires'
        );
    
        $argsSeminaires = array(
            'labels' => $labelsSeminaires,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => false,
            'supports' => array( 'title', 'editor','thumbnail', 'custom-fields', 'excerpt' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-groups',
        );
    
        register_post_type( 'Seminaires', $argsSeminaires );

        // CPT Rejoindre l'équipe
        $labelsRejoindreEquipe = array(
            'name' => 'Rejoindre l\'équipe',
            'all_items' => 'Tous les Rejoindre l\'équipe',  // affiché dans le sous menu
            'singular_name' => 'Rejoindre l\'équipe',
            'add_new_item' => 'Ajouter des Rejoindre l\'équipe',
            'edit_item' => 'Modifier Rejoindre l\'équipe',
            'menu_name' => 'Rejoindre l\'Equipe'
        );
    
        $argsRejoindreEquipe = array(
            'labels' => $labelsRejoindreEquipe,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => false,
            'supports' => array( 'title', 'editor','thumbnail', 'custom-fields', 'excerpt' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-id-alt',
        );
    
        register_post_type( 'RejoindreEquipe', $argsRejoindreEquipe );

        
        // CPT Projets
        $labelsProjets = array(
            'name' => 'Projets',
            'all_items' => 'Tous les Projets',  // affiché dans le sous menu
            'singular_name' => 'Projets',
            'add_new_item' => 'Ajouter des Projets',
            'edit_item' => 'Modifier Projets',
            'menu_name' => 'Projets'
        );
    
        $argsProjets = array(
            'labels' => $labelsProjets,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => false,
            'supports' => array( 'title', 'editor','thumbnail', 'custom-fields' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-lightbulb',
        );
    
        register_post_type( 'Projets', $argsProjets );

}
add_action( 'init', 'register_post_types' );


  

add_filter( 'the_content', 'prefix_insert_content' );

/*Insertion de contenu dans le contenu de la page*/
function prefix_insert_content( $content) {
    
    $ad_code_contact = add_content_contact();
    $ad_code_video = add_content_home_video();
    $ad_code_actus = add_content_home_actus();
    $balise = '</h2>';
    if(is_page( 'contact' ))
    {
        return prefix_insert_after( $ad_code_contact, 2, $balise, $content );
    }

    if(is_front_page())
    {
        $video = prefix_insert_after( $ad_code_video, 2, $balise, $content );
        return prefix_insert_after( $ad_code_actus, 3, $balise, $video );
    }

    return $content;
}

/*Insertion de contenu après la balise envoyé en paramètres*/
function prefix_insert_after( $insertion, $balise_id,$balise_type, $content ) {
    $closing_p = $balise_type;
    $balises = explode( $closing_p, $content );
    foreach ($balises as $index => $balise) {

        if ( trim( $balise ) ) {
            $balises[$index] .= $closing_p;
        }

        if ( $balise_id == $index + 1 ) {
            $balises[$index] .= $insertion;
        }
    }
    
    return implode( '', $balises );
}


/*Récuperer les posts en fonction de leur types (videos, comprendre&agir, seminaires, ...) et/ou pouvant posséder une catégorie (video notamment)*/
function get_currents_posts_with_category($category, $type_of_posts)
{
    if(!empty($category))
    {
        $categorie = get_category_by_slug($category);
        $args = array(
            'category'=> $categorie->term_id,      
            'posts_per_page'=> -1, 
            'orderby'=> 'name',    
            'order'=> 'ASC',
            'post_type'=> $type_of_posts,
        );
    }
    else
    {
        $args = array(      
            'posts_per_page'=> -1, 
            'orderby'=> 'name',    
            'order'=> 'ASC',
            'post_type'=> $type_of_posts,
        );
    }
    $arrayContent = [];

    $posts = get_posts($args);

    foreach ( $posts as $post ) : setup_postdata( $post );       

    $array = get_post_custom($post->ID);
    $auteur = $array['Auteur'][0];
    $date = $array['Date'][0];
    $sizeArray = sizeof($arrayContent);
    if(!empty($date))
    {
        list($day, $month, $year) = explode('-', $date);
        $explodeDate = mktime(0, 0, 0, $month, $day, $year);
        if($explodeDate <= time())
        {
            $arrayContent[$sizeArray] = [$date, $auteur, $post->ID];
        }
    }

    endforeach;wp_reset_postdata();

    usort($arrayContent, "date_sort");
    
    return $arrayContent;
}

/*Comparer deux dates afin de les ranger dans l'ordre de la plus récente*/
function date_sort($a, $b)
{
    return strtotime($b[0]) - strtotime($a[0]);
}

/*Recuperer le contenu des posts stockés en amont dans un tableau*/
function get_content_post($array, $addContent, $category, $path)
{
    if(sizeof($array) > 2)
    {
        $parcours = 1;
    }
    else
    {
        $parcours = sizeof($array)-1;
    }
    $addContent = "";
    for($i=0; $i<=$parcours;$i++){
        $my_postid = $array[$i][2];
        
        $the_post = get_post($my_postid);
        $the_excerpt = $the_post->post_excerpt;
        $excerptValue = excerpt($the_excerpt);
        $the_thumbnail = get_the_post_thumbnail($the_post);
        $the_title = $the_post->post_title;

        $the_category = $category;
        $the_link = home_url( '/' ).$path.'/'.$the_post->post_name;

        $addContent .= "<div class='sections__actus__post carousel-cell'><h4>".$the_title."</h4>";
        $addContent .= "<p class='sections__actus__post--green'>$the_category</p>";
        $addContent .= "<div class='sections__actus__post__image'>".$the_thumbnail."</div>";
        $addContent .= "<p class='sections__actus__post__excerpt'>".$excerptValue."</p>";
        $addContent .= "<a href='".$the_link."'>Lire la suite</a></div>";
    }
    return $addContent;
}

/*Créer un extrait de seulement 20mots*/
function excerpt($excerptValue) {
    $limit = 18;
    $excerpt = explode(' ', $excerptValue, $limit);
    if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
    } else {
    $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
}

/********* 
Fonctions d'ajout de contenu
*********/

//Ajout de contenu dans la page contact (maps + adresse)
function add_content_contact()
{
    $array = get_post_custom();
    $add_code = "
    <div class='section__adresse_content'>
        <div class='section__adresse_content__carte'>".
            '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5620.971342233818!2d5.804386381639993!3d45.217742385886794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478a5f575929f5a5%3A0x6e9ecd3dc4ffd941!2s655%20Avenue%20de%20l&#39;Europe%2C%2038330%20Montbonnot-Saint-Martin!5e0!3m2!1sfr!2sfr!4v1605776144759!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>'
        ."</div>".
        "<div class='section__adresse_content__adresse'>".
                "<p>".$array['adresse'][0]."</p>"
        ."</div>"
    ."</div>";
    return $add_code;
}

//Ajout de contenu dans la section comprendre&agir de la page d'accueil
function add_content_home_video()
{
    $arrayComprendreEtAgir = get_currents_posts_with_category('comprendre-et-agir', 'video');
    $addContent = "<div class='posts__comprendre_et_agir main-carousel'>";
    for($i=0; $i<=sizeof($arrayComprendreEtAgir)-1;$i++){
        $my_postid = $arrayComprendreEtAgir[$i][2];
        $the_post = get_post($my_postid);
        $the_content = $the_post->post_content;
        $explode = explode('<div class="wp-block-embed__wrapper">',$the_content);
        $explode = explode('</div>',$explode[1]);
        $explode = explode('https://youtu.be/',$explode[0]);
        $the_title =$the_post->post_title;
        $addContent .= "<div class='post__comprendre_et_agir__videos carousel-cell'>";
        $addContent .= "<div class='posts__comprendre_et_agir__video'><iframe src='https://www.youtube.com/embed/".$explode[1]."?feature=oembed'></iframe></div>";
        $addContent .= "<div class='posts__comprendre_et_agir__infos'><h4>".$the_title."</h4><p>".htmlspecialchars($arrayComprendreEtAgir[$i][1])."</p><p>". htmlspecialchars($arrayComprendreEtAgir[$i][0])."</p></div>";
        $addContent .= "</div>";
    }
    $addContent .= "</div>";
    return $addContent;
}

//Ajout de contenu dans la section actus de la page d'accueil
function add_content_home_actus()
{
    $arrayComprendreEtAgir = get_currents_posts_with_category('', 'ComprendreAgir');
    $arraySeminaire = get_currents_posts_with_category('', 'Seminaires');
    $arrayRejoindreEquipe = get_currents_posts_with_category('', 'RejoindreEquipe');
    $addContent = "<div class='sections__actus__posts main-carousel'>";
    $addContent .= get_content_post($arrayComprendreEtAgir, $addContent, 'Comprendre et Agir','comprendreagir');
    $addContent .= get_content_post($arraySeminaire, $addContent, 'Séminaire','seminaires');
    $addContent .= get_content_post($arrayRejoindreEquipe, $addContent, 'Rejoindre l\'équipe','rejoindreequipe');
    $addContent .= "</div>";
    return $addContent;
}




