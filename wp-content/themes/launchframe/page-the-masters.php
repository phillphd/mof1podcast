<?php
/**
 * @package Launchframe
 */

get_header(); ?>

<style>
	@media only screen and (min-width: 960px) {
		#site-navigation {
		    margin-bottom: 0;
		}
	}
</style>

<section>
	<div class="container">
		<div class="row u-bg-lightgray master-info">
			<div class="col-xs-12 col-md-4 col-xl-5 master-image">
				<div class="u-overlay u-overlay-img" style="background-image: url('<?php get_template_directory_uri(); ?>/wp-content/themes/launchframe/assets/src/img/about-patrick.jpg');"></div>
				<div class="master-photo">
					<div class="u-overlay u-overlay-img" style="background-image: url('<?php get_template_directory_uri(); ?>/wp-content/themes/launchframe/assets/src/img/Pat-Profile.png');"></div>
				</div>
				<div class="master-title">
					<h2>Patrick Hill</h2>
					<p><em>Master of TV &amp; Film</em></p>
				</div>
				<div class="master-icon">
					<?php include 'assets/src/img/icon_film.svg'; ?>
				</div>
				<div class="master-social">
					<a class="social-links social-padding" href="https://instagram.com/thegreatpaatsby" class="social-links"><i class="icon-instagram"></i></a>
				</div>
			</div>
			<div class="col-xs-12 col-md-8 col-xl-7 vp-xs-top-1 u-pad-left u-pad-right">
				<h2>Why TV &amp; Film</h2>
				<p><?php the_field('why_tv_&_film') ?></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae nunc eu leo pretium finibus ut sed ipsum. Proin venenatis massa ligula, semper consequat urna porta at. Praesent pulvinar risus vitae ipsum vestibulum pulvinar. Cras consequat libero vel commodo vestibulum. Vestibulum pellentesque sem ut accumsan pretium. Vivamus aliquet mollis risus, sed malesuada metus vestibulum sit amet. Nunc pharetra porttitor pharetra. Aliquam ac mauris cursus, viverra massa eu, pharetra nisi. Suspendisse cursus eleifend tortor et vestibulum.</p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row u-bg-lightgray master-info">
			<div class="col-xs-12 col-md-4 col-xl-5 master-image">
				<div class="u-overlay u-overlay-img" style="background-image: url('<?php get_template_directory_uri(); ?>/wp-content/themes/launchframe/assets/src/img/about-luke.jpg');"></div>
				<div class="master-photo">
					<div class="u-overlay u-overlay-img" style="background-image: url('<?php get_template_directory_uri(); ?>/wp-content/themes/launchframe/assets/src/img/Luke-Profile.png');"></div>
				</div>
				<div class="master-title">
					<h2>Luke Gaul</h2>
					<p><em>Master of Toys &amp; Games</em></p>
				</div>
				<div class="master-icon">
					<?php include 'assets/src/img/icon_games.svg'; ?>
				</div>
				<div class="master-social">
					<a class="social-links social-padding" href="https://www.facebook.com/luke.gaul"><i class="icon-facebook"></i></a><a href="https://twitter.com/lukegaul" class="social-links"><i class="icon-twitter"></i></a><a href="https://instagram.com/lukegaul" class="social-links"><i class="icon-instagram"></i></a>
				</div>
			</div>
			<div class="col-xs-12 col-md-8 col-xl-7 vp-xs-top-1 u-pad-left u-pad-right">
				<h2>Why Toys &amp; Games</h2>
				<p><?php the_field('why_toys_&_games') ?></p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row u-bg-lightgray master-info">
			<div class="col-xs-12 col-md-4 col-xl-5 master-image">
				<div class="u-overlay u-overlay-img" style="background-image: url('<?php get_template_directory_uri(); ?>/wp-content/themes/launchframe/assets/src/img/about-andrew.jpg');"></div>
				<div class="master-photo">
					<div class="u-overlay u-overlay-img" style="background-image: url('<?php get_template_directory_uri(); ?>/wp-content/themes/launchframe/assets/src/img/Andrew-Profile.png');"></div>
				</div>
				<div class="master-title">
					<h2>Andrew Sale</h2>
					<p><em>Master of Art &amp; Design</em></p>
				</div>
				<div class="master-icon">
					<?php include 'assets/src/img/icon_design.svg'; ?>
				</div>
				<div class="master-social">
					<a class="social-links social-padding" href="https://www.facebook.com/jonathan.a.sale"><i class="icon-facebook"></i></a><a href="https://twitter.com/andr3wsal3" class="social-links"><i class="icon-twitter"></i></a><a href="https://instagram.com/Andr3wSal3" class="social-links"><i class="icon-instagram"></i></a>
				</div>
			</div>
			<div class="col-xs-12 col-md-8 col-xl-7 vp-xs-top-1 u-pad-left u-pad-right">
				<h2>Why Art &amp; Design</h2>
				<p><?php the_field('why_art_&_design') ?></p>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>