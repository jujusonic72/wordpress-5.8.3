<?php get_header(); ?>
<main class="site__main">
<h1 class="site__main__titre">Liste des cours</h1>
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); 
            $mon_titre_filtre = substr(get_the_title(), 8);
            # Ajouter la durée
            $mon_sigle = substr($mon_titre, 0, 7);
            $mon_titre_filtre = substr($mon_titre_filtre, 0, strrpos($mon_titre_filtre, '('));
            ?>
            <section class="carte">
                <h3 class="carte__titre"><?= $mon_titre_filtre ?></h3>
                <p class="carte__sigle"><?= $mon_sigle ?></p>
                <p class="carte__desc"><?= get_the_excerpt(); ?></p>
            </section>     
        <?php endwhile ?>
    <?php endif ?>
</main>
<?php get_footer(); ?>
</body>
</html>