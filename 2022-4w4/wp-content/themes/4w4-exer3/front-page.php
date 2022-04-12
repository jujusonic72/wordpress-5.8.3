<?php get_header(); ?>
<main class="site__main home">
    <h1 class="site__main__titre home__titre">Accueil</h1>

    <?php
        wp_nav_menu(array(
            "menu" => "departement",
            "container" => "nav",
            "container_class" => "departement__menu"
        ));
        wp_nav_menu(array(
            "menu" => "evenements",
            "container" => "nav",
            "container_class" => "evenements__menu"
        ));
    ?>
</main>
<?php get_footer(); ?>