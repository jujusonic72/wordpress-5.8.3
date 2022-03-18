<?php get_header() ?>
<main class="site__main">
    <section class="site__main__recherche">
        <h1>Résultats de la recherche</h1>
        <?php if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>
                <h2><?php the_title() ?></h2>
                <a href="<?php echo get_permalink(); ?>">
                    <p><?php echo wp_trim_words(get_the_content(), 20, " ... >> ") ?></p>
                </a>
                <br>
            <?php endwhile; ?>
        <?php else :  ?>
            <h2>Aucun résultat pour la recherche</h2>
        <?php endif; ?>
    </section>
</main>
<?php get_footer() ?>