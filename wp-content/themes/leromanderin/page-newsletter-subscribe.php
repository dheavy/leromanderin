<?php
/*
Template Name: Newsletter (inscription)
 */
?>

<?php define('WP_USE_THEMES', false); get_header(); ?>

<?php include_once('analytics.php') ?>

<?php erin_get_nav('newsletter') ?>

<header class="jumbotron background-0 masthead">
  <div class="container newsletter">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>

		<div class="newsletter-subscription">
			<form class="form-horizontal" method="post" action="http://leromanderin.local/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">
			  <fieldset>
			    <legend>Je veux &ecirc;tre pr&eacute;venu(e) de la sortie de nouveaux chapitres</legend>
			    <div id="error" class="alert hide">
					  <button type="button" class="close" id="close-btn">&times;</button>
					  <strong>Oups !</strong> Votre email est invalide.
					</div>
			    <div class="control-group">
				    <label class="control-label for-email" for="inputEmail">Email</label>
				    <div class="controls">
				      <input type="text" id="inputEmail" placeholder="Email" class="newsletter-email" name="ne">
				    </div>
				  </div>
				  <div class="control-group">
				    <div class="controls">
				      <button type="submit" class="btn btn-primary btn-small newsletter-submit">Je m'inscris pour les mises à jour</button>
				    </div>
				  </div>
			  </fieldset>
			</form>
		</div>

		<script type="text/javascript">
			if (typeof newsletter_check !== "function") {
				var error = document.getElementById('error');
				error.className = "alert hide";
				window.newsletter_check = function (f) {
			    var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
			    if (!re.test(f.elements["ne"].value)) {
		        error.className = "alert";
		        return false;
			    }
			    return true;
				}

				var close = document.getElementById('close-btn');
				close.onclick = function() {
					error.className = "alert hide";
				}
			}
		</script>

	</div>
</header>

<?php erin_get_social() ?>

<section class="container">

<?php get_footer() ?>