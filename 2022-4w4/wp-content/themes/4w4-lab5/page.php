<?php get_header(); ?>
<main class="site__main">
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <h1 class="site__main__titre">
            <?php the_title(); ?>
        </h1>

        <?php the_content(); ?>
    <?php
        endwhile;
        endif;
    ?>
</main>