		<footer>
        <span>&copy; Projet Erin 2012 - <?php echo date('Y') ?></span>
        <span>- Illustration en page d'accueil inspir&eacute;e du travail de <a href="http://peterbeavis.com/" target="_blank" alt="Cliquez ce lien pour visiter le site du photographe Peter Beavis" title="Visiter le site de Peter Beavis">Peter Beavis</a></span>
    </footer>
		</section> <!-- /container -->

	  <div id="fb-root"></div>
		<script>
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		var intervalFBID = setInterval(useFB, 1000);
		function useFB() {
			console.log('Trying FB');
	    try {
		    if (FB && FB.Event && FB.Event.subscribe) {
					FB.Event.subscribe('edge.create', function(targetUrl) {
					  _gaq.push(['_trackSocial', 'facebook', 'like', targetUrl]);
					});

					FB.Event.subscribe('edge.remove', function(targetUrl) {
					  _gaq.push(['_trackSocial', 'facebook', 'unlike', targetUrl]);
					});

					FB.Event.subscribe('message.send', function(targetUrl) {
					  _gaq.push(['_trackSocial', 'facebook', 'send', targetUrl]);
					});

					console.log('FB ready');
					clearInterval(intervalFBID);
				} 
			} catch(e) {}
		}

		</script>

	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	  <script>window.jQuery || document.write('<script src="<?php bloginfo('stylesheet_directory') ?> /js/vendor/jquery-1.9.0.min.js"><\/script>')</script>

	  <script src="<?php bloginfo('stylesheet_directory') ?>/js/vendor/bootstrap.min.js"></script>

	  <script>
	  !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	  
	  var intervalTwttrID = setInterval(useTwttr, 1000);
		function useTwttr() {
			console.log('Trying Twttr');

			try {
			//Wrap event bindings - Wait for async js to load
				if (twttr) {
					twttr.ready(function (twttr) {
				    //event bindings
				    twttr.events.bind('tweet', trackTwitter);
				  });

				  function trackTwitter(intentEvent) {
				    if (intentEvent) {
				      var opt_pagePath;
				      if (intentEvent.target && intentEvent.target.nodeName == 'IFRAME') {
				            opt_target = extractParamFromUri(intentEvent.target.src, 'url');
				      }
				      _gaq.push(['_trackSocial', 'twitter', 'tweet', opt_pagePath]);
				    }
				 	}

				  function extractParamFromUri(uri, paramName) {
					  if (!uri) {
					    return;
					  }
					  var regex = new RegExp('[\\?&#]' + paramName + '=([^&#]*)');
					  var params = regex.exec(uri);
					  if (params != null) {
					    return unescape(params[1]);
					  }
					  return;
					}

					clearInterval(intervalTwttrID);
					console.log('Twttr ready');
				}
			} catch(e) {}
		}
	  </script>

	  <script type="text/javascript">
      window.___gcfg = {
        lang: 'fr-FR'
      };

      function endInteraction(params) {
        _gaq.push(['_trackEvent', 'Social Actions', 'Google +', 'Use G+ Share Button']);
      };

      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>

	  <script>
	  $(function() {
	  	$('.to-comments').click(function(e) {
	  		e.preventDefault();
	  		$(document.body).animate({scrollTop:$('#social').position().top - $('nav').height()}, 'slow');
		  });

	  	if (window.location.href.indexOf('chapitre') != -1) {
				var $backToTop = $('#back-to-top'),
						$smaller = $('#font-size-smaller'),
						$defaults = $('#font-size-default'),
						$bigger = $('#font-size-bigger'),
						$content = $('.chapter p'),
						origSize = parseFloat($content.css('font-size'), 10);

				$backToTop.click(function(e) {
					$(document.body).animate({scrollTop:0}, 'slow');
					e.preventDefault();
				});

				$smaller.click(function(e) {
					e.preventDefault();
					modifyFontSize(0.8);
				});

				$defaults.click(function(e) {
					e.preventDefault();
					$content.css('font-size', origSize);
				});

				$bigger.click(function(e) {
					e.preventDefault();
					modifyFontSize(1.25);
				});

				function modifyFontSize(amount) {
					oldSize = parseFloat($content.css('font-size'), 10);
					$newSize = oldSize * amount;
					$content.css('font-size', $newSize);
				}
			}
		});
	  </script>
	</body>
</html>