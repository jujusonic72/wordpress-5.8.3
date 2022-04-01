<footer class="site__footer">
    <div class="site__footer__colonne">
        <section class="footer__article">
            <?php get_sidebar("footer_colonne_1");  ?>
        </section>
        <section class="footer__lien">
            <?php get_sidebar("footer_colonne_2");  ?>
        </section>
        <section class="footer__adresse">
            <?php get_sidebar("footer_colonne_3");  ?>
        </section>
    </div>
    <div class="site__footer__ligne">
        <section class="footer__description">
            <?php get_sidebar("footer_ligne_2");  ?>
        </section>
        <section class="footer__copyright">
            <p>&copy; Tous droit réservé - TIM - Collège de Maisonneuve</p>
        </section>
        <section class="footer_sociaux">
            <?php get_sidebar("footer_ligne_1");  ?>
        </section>
        <section class="footer__auteur">
            <p>Auteur : Julien Poirier Morin</p>
        </section>
        <section class="footer__recherche">
            <?php get_search_form(); ?>
        </section>
    </div>
</footer>

</body>
<?php wp_footer(); ?>

</html>