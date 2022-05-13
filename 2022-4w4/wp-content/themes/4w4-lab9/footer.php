<footer class="site__footer">
<div class="site__footer__colonne">
    <section class="site__footer__colonne__adresse"><?php get_sidebar('footer_colonne_1'); ?></section>
    <section class="site__footer__colonne__article"><?php get_sidebar('footer_colonne_2'); ?></section>
    <section class="site__footer__colonne__lien"><?php get_sidebar('footer_colonne_3'); ?></section>
</div>

<div class="site__footer__rangee">
    <section class="site__footer__rangee__desc">
        <h1 class="site__footer__rangee__desc__titre">4w4 Conception d'interface et développement web</h1>
    </section>
    <section class="site__footer__rangee__recherche"><?php get_search_form(); ?></section>
    <?php
            $icone = '<svg width="25px" height="25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" color="#fff"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"></path></svg>';
            wp_nav_menu(array(  "menu" => "Footer",
                                "container" => "nav",
                                "container_class" => "site__footer__rangee__menu",
                                "menu_class" => "site__footer__rangee__menu__ul",
                                "link_before" => $icone)); 
    ?>
    <section class="site__footer__rangee__sociaux"><?php get_sidebar('footer_rangee_1'); ?></section>
    <section class="site__footer__rangee__droits">&copy; Collège de Maisonneuve - Tous droits réservés</section>
    <section class="site__footer__rangee__auteur">Thème réalisé par Julien Poirier Morin</section>
</div>
<div class="boite__modale">
    <button class="boite__modale__ferme">X</button>
    <article class="boite__modale__text">
        
        <!-- <img> -->
    </article>
</div>
<div class="boite__carrousel">
    <button class="boite__carrousel__ferme">X</button>
    <section class="boite__carrousel__navigation"></section>
</div>
<?php wp_footer() ?>
</body>
</html>