<?php get_header(); ?>
    <h1>
        Vive Wordpress
    </h1>
<?php 
if (have_posts()):
    while (have_posts()): the_post(); ?>
    <article>
        <?php the_title('<h2>','</h2>');
        the_content('<p>','</p>'); ?>
    </article>
    <?php endwhile;
endif;?>


    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt hic, sed possimus ut voluptatum, odio, reiciendis harum perferendis rerum sequi vero doloremque quam. Tempora, fuga! Nihil labore omnis veritatis corrupti?</p>
<?php get_footer(); ?>
