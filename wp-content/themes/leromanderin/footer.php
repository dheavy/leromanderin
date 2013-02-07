		<footer>
        <p>&copy; Projet Erin 2012 - <?php echo date('Y') ?></p>
    </footer>

	  </section> <!-- /container -->

	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	  <script>window.jQuery || document.write('<script src="<?php bloginfo('stylesheet_directory') ?> /js/vendor/jquery-1.9.0.min.js"><\/script>')</script>

	  <script src="<?php bloginfo('stylesheet_directory') ?>/js/vendor/bootstrap.min.js"></script>

	  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

	  <script type="text/javascript">
      window.___gcfg = {
        lang: 'fr-FR'
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
	  		$(window).scrollTop($('#social').position().top - $('nav').height());
		  });
		});
	  </script>
	</body>
</html>