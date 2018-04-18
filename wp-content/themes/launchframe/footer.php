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
		<div class="site-footer__divider">
			<div class="site-footer__logo">
				<a href="/">
					<?php include 'assets/src/img/home/logo_mark.svg'; ?>
				</a>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul>
						<li><a href="mailto:patrick@mof1podcast.com">Contact</a></li>
						<li><a href="mailto:patrick@mof1podcast.com">Sponsorship</a></li>
						<li><a href="mailto:patrick@mof1podcast.com">Advertise</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 copyright">
					© 2014-<?php echo date("Y"); ?> Master of One, LLC
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

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
