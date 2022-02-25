<?php get_header() ?>
<main class="principal">

<section class="animation">
    <div class="animation__bloc">1</div>
    <div class="animation__bloc">2</div>
    <div class="animation__bloc">3</div>
    <div class="animation__bloc">4</div>
    <div class="animation__bloc">5</div>
    <h1>--------- SINGLE-POST.PHP ----------</h1>
</section>
    <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>
    <?php endif ?>
</main>
<?php get_footer() ?>