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
				<div class="col-xxs-12 modal-logo u-text-center">
					<?php include 'assets/src/img/logo-gradient.svg'; ?>
					<p>Official Podcast Partner</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xxs-12 col-md-8 col-md-offset-2 modal-content u-text-center" style="border-top: 1px solid #FFF">
					<p>A life-changing experience, no matter where you’re located!</p>
					<p>We’re proud to partner with reimagine to provide livestream tickets so that you can engage in the conference from home, from work, from anywhere! </p>
					<?php include 'assets/src/img/reimagine.svg'; ?>
					<a href="https://reimagineconference.com/#tickets" target="_blank" class="button">Get Your Tickets Now</a>
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
