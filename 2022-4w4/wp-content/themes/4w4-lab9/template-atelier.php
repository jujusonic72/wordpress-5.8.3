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
          <div class="container__atelier"></div>
          <div class="atelier__desc">
          <p>Description de l'atelier : <?php the_field('resume') ?></p>
          </div>
          <h2>Organisé par : <?php the_field('animateur') ?></h2>
          <div class="atelier__dates">
          <p>Date du début de l'atelier : <?php the_field('datedebut') ?> Date de la fin de l'atelier : <?php the_field('datefin') ?></p>
          </div>
          <p>Jour de l'atelier : <?php the_field('jour') ?></p>
          <div class="atelier__heures">
          <p>Heure du début de l'atelier : <?php the_field('heuredebut') ?> Heure de la fin de l'atelier : <?php the_field('heurefin') ?> Durée de l'atelier : <?php the_field('duree') ?></p>
          </div>
          <p>Local ou se déroulera l’atelier : <?php the_field('local') ?></p>
          </div>
          <?php the_content() ?>
     <?php endif ?>
</main>
<?php get_footer() ?>
