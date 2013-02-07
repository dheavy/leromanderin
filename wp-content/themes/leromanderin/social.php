<section id="social" class="social">
  <div class="container">
    <ul class="social-buttons">
      <li class="twitter-follow-btn">
        <iframe allowtransparency="true" frameborder="0" scrolling="no" src="//platform.twitter.com/widgets/follow_button.html?screen_name=LeRomanDErin&lang=fr" style="width:150px; height:20px;"></iframe>
      </li>
      <li class="tweet-btn">
        <a onclick="_gaq.push(['_trackEvent', 'Social Actions', 'Tweet', 'Use Tweet Button']);" href="https://twitter.com/intent/tweet?button_hashtag=LeRomanDErin&text=<?php echo rawurlencode("Lisez en ligne 'Erin', roman érotique et fascinant, en cours d'écriture par un auteur anonyme.") ?>" class="twitter-hashtag-button" data-url="TODO: Add bit.ly" data-counturl="TODO: Add site URL with tracking" data-lang="en" data-related="litterature" data-count="horizontal">Tweet</a>  
      </li>
      <li class="gplus-btn">
        <g:plus action="share" lang="fr_FR" onendinteraction="endInteraction"></g:plus>
      </li>
      <li class="pin-btn">
        <a onclick="_gaq.push(['_trackEvent', 'Social Actions', 'Pinterest', 'Pin It']);"href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php if(function_exists('the_post_thumbnail')) echo wp_get_attachment_url(get_post_thumbnail_id()); ?>&description=<?php echo rawurlencode("Lisez en ligne 'Erin', roman érotique et fascinant, en cours d'écriture par un auteur anonyme.") ?>" class="pin-it-button" count-layout="horizontal"><img src="//assets.pinterest.com/images/PinExt.png" alt="Pin it" / ></a> <script type="text/javascript" src="http://assets.pinterest.com/js/pinit.js"></script>
      </li>
      <li class="fb-btn">
        <div class="fb-like" data-href="http://leromanderin.com/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false" data-font="trebuchet ms"></div>
      </li>
    </ul>
  </div>
</section>