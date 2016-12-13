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

get_header(); ?>

<section>
	<div class="container">
		<div class="row vp-xs-top-1">
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
