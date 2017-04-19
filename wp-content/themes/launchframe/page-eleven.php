<?php
/**
 * @package Launchframe
 */

get_header();

if (false === ($episodes = get_transient('episodes'))) {
    $args = array(
		'post_type'  => 'episodes',
		'posts_per_page' => -1
	);
	$episodes = new WP_Query($args);
    set_transient('episodes', $episodes, 12 * HOUR_IN_SECONDS);
}

if (false === ($api_episodes = get_transient('api_episodes'))) {
	$simplecast = Simplecast\ClientFactory::factory([
    	'apiKey' => 'sc_VS6l8ZdZTuWaX-Y-MUtANg'
	]);
     $api_episodes = $simplecast->podcastEpisodes([
    	'podcast_id' => 1607
	]);
    set_transient('api_episodes', $api_episodes, 12 * HOUR_IN_SECONDS);
}

?>

<style>
	.site-header__logo svg polygon,
	.site-header__logo svg path {
		fill: #FFF;
	}
	.site-header__divider::before,
	.site-header__logo::before,
	.button.sm-btn:hover {
		background-color: #FFF;
	}
	.episode-box__meta,
	.main-navigation a,
	.button.sm-btn {
		color: #FFF;
	}
	.button.sm-btn {
    	border-color: #FFF;
	}
	.site-header__logo::after,
	.site-footer__logo::after,
	body {
		background-color: #282727;
	}
	.episode-box__img {
		border: 5px solid #282727;
	}
	.episode-box__img::after {
		background-color: rgba(40, 39, 39, 0.9);
	}
	.button.sm-btn:hover {
    	color: #282727;
	}

	canvas{
		display: block;
		vertical-align: bottom;
	}
	#particles-js {
		position: fixed;
		top: 0;
		left: 0;
		z-index: -1;
		width: 100%;
		height: 100%;
		background-color: #282727;
		background-image: url("");
		background-repeat: no-repeat;
		background-size: cover;
		background-position: 50% 50%;
	}
</style>

<div id="particles-js"></div>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<script type="text/javascript">
	particlesJS("particles-js", {"particles":{"number":{"value":300,"density":{"enable":true,"value_area":300}},"color":{"value":"#fff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#FFF"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.1,"random":true,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":4,"random":true,"anim":{"enable":false,"speed":20,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":500,"color":"#FFF","opacity":0.4,"width":2},"move":{"enable":true,"speed":2,"direction":"top-left","random":true,"straight":true,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"grab"},"onclick":{"enable":false,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":150,"line_linked":{"opacity":0.05}},"bubble":{"distance":400,"size":4,"duration":0.3,"opacity":1,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":false});
</script>

<section id="the-archive">
	<div class="container" style="max-width: 1200px;">
		<?php
			$headings = array(
				'<div class="row"><div class=" col-lg-6 episode-box arc-full-height">', 
				'<div class=" col-lg-6"><div class="row"><div class=" col-lg-6 episode-box arc-half-height">', 
				'<div class=" col-lg-6 episode-box arc-half-height">', 
				'<div class=" col-lg-12 episode-box arc-half-height">', 
				'</div></div></div><div class="row"><div class=" col-lg-3 episode-box arc-half-height">', 
				'<div class=" col-lg-3 episode-box arc-half-height">', 
				'<div class=" col-lg-3 episode-box arc-half-height">', 
				'<div class=" col-lg-3 episode-box arc-half-height">', 
				'</div><div class="row"><div class=" col-lg-6"><div class="row"><div class=" col-lg-6 episode-box arc-half-height">', 
				'<div class=" col-lg-6 episode-box arc-half-height">', 
				'<div class=" col-lg-12 episode-box arc-half-height">', 
				'</div></div><div class=" col-lg-6 episode-box arc-full-height">'
			);
			$i = 0;

			if ($episodes->have_posts()) {
				while ($episodes->have_posts()) { $episodes->the_post();
					$episode_sc_data = array_values(array_filter($api_episodes, function($ep) {
						$episode_id = get_field('episode_id');
						return $ep["id"] == $episode_id;
					}))[0];
					echo $headings[$i]; ?>
					<div class="episode-box__img" style="background-image: url('<?php echo $episode_sc_data["images"]["small"]; ?>');"></div>
					<div class="episode-box__meta">
						<p><?php echo $episode_sc_data["title"]; ?></p>
						<p class="airdate">(Aired: <?php echo date("F jS, Y", strtotime($episode_sc_data["published_at"])); ?>)</p>
						<a class="button sm-btn" href="<?php the_permalink(); ?>">Read Episode Recap</a>
					</div>
				</div>
				<?php $i++; if ( $i == 12 ) { $i = 0; echo ""; };
				}
				wp_reset_postdata();
			}
		?>
	</div>
</section>

<?php get_footer(); ?>