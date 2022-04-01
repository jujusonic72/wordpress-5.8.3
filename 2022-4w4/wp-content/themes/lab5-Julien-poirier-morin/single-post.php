<?php get_header() ?>
<main class="site__main">
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               <article class="cours">
                    <h1 class="cours__titre">
                         <?php echo get_the_title(); ?>
                    </h1>
                    <section class="cours__contenu">
                         <?php
                         function wpa_content_filter($content)
                         {
                              $dernierElementContent = substr(strrchr($content, '.'), 1);
                              $premierElementContent = substr($content, 0, -strlen($dernierElementContent));

                              $content = "<h2>C'est quoi ça?</h2>" . '<div class="cours__contenu-1"' . $premierElementContent . '</div>'
                                   . '<div class="cours__contenu-2"' . $dernierElementContent . '</div>';
                              return $content;
                         }
                         add_filter('the_content', 'wpa_content_filter');
                         ?>
                         <?php the_post_thumbnail('thumbnail'); ?>
                         <?php the_content(); ?>
                    </section>
               </article>
          <?php endwhile; ?>

     <?php endif; ?>

</main>
<?php get_footer() ?>