<?php
/**
 * @package Launchframe
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post();

$simplecast = Simplecast\ClientFactory::factory([
    'apiKey' => 'sc_VS6l8ZdZTuWaX-Y-MUtANg'
]);

$episode = $simplecast->podcastEpisode([
    'podcast_id' => get_field('podcast_id'),
    'episode_id' => get_field('episode_id')
]);

?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="episode-header">
					<div class="abs-img with-overlay" style="background-image: url(<?php echo $episode["images"]["large"]; ?>);"></div>
					<h1><?php echo $episode["title"]; ?></h1>
					<iframe frameborder='0' height='36px' scrolling='no' seamless src='https://simplecast.com/e/<?php echo $episode["id"]; ?>?style=light' width='100%'></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="vm-xs-top-3">
	<div class="container">
		<div class="row">
			<div class="col-md-9 u-pad-right">
				<div>
					<h4>Episode Synopsis</h4>
					<p><?php echo $episode["description"]; ?></p>
				</div>
				<div class="vm-xs-top-3">
					<?php if( have_rows('guest_bio') ) : while ( have_rows('guest_bio') ) : the_row(); ?>
						<h4>Guest Bio</h4>
						<div class="row guest-bio">
							<?php if(get_sub_field('guest_image')) { ?>
								<div class="col-sm-2">
									<div class="guest-image">
										<div class="abs-img" style="background-image: url(<?php the_sub_field('guest_image'); ?>);"></div>
									</div>
								</div>
								<div class="col-sm-10" style="padding: 0 10px;">
							<?php } else { ?>
								<div class="col-sm-12">
							<?php } ?>
								<h5><?php the_sub_field('guest_name'); ?></h5>
								<p><?php the_sub_field('guest_bio'); ?></p>
								<div class="u-text-right">
									<?php if( have_rows('guest_social') ) : while ( have_rows('guest_social') ) : the_row(); ?>
										<a class="social-links" href="<?php the_sub_field('social_url'); ?>" target="_blank"><i class="fa fa-<?php the_sub_field('social_name'); ?>"></i></a>
									<?php endwhile; else : endif; ?>
									<?php if(get_sub_field('guest_website_url')) { ?>
										<a class="button sm-btn" style="margin: 0;" href="<?php the_sub_field('guest_website_url'); ?>" target="_blank">Visit Website</a>
									<?php } ?>
								</div>
							</div>
						</div>
					<?php endwhile; else : endif; ?>
				</div>
				<div class="vm-xs-top-3">
					<h4>Episode Links</h4>
					<div class="row vp-xs-top-1 u-bg-lightgray u-pad-left u-pad-right single-episode-links">
						<p>We referenced a few things throughout the episode. Here is a list of some links and photos we talked about! Enjoy!</p>
						<p><?php echo $episode["long_description"]; ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<img class="u-mobile-hide" src="<?php echo $episode["images"]["large"]; ?>">
				<div class="row vm-xs-top-1">
					<ul id="share-buttons">
						<li><a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
						<li><a href="http://twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php echo get_the_title(); ?>&hashtags=mof1podcast" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
						<li><a href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
						<li><a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="row vm-xs-top-1">
					<div class="mof1-ad mof1-ad--single" style="background-image: url(<?php bloginfo('template_directory');?>/assets/src/img/infinity/BF-Infinity-Side.png);">
						<a href="https://www.baronfig.com/products/infinity?utm_source=mof1podcast&utm_campaign=Baron_Fig__Infinity&utm_medium=website" title="Infinity by Baron Fig" target="_blank"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
