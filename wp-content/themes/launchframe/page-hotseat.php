<?php
/**
 * @package Launchframe
 */

get_header(); ?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12" style="height: 280px;">
				<div class="u-overlay u-overlay-img" style="background-image: url('<?php get_template_directory_uri(); ?>/wp-content/themes/launchframe/assets/src/img/Hotseat_Header.png');"></div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="hs-interviews">
				<?php if( have_rows('interviews') ): while ( have_rows('interviews') ) : the_row(); ?>
					<li>
						<img src="<?php the_sub_field('image'); ?>">
						<div class="hs-meta">
							<h3 class="hs-name"><?php the_sub_field('name'); ?></h3>
							<h6 class="hs-affiliation"><?php the_sub_field('affiliation'); ?></h6>
						</div>
						<div class="hs-social">
						<?php if( have_rows('social') ): while ( have_rows('social') ) : the_row(); ?>
							<a class="social-links" href="<?php the_sub_field('social_url'); ?>" target="_blank"><i class="icon-<?php the_sub_field('social_name'); ?>"></i></a>
						<?php endwhile; else : endif; ?>
						</div>
						<a href="<?php the_sub_field('url'); ?>" class="button">Listen Now</a>
					</li>
				<?php endwhile; else : endif; ?>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>