<?php get_header() ?>
<main class="site__main">
    section.
    <h2>page.php</h2>
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>
<?php get_footer() ?>