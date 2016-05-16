<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Launchframe
 */

get_header('conference'); ?>

<section>
	<div class="container">
		<div class="row vm-xxs-top-5 vm-md-bottom-3 vm-md-top-8">
			<div class="col-md-4 vm-md-top-3 display-desktop">
				<h5>Chattanooga, TN</h5>
			</div>
			<div class="col-md-4 u-text-center the-mof1-mark">
				<?php include 'assets/conference/mark-mof1.svg'; ?>
			</div>
			<div class="col-md-4 vm-md-top-3 u-text-right display-desktop">
				<h5>September 10 - 11</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 u-text-center">
				<?php include 'assets/conference/mark-conference.svg'; ?>
			</div>
		</div>
		<div class="row display-mobile">
			<div class="col-xxs-12 u-text-center">
				<h5>Chattanooga, TN</h5>
				<h5>September 10 - 11</h5>
			</div>
		</div>
		<div class="row vm-xxs-bottom-5 vm-xxs-top-8 vm-md-bottom-8">
			<div class="col-md-12 u-text-center">
				<h5 class="text-brand">Featuring keynotes and workshops by creative giants</h5>
			</div>
		</div>
		<div class="row vm-xxs-bottom-2">
			<div class="col-lg-6 col-lg-offset-3">
				<?php echo do_shortcode('[ninja_forms id=7]'); ?>
			</div>
		</div>
		<div class="row vm-xxs-bottom-5 vm-md-bottom-8">
			<div class="col-md-12 u-text-center">
				<h4>Tickets coming soon. Sign up here to know first.</h4>
			</div>
		</div>
	</div>
</section>

<?php get_footer('conference'); ?>