<?php
/*
Template Name: Chapitre
 */
?>

<?php define('WP_USE_THEMES', false); get_header(); ?>

<?php include_once('analytics.php') ?>

<?php erin_get_nav('chapitre') ?>

<header class="jumbotron background-0 masthead">
  <div class="container chapter">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; else: ?>
    <p><?php _e('D&eacute;sol&eacute;, rien &agrave; lire par ici.'); ?></p>
    <?php endif; ?>

  </div>
</header>

<?php erin_get_social() ?>

<aside id="reader-control">
	<section id="font-size-control">
		<a href="" id="font-size-smaller" class="small" alt="Cliquez ici pour baisser la taille du texte" title="Baissez la taille du texte">A</a>
		...
		<a href="" id="font-size-default" class="default" alt="Cliquez ici pour revenir &agrave; la taille du texte" title="Remettre le texte &agrave; la taille par d&eacute;faut">A</a>
		...
		<a href="" id="font-size-bigger" class="large" alt="Cliquez ici pour augmenter la taille du texte" title="Augmentez la taille du texte">A</a>
	</section>
	<hr>
	<nav>
		<a id="back-to-top" href="#" alt="Cliquez ici pour revenir au d&eacute;but de la page" title="Remonter au d&eacute;but de la page">d&eacute;but de page</a>
	</nav>
</aside>

<section class="container">
  
<?php comments_template(); ?> 

<?php get_footer() ?>