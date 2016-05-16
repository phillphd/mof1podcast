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
			<div class="row vp-xxs-bottom-2">
				<div class="col-xs-12 u-text-center">
					<h5 class="text-brand">Follow Us To Keep Up</h5>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 u-text-center">
					<ul class="social-list">
						<li><a href="#!"><?php include 'assets/conference/social-facebook.svg'; ?></a></li>
						<li><a href="#!"><?php include 'assets/conference/social-email.svg'; ?></a></li>
						<li><a href="#!"><?php include 'assets/conference/social-twitter.svg'; ?></a></li>
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
