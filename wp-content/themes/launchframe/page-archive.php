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