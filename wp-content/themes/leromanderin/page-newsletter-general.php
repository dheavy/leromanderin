<?php
/*
Template Name: Newsletter (général)
 */
?>

<?php define('WP_USE_THEMES', false); get_header(); ?>

<?php include_once('analytics.php') ?>

<?php erin_get_nav('newsletter') ?>

<header class="jumbotron background-0 masthead smaller">
  <div class="container newsletter">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>

	</div>
</header>

<?php erin_get_social() ?>

<section class="container">

<?php get_footer() ?>