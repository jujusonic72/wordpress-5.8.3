<footer class="site__footer">

    <div class="site__footer__colonne">
        <section class="footer__article">
            <?php get_sidebar('footer_colonne_1'); ?>
        </section>
        <section class="footer__adresse">
            <h2>Adresse du Collège</h2>
            <?php get_sidebar('footer_colonne_2'); ?>
        </section>
        <section class="footer__liens">
            <?php get_sidebar('footer_colonne_3'); ?>
        </section>
        <section class="site__footer_menu">
        <h2>Menu</h2>
        <?php
        $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M8.72 18.78a.75.75 0 001.06 0l6.25-6.25a.75.75 0 000-1.06L9.78 5.22a.75.75 0 00-1.06 1.06L14.44 12l-5.72 5.72a.75.75 0 000 1.06z"></path></svg>';
        wp_nav_menu(array(
            "menu" => "externe",
            "container" => "nav",
            "container_class" => "site__footer__menu",
            "menu_class" => "site__footer__menu__ul",
            //"before" => "+", // Met a l'exterieur de a
            //"after" => "@", // Met a l'exterieur de a
            "link_before" => $icone, // Met a l'interieur de a
            // "link_after" => "±" // Met a l'interieur de a
        ));
        get_search_form(); ?>
    </section>
    </div>
    
    <div class="site__footer__ligne">
        <section class="footer__description"></section>
        <section class="footer__nav"></section>
        <section class="footer__copyright"></section>
        <section class="footer__sociaux">
        <?php get_sidebar('footer_ligne_1'); ?>
        </section>
        <section class="footer__auteur"></section>
        <section class="footer__copyright">
        <?php get_sidebar('footer_ligne_2'); ?>
    </section>
    </div>

</footer>
</body>
<?php wp_footer() ?>

</html>