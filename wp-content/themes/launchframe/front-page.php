<?php
/**
 * @package Launchframe
 */

get_header(); ?>

<?php $args = array( 'posts_per_page' => 1 );
	$myposts = get_posts( $args );
	foreach ( $myposts as $post ) : setup_postdata( $post ); 
		$the_number = get_field('episode_number');
		$the_title = get_field('episode_title');
		$the_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
		$the_image = $the_image[0];
	?>
<section style="margin-top: 20px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-5 u-pad-right">
				<h2>This Week's Episode</h2>
				<div class="ep-box u-text-center">
					<h3>Episode <span class="ep-number"><?php echo $the_number; ?></span></h3>
					<h4><?php echo $the_title; ?></h4>
				</div>
				<h5><strong><em>Episode Synopsis</em></strong></h5>
				<p><?php the_field('episode_synopsis'); ?></p>
				
				<?php if (get_field('episode_type') == 'part_1') { ?>
					<h5><strong><em>Master Categories</em></strong></h5>
					<?php the_field('master_categories'); ?>
				<?php } elseif (get_field('episode_type') == 'part_2') { ?>
					<h5><strong><em>Sandbox</em></strong></h5>
					<?php the_field('sandbox'); ?>
				<?php } else { ?>
					<h5><strong><em>Master Categories</em></strong></h5>
					<?php the_field('master_categories'); ?>
					<h5><strong><em>Sandbox</em></strong></h5>
					<?php the_field('sandbox'); ?>
				<?php } ?>
				<br />
				<a class="button u-right home-episode-button" href="<?php the_permalink(); ?>">Read Episode Recap</a>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-7 vm-xs-top-1 vm-md-top-0 u-pad-none">
				<img src="<?php echo $the_image; ?>">
			</div>
		</div>
	</div>
</section>

<?php 
	endforeach; 
	wp_reset_postdata();
?>

<?php if (get_field('cta_text')) { ?>
	<section>
		<div class="container u-bg-lightgray">
			<div class="row">
				<div class="col-md-6 col-lg-7">
					<p class="vm-xs-bottom-0 cta-home-text"><?php the_field('cta_text'); ?></p>
					<?php if (get_field('cta_button_text')) { ?>
						<a class="button lg-btn u-clear cta-home-button" style="margin-bottom: 0;" href="<?php the_field('cta_button_url'); ?>"><?php the_field('cta_button_text'); ?></a>
					<?php } ?>
				</div>
				<div class="col-md-6 col-lg-5 u-clear u-text-center u-overlay cta-home-image" style="background-image: url('<?php the_field('cta_image'); ?>'); height: 140px;">
				</div>
			</div>
		</div>
	</section>
<?php } ?>

<?php get_footer(); ?>