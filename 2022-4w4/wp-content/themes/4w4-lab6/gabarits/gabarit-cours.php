<div class="cours__conteneur">
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <?php 
                $categorie = get_the_category(); 
                $descCours = preg_replace('/(<img [^>]*>)/', '', get_the_content());
                $descCours = apply_filters('the_content', $descCours);
            ?>

            <article class="carte">
                <div class="carte__etiquettes">
                    <div class="carte__etiquettes__sigle">
                        <span class="carte__etiquettes__sigle__contenu"><?= le_sigle(get_the_title()); ?></span>
                    </div>
                    <div class="carte__etiquettes__duree">
                        <span class="carte__etiquettes__duree__contenu"><?= la_duree(get_the_title()); ?></span>
                    </div>
                </div>
                <h3 class="carte__titre">
                    <a href="<?php echo get_permalink(); ?>">
                        <?= le_titre_filtre(get_the_title()); ?>
                    </a>
                </h3>
                <p class="carte__desc">
                    <?= wp_trim_words($descCours, 15, '<button class="cours__desc__suite" href="#"> La suite...</button>'); ?>
                </p>
                <div class="carte__miniature">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="carte__desc__full">
                    <?= $descCours ?>
                </div>
            </article>
            
        <?php endwhile ?>
    <?php endif ?>
</div>