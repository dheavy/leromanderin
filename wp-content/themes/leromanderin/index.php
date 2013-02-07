<?php get_header() ?>

<?php erin_get_nav() ?>

<header class="jumbotron background-1 masthead">
  <div class="container">
    <h1>Erin</h1>
    <p>Un roman.</p>
    <p class="smaller">Projet litt&eacute;raire en cours d'&eacute;criture, auteur discret(e).<br>
      Rep&eacute;r&eacute;(e) une erreur ? Envie de donner vos impressions ?<br>
      Merci d'utiliser la <a href="#">boîte de commentaires ci-dessous.</a></p>
    <p><a href="#" class="btn btn-primary btn-large" onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'Download', 'Download 2.2.2']);">Lire le premier chapitre</a></p>-->
  </div>
</header>

<section class="social">
  <div class="container">
    <ul class="social-buttons">
      <li class="follow-btn">
        <iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/follow_button.1359159993.html#_=1360191179013&amp;id=twitter-widget-1&amp;lang=en&amp;screen_name=twbootstrap&amp;show_count=true&amp;show_screen_name=true&amp;size=m" class="twitter-follow-button twitter-follow-button" style="width: 236px; height: 20px;" title="Twitter Follow Button" data-twttr-rendered="true"></iframe>
      </li>
      <li class="tweet-btn">
        <iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.1359159993.html#_=1360191178879&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Ftwitter.github.com%2Fbootstrap%2F&amp;related=mdo%3ACreator%20of%20Twitter%20Bootstrap&amp;size=m&amp;text=Bootstrap&amp;url=http%3A%2F%2Ftwitter.github.com%2Fbootstrap%2F&amp;via=twbootstrap" class="twitter-share-button twitter-count-horizontal" style="width: 107px; height: 20px;" title="Twitter Tweet Button" data-twttr-rendered="true"></iframe>
      </li>
    </ul>
  </div>
</section>

<section class="container">

  <?php comments_template(); ?> 

<?php get_footer() ?>