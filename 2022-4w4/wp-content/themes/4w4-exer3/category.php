<?php get_header(); ?>
<?php include 'carte-fonctions.php'; ?>
<main class="site__main">
<h1 class="site__main__titre">Liste des cours</h1>
    <section class="cours">
        <div class="cours__filtre">
            <?php
                wp_nav_menu(array(
                    "menu"      => "categorie_cours",
                    "container" => "nav",
                    "container_class" => "cours__filtre__menu",
                    "menu_class" => "cours__filtre__menu__ul"
                    
                ));
            ?>
        </div>

        <?php get_template_part('gabarits/gabarit', 'cours'); ?>
    </section>
</main>
<?php get_footer(); ?>
</body>
</html>