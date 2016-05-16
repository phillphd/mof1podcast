<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Launchframe
 */

get_header(); ?>

<section style="margin-top: 20px;">
	<div class="container error-404 not-found">
		<div class="row">
			<div class="col-xs-12 u-pad-none u-text-center">
				<h1>404</h1>
			</div>
			<div class="col-xs-12 u-pad-none">
				<img src="<?php bloginfo('template_directory');?>/assets/src/img/404-Castle.png">
			</div>
			<div class="col-xs-12 col-md-8 col-md-offset-2 u-pad-none u-text-center">
				<h2>We're sorry, but the page you're looking for is in another castle!</h2>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
