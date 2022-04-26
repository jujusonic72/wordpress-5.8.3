<?php get_header(); ?>
<?php include 'carte-fonctions.php'; ?>
<main class="site__main">
    <h1 class="site__main__titre">Article</h1>
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <article class="cours">
            <div class="cours__image">
                <?php the_post_thumbnail("medium"); ?>
            </div>

            <h2 class="cours__titre">
                <a href="<?= get_permalink(); ?>">
                    <?= le_titre_filtre(get_the_title()); ?>
                </a>
            </h2>

            <section class="cours__etiquettes">
                <div class="cours__etiquettes__duree">
                    <h4 class="cours__etiquettes__duree__contenu">
                        <?= la_duree(get_the_title()); ?>
                    </h4>
                </div>

                <div class="cours__etiquettes__sigle">
                    <h4 class="cours__etiquettes__sigle__contenu">
                        <?= le_sigle(get_the_title()); ?>
                    </h4>
                </div>
            </section>
            
            <p class="cours__contenu">
                <?= get_the_content(); ?>
            </p>
        </article>
    <?php 
        endwhile; 
        endif;
    ?>
</main>
<?php get_footer(); ?>