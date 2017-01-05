<?php
/**
 * @package Launchframe
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<style type="text/css">
a.latest-episode,
a:hover,
a:active {
	color: #662f46;
}
.tweet ul {
	margin: 0;
	padding: 5px 10px;
	border: 2px solid #662f46;
}
.arrow-down {
	position: relative;
	width: 0; 
	height: 0; 
	margin-right: 30px;
	float: right;
	border-left: 50px solid transparent;
	border-right: 0 solid transparent;
	border-top: 20px solid #662f46;
}
.arrow-down:after {
	position: absolute;
	content: '';
	width: 0; 
	height: 0; 
	right: 2px;
  	top: -23px;
	float: right;
	border-left: 50px solid transparent;
	border-right: 0 solid transparent;
	border-top: 20px solid #FFF;
}
</style>

<?php
if ( has_post_thumbnail() ) {
	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
}
?>

<section style="margin-top: 20px;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 u-pad-right">
				<div class="ep-box">
					<div class="row">
						<div class="col-sm-4 u-text-center">
							<h3 style="margin: 0; line-height: 60px;">Episode <span class="ep-number"><?php the_field('episode_number'); ?></span></h3>
						</div>
						<div class="col-sm-8 u-pad-left u-pad-right">
							<h4><?php the_field('episode_title'); ?></h4>
						</div>
					</div>
				</div>
				<br />
				<div class="header-player">
					<h4 class="u-text-center">Play the Episode</h4>
					<audio class="mejs-player" src="<?php the_field('episode_audio_url'); ?>"></audio>
				</div>
				<br />
				<?php if (get_field('episode_type') == 'part_1') { ?>

					<h5><strong><em>Episode Synopsis</em></strong></h5>
						<p><?php the_field('episode_synopsis'); ?></p>

					<h5><strong><em>Around The Table</em></strong></h5>
						<?php the_field('around_the_table'); ?>

					<h5><strong><em>Master Categories</em></strong></h5>
						<?php the_field('master_categories'); ?>

				<?php } elseif (get_field('episode_type') == 'part_2') { ?>

					<h5><strong><em>Episode Synopsis</em></strong></h5>
					<p><?php the_field('sandbox'); ?></p>
					<?php if( have_rows('guest_bio') ) : while ( have_rows('guest_bio') ) : the_row(); ?>
						<h4 class="vm-xs-top-1 u-color-primary">Guest Bio</h4>
						<div class="row vp-xs-top-1 vp-xs-bottom-1 u-bg-darkgray u-pad-left u-pad-right guest-bio">
							<?php if(get_sub_field('guest_image')) { ?>
								<div class="col-sm-2">
									<img class="guest-image" src="<?php the_sub_field('guest_image'); ?>">
								</div>
								<div class="col-sm-10" style="padding: 0 10px;">
							<?php } else { ?>
							<div class="col-sm-12">
							<?php } ?>
								<h4><?php the_sub_field('guest_name'); ?></h4>
								<p><?php the_sub_field('guest_bio'); ?></p>
								<div class="u-text-right">
									<?php if( have_rows('guest_social') ) : while ( have_rows('guest_social') ) : the_row(); ?>
										<a class="social-links" href="<?php the_sub_field('social_url'); ?>" target="_blank"><i class="icon-<?php the_sub_field('social_name'); ?>"></i></a>
									<?php endwhile; else : endif; ?>
									<?php if(get_sub_field('guest_website_url')) { ?>
										<a class="button sm-btn" style="margin-left: 4px;" href="<?php the_sub_field('guest_website_url'); ?>" target="_blank">Visit Website</a>
									<?php } ?>
								</div>
							</div>
						</div>
					<?php endwhile; else : endif; ?>

				<?php } else { ?>

					<h5><strong><em>Episode Synopsis</em></strong></h5>
						<p><?php the_field('episode_synopsis'); ?></p>

					<h5><strong><em>Around The Table</em></strong></h5>
						<?php the_field('around_the_table'); ?>

					<h5><strong><em>Master Categories</em></strong></h5>
						<?php the_field('master_categories'); ?>

					<h5><strong><em>Sandbox</em></strong></h5>
					<p><?php the_field('sandbox'); ?></p>
					<?php if( have_rows('guest_bio') ) : while ( have_rows('guest_bio') ) : the_row(); ?>
						<h4 class="vm-xs-top-1 u-color-primary">Guest Bio</h4>
						<div class="row vp-xs-top-1 vp-xs-bottom-1 u-bg-darkgray u-pad-left u-pad-right guest-bio">
							<?php if(get_sub_field('guest_image')) { ?>
								<div class="col-sm-2">
									<img class="guest-image" src="<?php the_sub_field('guest_image'); ?>">
								</div>
								<div class="col-sm-10" style="padding: 0 10px;">
							<?php } else { ?>
							<div class="col-sm-12">
							<?php } ?>
								<h4><?php the_sub_field('guest_name'); ?></h4>
								<p><?php the_sub_field('guest_bio'); ?></p>
								<div class="u-text-right">
									<?php if( have_rows('guest_social') ) : while ( have_rows('guest_social') ) : the_row(); ?>
										<a class="social-links" href="<?php the_sub_field('social_url'); ?>" target="_blank"><i class="icon-<?php the_sub_field('social_name'); ?>"></i></a>
									<?php endwhile; else : endif; ?>
									<?php if(get_sub_field('guest_website_url')) { ?>
										<a class="button sm-btn" style="margin-left: 4px;" href="<?php the_sub_field('guest_website_url'); ?>" target="_blank">Visit Website</a>
									<?php } ?>
								</div>
							</div>
						</div>
					<?php endwhile; else : endif; ?>

				<?php } ?>
				<br />
				<h4 class="u-color-primary">Episode Links</h4>
				<div class="row vp-xs-top-1 u-bg-lightgray u-pad-left u-pad-right single-episode-links">
					<p>We referenced a few things throughout the episode. Here is a list of some links and photos we talked about! Enjoy!
					</p><p>
					<?php the_field('episode_links'); ?>
				</div>
				<br />
				<div class="row vm-xs-top-1 row vm-xs-bottom-1">
					<div class="col-sm-3">
						<?php previous_post('%', '<i class="fa fa-chevron-left"></i><em>Previous Episode</em>', 'no'); ?>
					</div>
					<div class="col-sm-6 u-text-center">
						<div id="share-buttons">
							<a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/facebook.jpg" alt="Facebook" /></a>
							<a href="http://twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php echo get_the_title(); ?>&hashtags=mof1podcast" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/twitter.jpg" alt="Twitter" /></a>
							<a href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/google.jpg" alt="Google" /></a> 
							<a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/pinterest.jpg" alt="Pinterest" /></a>
						</div>
					</div>
					<div class="col-sm-3 u-text-right">
						<?php next_post('%', '<em>Next Episode</em><i class="fa fa-chevron-right"></i>', 'no'); ?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<img src="<?php echo $large_image_url[0]; ?>">
				<div class="row vp-xs-top-2">
					<h4 class="u-color-primary">Latest Tweet</h4>
					<div class="tweet"></div>
					<div class="arrow-down"></div>
					<h4 class="u-color-primary">Latest Episodes</h4>
					<?php
					$args = array( 'posts_per_page' => 3 );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post );
					?>
						<div class="chevron">
							<i class="fa fa-angle-right"></i>
						</div>
						<a class="latest-episode" href="<?php the_permalink(); ?>">
							<p style="margin-bottom: 0;"><strong><em>Episode <?php the_field('episode_number'); ?></em>:</strong> <?php the_field('episode_title'); ?></p>
							<p style="font-size: 12px;">(Aired: <?php echo get_the_date(); ?>)</p>
						</a>
					<?php
					endforeach; 
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>

<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/Tweetie-master/tweetie.min.js'></script>
<script type="text/javascript">
	$('.tweet').twittie({
	    'count': 1,
	    'hideReplies': true,
	    'apiPath': '<?php echo get_template_directory_uri(); ?>/js/Tweetie-master/api/tweet.php'
	});
</script>

