<?php
/*
Template Name: Accueil
 */
?>


<?php define('WP_USE_THEMES', false); get_header(); ?>

<?php include_once('analytics.php') ?>

<?php erin_get_nav('/') ?>

<header class="jumbotron background-1 masthead">
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; else: ?>
    <p><?php _e('D&eacute;sol&eacute;, rien &agrave; lire par ici.'); ?></p>
    <?php endif; ?>
  </div>
</header>

<?php erin_get_social() ?>

<section class="container">
  
<?php comments_template(); ?> 

<?php get_footer() ?>