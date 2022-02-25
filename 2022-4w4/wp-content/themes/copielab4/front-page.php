<?php get_header() ?>
<main class="principal">

<section class="animation">
    <div class="animation__bloc">1</div>
    <div class="animation__bloc">2</div>
    <div class="animation__bloc">3</div>
    <div class="animation__bloc">4</div>
    <div class="animation__bloc">5</div>
</section>
<h1>--------- FRONT-PAGE.PHP ----------</h1>
<div class="formation__liste">
<?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                <article class="formation__cours">
                        <?php
                        $titre = get_the_title();
                        $titreFiltreCours = substr($titre, 7, -6);
                        $nbHeures = substr($titre, -6);
                        $sigleCours = substr($titre, 0, 7);
                        $descCours = get_the_excerpt();
                        ?>
                        <h3 class="cours__titre"> <?= $titreFiltreCours; ?></h3>
                        <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
                        <p class="cours__sigle"><?= $sigleCours; ?> </p>
                        <p class="cours__desc"> <?= $descCours; ?></p>
                    </article>
                <?php endwhile ?>
                <?php endif ?>
        </div>
</main>
<?php get_footer() ?>