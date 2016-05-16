<?php
$cookie_name = "sw_modal";
$cookie_value = "true";
setcookie($cookie_name, $cookie_value, time() + (604800 * 30), "/"); // 604800 = 7 days

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Launchframe
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@whiteboardis">
 
<meta name="twitter:title" content="<?php the_title(); ?>">
<meta name="twitter:description" content="">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory');?>/assets/dist/img/share-img.jpg">
 
<meta name="og:image" content="<?php bloginfo('template_directory');?>/assets/dist/img/og-share.jpg">
<meta property="og:title" content="<?php the_title(); ?>">
<meta property="og:site_name" content="<?php the_title(); ?>">
<meta property="og:type" content="blog">
<meta property="og:description" content="">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if(!isset($_COOKIE['sw_modal'])) { ?>
	<div class="popup-curtain">
		<div class="popup-modal">
			<a href="#!" class="modal-close"><?php include 'assets/src/img/modal/close.svg'; ?></a>
			<div class="row vp-xxs-top-4 vp-md-top-2">
				<div class="col-xxs-10 col-xxs-offset-1 modal-logo u-text-center">
					<?php include 'assets/src/img/modal/modal_logo.svg'; ?>
				</div>
			</div>
			<div class="row vp-xxs-top-2 vp-xxs-bottom-3 vp-md-top-3 vp-md-bottom-4">
				<div class="col-md-6 u-text-center modal-listen">
					<div class="row">
						<div class="col-xxs-10 col-xxs-offset-1">
							<?php include 'assets/src/img/modal/subscribe.svg'; ?>
						</div>
					</div>
					<div class="row vm-sm-top-1 vm-xxs-bottom-1 vm-md-bottom-2">
						<a href="https://itunes.apple.com/us/podcast/mof1-podcast/id1074500173?mt=2" target="_blank"><?php include 'assets/src/img/modal/itunes.svg'; ?></a>
						<a href="http://www.stitcher.com/podcast/mof1-podcast" target="_blank"><?php include 'assets/src/img/modal/stitcher.svg'; ?></a>
					</div>
					<div class="row wtb-sw">
						<h5>Star Wars Day Releases</h5>
						<ul>
							<a href="http://spoke-art.com/collections/joshua-budich" target="_blank">
								<li>
									Spoke Art's Shop:<br />
									Kylo Ren Laser Etching
								</li>
							</a>
							<a href="http://joshuabudich.bigcartel.com" target="_blank">
								<li>
									Joshua's Shop:<br />
									Vader, Fett, Tie Troop Laser
								</li>
							</a>
						</ul>
					</div>
				</div>
				<div class="col-md-6 u-text-center modal-watch">
					<a href="http://audio.simplecast.com/37021.mp3" target="_blank">
						<img src="<?php bloginfo('template_directory');?>/assets/src/img/modal/sw_promo.png">
					</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'launchframe' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<?php get_template_part('_player'); ?>
		<?php get_template_part('_navigation'); ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

	<!-- <section>
		<div class="container u-bg-lightgray">
			<div class="row">
				<div class="col-md-6 col-lg-7">
					<p class="vm-xs-bottom-0 cta-home-text"><strong>Mof1 Creative Companion Tee:</strong> Show your support for your favorite show! Wear it in the studio. Wear it when you customize. Wear it, and be inspired!</p>
					<a class="button lg-btn u-clear cta-home-button" style="margin-bottom: 0;" href="https://represent.com/mof1-cc" target="_blank">Buy your tee now!</a>
				</div>
				<div class="col-md-6 col-lg-5 u-clear u-text-center u-overlay cta-home-image" style="background-image: url('<?php bloginfo('template_directory');?>/assets/src/img/mof1-creative-shirt-AD.png'); height: 140px;">
				</div>
			</div>
		</div>
	</section> -->
