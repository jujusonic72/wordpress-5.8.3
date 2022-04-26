<?php
    /*
     * Modèle search.php
     * 
     * Permet d'afficher les résultats d'une recherche
     * 
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     * 
     * @package <cidw-4w4>
     */
?>

<?php get_header(); ?>
<main class="site__main">
    <h1 class="site__main__titre">Résultat de la recherche</h1>
    <section class="resultats-recherche">
        <?php if (have_posts()) : while(have_posts()) : the_post() ?>
            <article class="resultat-recherche">
                <a href="<?= get_permalink(); ?>">
                    <h3 class="resultat-recherche__titre"><?php the_title(); ?></h3>
                </a>
            </article>
        <?php endwhile; endif; ?>
    </section>
</main>
<?php get_footer(); ?>