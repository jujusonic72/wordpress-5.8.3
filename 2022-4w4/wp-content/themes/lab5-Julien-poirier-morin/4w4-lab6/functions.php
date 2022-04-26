<?php 

function cidw_4w4_enqueue(){
    //wp_enqueue_style('style_css', get_stylesheet_uri());

    wp_enqueue_style('cidw4w4-le-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);

    wp_enqueue_style('cidw4w4-police-google', "https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Secular+One&family=Zilla+Slab:wght@300&display=swap", false);

    wp_enqueue_script('cidw-4w4-js-modal',
                    get_template_directory_uri() . '/js/boite_modale.js',
                    array(),
                    filemtime(get_template_directory() . '/js/boite_modale.js'), 
                    true);
}

add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

/* -------------------------------------------------- Enregistré le menu */
function cidw_4w4_register_nav_menu(){
    register_nav_menus( array(
        'menu_principal' => __( 'Menu principal', 'cidw_4w4' ),
        'menu_footer'  => __( 'Menu footer', 'cidw_4w4' ),
        'menu_externe' => __( 'Menu externe', 'cidw_4w4' ),
        'menu_categorie_cours' => __( 'Menu catégorie_cours', 'cidw_4w4'),
        'menu_accueil' => __( 'Menu accueil', 'cidw_4w4'),
    ) );
}
add_action( 'after_setup_theme', 'cidw_4w4_register_nav_menu', 0 );

/* ---------------------------------------------------- afficher une description de choix de menu */
function prefix_nav_description( $item_output, $item) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( '</a>',
        '<hr><span class="menu-item-description">' . $item->description . '</span><div class="menu-item-icone"></div></a>',
              $item_output );
    }
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 3 );


/* ---------------------------------------------------------------------- filtré les choix du menu principal */
function cidw_4w4_filtre_choix_menu($obj_menu){
    //var_dump($obj_menu);
    foreach($obj_menu as $cle => $value)
    {
       // print_r($value);
       //$value->title = substr($value->title,0,7);
       $value->title = wp_trim_words($value->title,3,"...");
       // echo $value->title . '<br>';
    }
    return $obj_menu;
}
add_filter("wp_nav_menu_objects","cidw_4w4_filtre_choix_menu");

/* ---------------------------------------------------------------------- add-theme-support */
function cidw_4w4_add_theme_support(){
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width'  => 100,
    ) );    
}

add_action('after_setup_theme', 'cidw_4w4_add_theme_support' );
/* ---------------------------------------------------------------------- Enregistrer des sidebars */
add_action( "widgets_init", "my_register_sidebars");

function my_register_sidebars() {

    register_sidebar(
        array(
            'id'            => 'entete_1',
            'name'          => __( 'Entete #1' ),
            'description'   => __( 'Sidebar s\'affichant dans l\'entete' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
 
    register_sidebar( array(
        'id'            => 'footer_colonne_1',
        'name'          => __('Footer colonne 1'),
        'description'   => __('Ce sidebar s\'affiche dans une colonne du pied de page'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'footer_colonne_2',
        'name'          => __('Footer colonne 2'),
        'description'   => __('Ce sidebar s\'affiche dans une colonne du pied de page'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'footer_colonne_3',
        'name'          => __('Footer colonne 3'),
        'description'   => __('Ce sidebar s\'affiche dans une colonne du pied de page'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'footer_ligne_1',
        'name'          => __('Footer ligne 1'),
        'description'   => __('Ce sidebar s\'affiche dans une ligne du pied de page'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'footer_ligne_2',
        'name'          => __('Footer ligne 2'),
        'description'   => __('Ce sidebar s\'affiche dans une ligne du pied de page'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

function cidw_4w4_pre_get_posts(WP_Query $query)
{

    if (!is_admin() && is_main_query() && is_category(array('cours','web','jeu','design','utilitaire','creation-3d','video'))   )
    {
       //var_dump($query);
       // die();

      $ordre = get_query_var('ordre');
      // echo "-----ordre= "  . $ordre  . "-------------------------<br>";
      $cle = get_query_var('cletri');
      // echo "-----cle= "  . $cle  . "-------------------------<br>";

       $query->set('order',  $ordre);
       $query->set('orderby', $cle);
       $query->set('postperpage','-1');


    }


/*    
  if (!is_admin() && is_main_query() && is_category(array('web','cours','design','video','utilitaire','creation-3d','jeu'))) 
    {
    //$ordre = get_query_var('ordre');
    $query->set('posts_per_page', -1);
    // $query->set('orderby', $cle);
    $query->set('orderby', 'title');
    // $query->set('order',  $ordre);
    $query->set('order',  'ASC');
    // var_dump($query);
    // die();
   }
  */ 
}


function cidw_4w4_query_vars($params){
// var_dump($params);
// die();
    $params[] = "ordre";
    $params[] = "cletri";
return $params;

}
/*
    $params[] = "cletri";
    $params[] = "ordre";
    //$params["cletri"] = "title";
    //var_dump($params); die();
    return $params;
}
*/
add_action('pre_get_posts', 'cidw_4w4_pre_get_posts');
/* 
Que le hook «pre_get_posts» se manisfeste juste avant que la requête WP_query soit exécuté. 
Ce hook nous permettra d'adapter la requête avant d'exécuter cette requête 
*/ 

add_filter('query_vars', 'cidw_4w4_query_vars' );

?>