<?php
function cidw_4w4_enqueue()
{
    wp_enqueue_style('style.css', get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

/* ------------------------- Enregistrer le menu ------------------------- */
function cidw_4w4_register_nav_menu(){
    register_nav_menus( array(
        'menu_principal' => __( 'Menu Principal', 'cidw_4w4' ),
        'menu_footer'  => __( 'Menu Footer', 'cidw_4w4' ),
    ) );
}
add_action( 'after_setup_theme', 'cidw_4w4_register_nav_menu', 0 );

/* ---------------------- filtrer les choix du nav menu object --------------------*/
function cidw_4w4_filtre_choix_menu($obj_menu){
    // var_dump($obj_menu);
    foreach($obj_menu as $cle => $value){
        // print_r($value);
        // $value->title = substr($value->title,0,7);
        // echo $value->title . "<br>";
        $value->title = wp_trim_words($value->title,3,"...");
    }
    return $obj_menu;
}
add_filter( "wp_nav_menu_objects", "cidw_4w4_filtre_choix_menu" )
?>