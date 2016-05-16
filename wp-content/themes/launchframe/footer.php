<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Launchframe
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row vm-xs-bottom-1 vp-xs-top-1 vp-xs-bottom-1 u-bg-gray mail-signup">
				<div class="col-md-6 u-text-center">
					<h4>Sign Up For Exclusive Content</h4>
					<p><em>Good stuff ONLY. Don't worry... we will NOT spam you! For reals!</em></p>
				</div>
				<div class="col-md-6">
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
						<form action="//mof1podcast.us11.list-manage.com/subscribe/post?u=6dc02cf6ffcae8578be9f632b&amp;id=fb39b5f9a9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">
								<div class="mc-field-group">
									<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your Email Goes Here...">
									<input type="submit" value="&rarr;" name="subscribe" id="mc-embedded-subscribe" class="button">
								</div>
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    	<div style="position: absolute; left: -5000px;">
						    		<input type="text" name="b_6dc02cf6ffcae8578be9f632b_fb39b5f9a9" tabindex="-1" value="">
						    	</div>
						    </div>
						</form>
					</div>

					<!--End mc_embed_signup-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-5 u-bg-gray copyright">
					<h4>Peace Out. Bye. Hold on to Your Butts.</h4>
					&copy;2015 Master Of One Podcast<br />
					All Rights Reserved
				</div>
				<div class="col-md-6 col-lg-7">
					<ul>
						<li><?php include 'assets/src/img/icon_design.svg'; ?></li>
						<li><?php include 'assets/src/img/icon_games.svg'; ?></li>
						<li><?php include 'assets/src/img/icon_film.svg'; ?></li>
						<li><?php include 'assets/src/img/icon_random.svg'; ?></li>
						<li><?php include 'assets/src/img/icon_food.svg'; ?></li>
						<li><?php include 'assets/src/img/icon_books.svg'; ?></li>
						<li><?php include 'assets/src/img/icon_itunes_alt.svg'; ?></li>
						<li><?php include 'assets/src/img/icon_logo.svg'; ?></li>
					</ul>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type='text/javascript' src='<?php get_site_url(); ?>/wp-content/themes/launchframe/assets/src/js/mediaelement-and-player.min.js'></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51909412-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
