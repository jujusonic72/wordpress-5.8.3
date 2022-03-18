<?php

use ParagonIE\Sodium\Core\Curve25519\Ge\P2;

function cidw_4w4_enqueue()
{
    wp_enqueue_style('4w4-le-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
}
add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

/*---------------------------------------------------- Enregistrer le menu*/
function cidw_4w4_register_nav_menu()
{
    register_nav_menus(array(
        'primary_menu' => __('Menu principal', 'cidw_4w4'),
        'footer_menu' => __('Menu footer', 'cidw_4w4'),
    ));
}
add_action("after_setup_theme", "cidw_4w4_register_nav_menu", 0);
/*---------------------------------------------------- Filtrer les choix du menu principal*/

function cidw_4w4_filtre_choix_menu($obj_menu)
{
    foreach ($obj_menu as $cle => $value) {
        //print_r($value);
        //$value->title = substr($value->title, 0, 7);
        $value->title = wp_trim_words($value->title, 3, "...");
        //echo $value->title . '<br>';
    }
    return $obj_menu;
}

function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

add_filter("wp_nav_menu_objects", "cidw_4w4_filtre_choix_menu");
/*---------------------------------------------------------- add_theme_support() */
//Permet d'ajouter des images aux articles
add_theme_support('post-thumbnails');


//Custom functions

function get_excerpt_trim($num_words, $more)
{
    $excerpt = get_the_excerpt();
    $excerpt = wp_trim_words($excerpt, $num_words, $more);
    return $excerpt;
}

/* ---------------------------------------------------------------------- Enregistrer des sidebars */

add_action( "widgets_init", "my_register_sidebars");

function my_register_sidebars() {
 
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
