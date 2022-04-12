<?php
    /* Enqueue */
    function cidw_4w4_enqueue() {
        wp_enqueue_style('  
            style_css', 
            get_template_directory_uri() . '/style.css', 
            array(), filemtime(get_template_directory() . '/style.css'), 
            false);

        wp_enqueue_style('cidw-4w4-police-google', "https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;500;600;700;800;900&display=swap", false);
    } 

    add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

    function trouver_la_categorie($tableau) {
        foreach($tableau as $cle){
            if(is_category($cle)) return($cle);
        }
    }

    $url_categorie_slug = trouver_la_categorie(array('cours', 'web', 'jeu', 'design', 'utilitaire', 'creation-3d', 'video'));
    $ma_categorie = get_category_by_slug($url_categorie_slug);
    echo '<h3>' . $ma_categorie->description . '</h3>';

    /* Enregistrer les menus */
    function cidw_4w4_enregistrer_menu() {
        register_nav_menus(array(
            'principal'         => __('Principal', 'cidw_4w4'),
            'footer'            => __('Footer', 'cidw_4w4'),
            'footer-liens'      => __('Footer liens externes', 'cidw-4w4'),
            'categorie-cours'   => __('Categorie cours', 'cidw-4w4'),
            'departement'       => __('Département TIM', 'cidw-4w4'),
            'evenements'        => __('Les évènements à venir', 'cidw-4w4')));
    }

    add_action('after_setup_theme', 'cidw_4w4_enregistrer_menu');

    /* Filtrer le menu */
    function cidw_4w4_filtrer_menu($objet) {
        /* Afficher le contenu d'un objet */
        # => sert à accéder a la valeur d'un tableau associatif
        foreach($objet as $cle => $valeur) {
            # -> sert à accéder à la valeur d'un objet
            # wp_trim_words([objet], [nombre de mots a garde], [terminer par])
            $valeur->title = wp_trim_words($valeur->title, 4, "...");
        }   

        return $objet;
    }

    add_filter("wp_nav_menu_objects", "cidw_4w4_filtrer_menu");

    /* Ajouter le support du thème */
    function cidw_4w4_add_theme_support() {
        add_theme_support('post-thumbnails');

        add_theme_support('custom_logo', array(
            'width' => 100,
            'height' => 100
        ));
    }

    add_action('after_setup_theme', 'cidw_4w4_add_theme_support');

    function prefix_nav_description( $item_output, $item,  $args ) {
        if ( !empty( $item->description ) ) {
            $item_output = str_replace( $args->link_after . '</a>',
            $args->link_after .'<hr><span class="menu-item-description">' . $item->description . '</span>' .  '</a>',
                  $item_output );
        }
    }


    /* Enregistrement des sidebars */
    add_action('widgets_init', 'my_register_sidebars');
    function my_register_sidebars() {
        register_sidebar(
            array(
                'id'            => 'entete_1',
                'name'          => __('Entete 1'),
                'description'   => __('Sidebar de lentete'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'id'            => 'footer_colonne_1',
                'name'          => __('Footer colonne 1'),
                'description'   => __('La première colonne du footer'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'id'            => 'footer_colonne_2',
                'name'          => __('Footer colonne 2'),
                'description'   => __('La deuxième colonne du footer'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'id'            => 'footer_colonne_3',
                'name'          => __('Footer colonne 3'),
                'description'   => __('La troisième colonne du footer'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'id'            => 'footer_rangee_1',
                'name'          => __('Footer rangée 1'),
                'description'   => __('La première rangée du footer'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'id'            => 'filtre',
                'name'          => __('Filtre des catégories'),
                'description'   => __('La première rangée du footer'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
    }

    function cidw_4w4_pre_get_posts(WP_Query $query) {
        if (!is_admin() && is_main_query() && is_category(array("cours","web","jeu","creation-3d","utilitaire", "design" )))  {
            $ordre = get_query_var('ordre');
            $cle = get_query_var('cletri');

            $query->set('posts_per_page', -1);
            $query->set('orderby', $cle);
            $query->set('order', $ordre);
        }
    }

    function cidw_4w4_query_vars($params){
        $params[] = "cletri";
        $params[] = "ordre";

        return $params;
    }

    add_action('pre_get_posts', 'cidw_4w4_pre_get_posts');
    add_filter('query_vars', 'cidw_4w4_query_vars' );

?>