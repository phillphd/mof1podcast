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
		<div class="row vp-xs-top-1">
			<div class="col-md-12">
				<h2>Network News</h2>
				<?php the_field('description'); ?>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<?php if( have_rows('network_news') ) : while ( have_rows('network_news') ) : the_row();
				$hex = get_sub_field('hex_code');
				list($r, $g, $b) = array($hex[0].$hex[1],$hex[2].$hex[3],$hex[4].$hex[5]);
				$r = hexdec($r);
				$g = hexdec($g);
				$b = hexdec($b);
			?>
				<div class="col-md-6 arc-half-height network-news">
					<div class="u-overlay u-overlay-img" style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
					<div class="u-overlay u-color" style="background-color: rgba(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b; ?>,.7);"></div>
					<p><strong><?php the_sub_field('title'); ?></strong></p>
					<p style="line-height: .9; font-size: 15px;"><em><?php the_sub_field('author'); ?></em></p>
					<p class="airdate">(Aired: <?php the_sub_field('air_date'); ?>)</p>
					<a class="button sm-btn" href="<?php the_sub_field('url'); ?>">Read On <?php the_sub_field('source'); ?></a>
					<div class="news-media-type" style="background-image: url('<?php get_template_directory_uri(); ?>/wp-content/themes/launchframe/assets/src/img/<?php the_sub_field('media_type'); ?>_icon.png');"></div>
				</div>
			<?php endwhile; else : endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>