<div class="container u-bg-lightgray">
	<div class="row">
		<div class="col-sm-2 col-md-4 col-lg-3 header-logo" style="border-right:2px solid #fff;">
			<div class="row">
				<a href="/">
					<div class="col-sm-12 col-md-4 u-pad-none logo-short">
						<?php include 'assets/src/img/icon_logo.svg'; ?>
					</div>
					<div class="col-md-8 u-pad-none logo-long">
						<?php include 'assets/src/img/icon_logo_alt.svg'; ?>
					</div>
				</a>
			</div>
		</div>
		<?php $args = array( 'posts_per_page' => 1 );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post );
			$hex_code = get_field('episode_hex_code'); ?>
			<style>
				a,
				a:visited,
				.u-color-primary,
				.button.lg-btn.cta-home-button,
				.social-links:hover [class^="icon-"]:before, .social-links:hover [class*=" icon-"]:before,
				#site-navigation ul li a:hover,
				.mc-field-group input[type*="email"],
				.error-404.not-found h1 {
				    color: #<?php echo $hex_code; ?>;
				}
				.ep-box,
				.u-bg-darkgray .button.sm-btn,
				.home-episode-button,
				.home-episode-button:hover,
				.home-episode-button:focus,
				.u-bg-darkgray i[class*="icon-"]:before,
				.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total,
				.mejs-controls .mejs-time-rail .mejs-time-total,
				.button.lg-btn.cta-home-button,
				.mc-field-group input[type*="email"],
				.mc-field-group input[type*="submit"] {
				    border-color: #<?php echo $hex_code; ?>;
				}
				.ep-box h3,
				.home-episode-button:hover,
				.home-episode-button:focus,
				.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current,
				.mejs-controls .mejs-time-rail .mejs-time-current,
				.button.lg-btn.cta-home-button:hover,
				.mc-field-group input[type*="submit"] {
				    background-color: #<?php echo $hex_code; ?>;
				}
				.home-episode-button:hover,
				.home-episode-button:focus {
					color: #fff;
				}
				footer ul li:last-child svg path,
				footer ul li:last-child svg polygon,
				.header-logo svg .logo-square,
				.header-logo svg .logo-circle,
				.header-connect .connect-rss svg path {
				    fill: #<?php echo $hex_code; ?>;
				}
				::-moz-selection {
				    background: #<?php echo $hex_code; ?>;
				}

				::selection {
				    background: #<?php echo $hex_code; ?>;
				}
			</style>
			<?php
			if (get_field('episode_title_2')) {
				$audio_url = get_field('episode_audio_url_2');
				$the_title = get_field('episode_title_2');
				$the_number = get_field('episode_number_2');
			} else {
				$audio_url = get_field('episode_audio_url');
				$the_title = get_field('episode_title');
				$the_number = get_field('episode_number');
			}
			?>
			<div class="col-sm-10 col-md-8 col-lg-6 u-text-center header-player">
				<h4>Play the Latest Episode</h4>
				<audio class="mejs-player" src="<?php echo $audio_url; ?>" preload="none"></audio>
				<p><em>Episode <?php echo $the_number; ?>: <?php echo $the_title; ?></em></p>
			</div>
		<?php 
		endforeach; 
		wp_reset_postdata();
		?>
		<div class="col-sm-3 header-connect" style="border-left:2px solid #fff;">
			<div class="connect-rss u-pad-none">
				<?php include 'assets/src/img/icon_tower.svg'; ?>
			</div>
			<div class="connect-social u-pad-none">
				<div class="u-pad-none service-slide">
					<h4 class="social-padding" style="padding-top: 15px; margin-bottom: 0;">Connect With Us</h4>
					<a class="social-links social-padding" href="https://www.facebook.com/Mof1podcast"><i class="icon-facebook"></i></a><a href="https://twitter.com/Mof1podcast" class="social-links"><i class="icon-twitter"></i></a><a href="https://instagram.com/Mof1podcast" class="social-links"><i class="icon-instagram"></i></a>
					<div class="call-to-action"><a href="#!"><h4>Subscribe</h4></a></div>
				</div>
				<div class="u-pad-none u-text-right itunes-stitcher">
					<a href="https://itunes.apple.com/us/podcast/mof1-podcast/id1074500173?mt=2" style="position: inherit;">
						<?php include 'assets/src/img/icon_itunes.svg'; ?>
					</a>
					<a href="http://www.stitcher.com/podcast/mof1-podcast" style="position: inherit;">
						<?php include 'assets/src/img/icon_stitcher.svg'; ?>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row mobile-social">
		<div class="col-xs-12" style="padding: 8px; padding-bottom: 0;">
			<div class="ms-contain">
				<a class="social-links social-padding" href="https://www.facebook.com/Mof1podcast"><i class="icon-facebook"></i></a><a href="https://twitter.com/Mof1podcast" class="social-links"><i class="icon-twitter"></i></a><a href="https://instagram.com/Mof1podcast" class="social-links"><i class="icon-instagram"></i></a>
				<a href="https://itunes.apple.com/us/podcast/master-of-one-podcast/id886640644?mt=2" style="position: inherit;">
					<?php include 'assets/src/img/icon_itunes.svg'; ?>
				</a>
				<a href="http://www.stitcher.com/podcast/master-of-one" style="position: inherit;">
					<?php include 'assets/src/img/icon_stitcher.svg'; ?>
				</a>
			</div>
		</div>
	</div>
</div>