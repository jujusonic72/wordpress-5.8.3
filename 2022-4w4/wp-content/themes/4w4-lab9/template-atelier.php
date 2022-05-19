<?php
/**
* Template Name: atelier
*
* @package WordPress
* @subpackage cidw-4w4
*/
get_header();
?>

<main class="site__main">

     <?php if (have_posts()) : the_post(); ?>
          <h1><?php the_title() ?></h1>
          <?php
          $image = get_field('image');
          if (!empty($image)) : ?>
               <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
          <?php endif ?>
          <p>Description de l'atelier : <?php the_field('resume') ?></p>
          <h2>Organisé par : <?php the_field('animateur') ?></h2>
          <p>Date du début de l'atelier : <?php the_field('dateDebut') ?></p>
          <p>Date de la fin de l'atelier : <?php the_field('dateFin') ?></p>
          <p>Jour de l'atelier : <?php the_field('jour') ?></p>
          <p>Heure du début de l'atelier : <?php the_field('heureDebut') ?></p>
          <p>Heure de la fin de l'atelier : <?php the_field('heureFin') ?></p>
          <p>Durée de l'atelier : <?php the_field('duree') ?></p>
          <p>Local ou se déroulera l’atelier : <?php the_field('local') ?></p>
          <?php the_content() ?>
     <?php endif ?>
</main>
<?php get_footer() ?>
