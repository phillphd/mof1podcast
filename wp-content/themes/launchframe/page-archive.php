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

<section id="the-archive">
	<div class="container">
		<?php
			$headings = array('<div class="row"><div class=" col-lg-6 arc-full-height">', 
			  '<div class=" col-lg-6"><div class="row"><div class=" col-lg-6 arc-half-height">', 
			  '<div class=" col-lg-6 arc-half-height">', 
			  '<div class=" col-lg-12 arc-half-height">', 
			  '</div></div></div><div class="row"><div class=" col-lg-3 arc-half-height">', 
			  '<div class=" col-lg-3 arc-half-height">', 
			  '<div class=" col-lg-3 arc-half-height">', 
			  '<div class=" col-lg-3 arc-half-height">', 
			  '</div><div class="row"><div class=" col-lg-6"><div class="row"><div class=" col-lg-6 arc-half-height">', 
			  '<div class=" col-lg-6 arc-half-height">', 
			  '<div class=" col-lg-12 arc-half-height">', 
			  '</div></div><div class=" col-lg-6 arc-full-height">');
			$i = 0;
			$args = array( 'posts_per_page' => -1 );
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post );

			if ( has_post_thumbnail() ) {
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); 
			} 

			$hex = get_field('episode_hex_code');
			list($r, $g, $b) = array($hex[0].$hex[1],$hex[2].$hex[3],$hex[4].$hex[5]);
			$r = hexdec($r);
			$g = hexdec($g);
			$b = hexdec($b);
		?>
		<?php echo $headings[$i]; ?>
			<div class="u-overlay u-overlay-img" style="background-image: url('<?php echo $large_image_url[0]; ?>');"></div>
			<div class="u-overlay u-color" style="background-color: rgba(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b; ?>,.7);"></div>
			<p><strong>Episode <?php the_field('episode_number'); ?>:</strong> <?php the_field('episode_title'); ?></p>
			<p class="airdate">(Aired: <?php the_date(); ?>)</p>
			<a class="button sm-btn" href="<?php the_permalink(); ?>">Read Episode Recap</a>
		</div>
		<?php 
			$i++; 
			if ( $i == 12 ) { $i = 0; echo ""; };
			endforeach; 
			wp_reset_postdata();
		?>
	</div>
</section>

<?php get_footer(); ?>