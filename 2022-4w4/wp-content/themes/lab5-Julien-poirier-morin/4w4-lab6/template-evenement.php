<?php
/**
* Template Name: evenement
*
* @package WordPress
* @subpackage cidw-4w4
*/
get_header();
?>

<main class="site__main">

     <h1>---- template-evenement.php ------</h1>

     <?php if (have_posts()) : the_post(); ?>
          <?php the_title() ?>
          <?php
          $image = get_field('image');
          if (!empty($image)) : ?>
               <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
          <?php endif ?>
          <h2>L'endroit</h2>
          <p><?php the_field('endroit') ?></p>
          <h2>Organisé par : <?php the_field('organisateur') ?></h2>
          <p>Date de l'evenement : <?php the_field('date') ?></p>
          <p>Heure de l'evenement : <?php the_field('heure') ?></p>
          <p>Description de l'evenement : <?php the_field('resume') ?></p>
          <?php the_content() ?>
     <?php endif ?>
</main>
<?php get_footer() ?>



