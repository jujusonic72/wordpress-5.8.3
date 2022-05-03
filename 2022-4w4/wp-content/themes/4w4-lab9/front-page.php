<?php get_header(); ?>
<main class="site__main home">
    <h1 class="site__main__titre home__titre">Accueil</h1>
<div>
<h2>Département TIM</h2>
    <?php
        wp_nav_menu(array(
            "menu" => "departement",
            "container" => "nav",
            "container_class" => "departement__menu"
        ));
    ?>
</div>
<div>
<h2>Événements</h2>
    <?php
        wp_nav_menu(array(
            "menu" => "evenements",
            "container" => "nav",
            "container_class" => "evenements__menu"
        ));
    ?>
</div>
<?php if (have_posts()): the_post();?>
        <?php the_title()?>
        <?php the_content()?>
<?php endif ?>
</main>
<?php get_footer(); ?>