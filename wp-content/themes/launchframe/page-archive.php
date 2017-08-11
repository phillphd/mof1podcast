<?php
/**
 * @package Launchframe
 */

get_header();

$the_archive = '';

if (false === ($the_archive = get_transient('the_archive'))) {

    $args = array(
		'post_type'  => 'episodes',
		'posts_per_page' => -1
	);
	$episodes = new WP_Query($args);

    $simplecast = Simplecast\ClientFactory::factory([
    	'apiKey' => 'sc_VS6l8ZdZTuWaX-Y-MUtANg'
	]);
     $api_episodes = $simplecast->podcastEpisodes([
    	'podcast_id' => 1607
	]);

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

	$the_archive = '<section id="the-archive"><div class="container" style="max-width: 1200px;">';
	if ($episodes->have_posts()) {
		while ($episodes->have_posts()) { $episodes->the_post();
			$episode_sc_data = array_values(array_filter($api_episodes, function($ep) {
				$episode_id = get_field('episode_id');
				return $ep["id"] == $episode_id;
			}))[0];
			$the_archive .= $headings[$i];
			$the_archive .= '<div class="episode-box__img" style="background-image: url(' . $episode_sc_data["images"]["small"] . ');"></div>';
			$the_archive .= '<div class="episode-box__meta">';
			$the_archive .= '<p>' . $episode_sc_data["title"] . '</p>';
			$the_archive .= '<p class="airdate">(Aired: ' . date("F jS, Y", strtotime($episode_sc_data["published_at"])) . ')</p>';
			$the_archive .= '<a class="button sm-btn" href="' . get_the_permalink() . '">Read Episode Recap</a>';
			$the_archive .= '</div></div>';
			$i++;
			if ($i == 12) {
				$i = 0;
				$the_archive .= "";
			};
		}
		wp_reset_postdata();
	}
	$the_archive .= '</div></section>';

	set_transient('the_archive', $the_archive, 12 * HOUR_IN_SECONDS);
}

echo $the_archive; ?>

<?php get_footer(); ?>