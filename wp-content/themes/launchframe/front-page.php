<?php
/**
 * @package Launchframe
 */

get_header(); ?>

<?php $the_query = new WP_Query(array('post_type' => 'episodes', 'posts_per_page' => 1)); 
if ($the_query->have_posts()) { while ($the_query->have_posts()) { $the_query->the_post();

$simplecast = Simplecast\ClientFactory::factory([
    'apiKey' => 'sc_VS6l8ZdZTuWaX-Y-MUtANg'
]);

$episode = $simplecast->podcastEpisode([
    'podcast_id' => get_field('podcast_id'),
    'episode_id' => get_field('episode_id')
]);

$episode_title = explode(":", $episode["title"]);

?>
<section>
	<div class="hero">
		<div class="abs-full u-bg-img hero__bg" style="background-image: url('<?php echo $episode["images"]["large"]; ?>');"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-4" style="position: relative;">
					<h2>Latest</h2>
					<div class="hero__content">
						<h6><?php echo $episode_title[0]; ?></h6>
						<p class="h4"><?php echo $episode_title[1]; ?></p>
						<h6>Synopsis</h6>
						<p><?php echo substr($episode["description"], 0, 150); ?>...</p>
						<a href="<?php the_permalink(); ?>" class="hero__read-more p">Read Episode Recap<span class="with-arrow"></span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="hero__artwork">
			<div class="abs-full u-bg-img" style="background-image: url('<?php echo $episode["images"]["large"]; ?>');"></div>
		</div>
	</div>
</section>
<?php } wp_reset_postdata(); } ?>

<section class="u-bg-gray-light">
	<div class="container">
		<div class="row vp-xxs-top-3 vp-xxs-bottom-2 vp-lg-top-5 vp-lg-bottom-5">
			<div class="col-md-6 vm-xxs-bottom-2 vm-md-bottom-0">
				<a href="https://now-examples-slackin-vhveoonyoc.now.sh/" target="_blank" class="big-button" style="background-image: url('<?php bloginfo('template_directory');?>/assets/src/img/home/Slack_Button-icon.png');">Join the <strong>Community</strong> &amp; the <br /><strong>Conversation</strong> on Slack!</a>
			</div>
			<div class="col-md-6">
				<a href="https://www.patreon.com/mof1podcast" target="_blank" class="big-button" style="background-image: url('<?php bloginfo('template_directory');?>/assets/src/img/home/Patreon_Button-icon.png');">Show Your <strong>Support</strong> &amp; Shape <br />Our <strong>Future</strong> on Patreon!</a>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="section__bg"></div>
	<div class="container">
		<div class="row section__header">
			<div class="col-lg-3 col-xl-2 vm-xxs-bottom-2 vm-lg-bottom-0">
				<h2>Dispatch</h2>
			</div>
			<div class="col-lg-8 col-xl-7">
				<p>Mof1 is out on the street at conferences, attending the latest and greatest art shows, movies, etc. Keep up with where (and when) we are in the world.</p>
			</div>
		</div>
		<div class="row section__content section__content--big">
			<div id="mof1-map"></div>
		</div>
		<div class="row">
			<div class="event-list-track">
				<ul class="event-list">
					<li><div class="evt-icn"></div>Reimagine Conference<br /><span>October 19-21</span></li>
					<li class="type-meet"><div class="evt-icn"></div>Costa Mesa Meetup<br /><span>October 22</span></li>
					<li><div class="evt-icn"></div>Pop-Up Crop<br /><span>Novemeber 3</span></li>
					<li class="type-meet"><div class="evt-icn"></div>Austin Meetup<br /><span>Novemeber 4</span></li>
					<li><div class="evt-icn"></div>Mondocon<br /><span>Novemeber 4-5</span></li>
					<li><div class="evt-icn"></div>Creative South<br /><span>April 12-15</span></li>
				</ul>
			</div>
		</div>
		<div class="row vm-xs-top-4 vm-md-top-6">
			<div class="mof1-ad mof1-ad--fullWidth" style="background-image: url(<?php bloginfo('template_directory');?>/assets/src/img/castpro/Castpro-Ad-FullWidth.png);">
				<a href="http://mof1podcast.com/castpro?utm_source=mof1podcast&utm_campaign=Castpro&utm_medium=website" title="Castpro - Your Podcast Partner" target="_blank"></a>
			</div>
		</div>
	</div>
</section>
<!-- 
<section class="section">
	<div class="container">
		<div class="row section__header">
			<div class="col-lg-3 col-xl-2 vm-xxs-bottom-2 vm-lg-bottom-0">
				<h2>Network</h2>
				<a href="/network-news/" class="section__link p">More News</a>
			</div>
			<div class="col-lg-8 col-xl-7">
				<p>We curate various articles, podcasts, items, and websites that we think you will love. If you like what you see, support them by downloading an episode, sharing their article on social media, or but their stuff and tell ‘em that we sent ya!</p>
			</div>
		</div>
	</div>
</section> -->

<section class="section u-bg-gray-light">
	<div class="container">
		<div class="row section__header">
			<div class="col-md-6 vm-xxs-bottom-2 vm-md-bottom-0">
				<h2>Connect</h2>
			</div>
			<div class="col-md-6">
				<ul class="social-list">
					<li><a href="https://www.instagram.com/Mof1podcast/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://twitter.com/Mof1podcast" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="https://www.facebook.com/Mof1podcast" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li class="itunes"><a href="https://itunes.apple.com/us/podcast/mof1-podcast/id1074500173?mt=2" target="_blank"><img src="<?php bloginfo('template_directory');?>/assets/src/img/home/itunes.png"></a></li>
				</ul>
			</div>
		</div>
		<div class="row signup-cta">
			<div class="col-lg-5 vm-xxs-bottom-2 vm-lg-bottom-0">
				<h3>Sign Up for Exclusive Content</h3>
				<p class="big-p">Good stuff ONLY. Don’t worry... we will NOT spam you!<br />For reals!</p>
			</div>
			<div class="col-lg-7">
				<div class="contact-form">
					<?php include '_partial-signup.php'; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-xl-2 vm-xs-bottom-2">
				<h2>About</h2>
			</div>
		</div>
	</div>
	<div class="vp-xs-top-4 vp-xs-bottom-4" style="background-color: #F3F3F3;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 col-xl-8">
					<h5>// THE PODCAST</h5>
					<p>Welcome to Master Of One, where every week we bring you the latest in games, design and film from our world. Listen us each Tuesday as we talk about the latest happenings around the community and what cool new item you should be spending your money on. Then listen again on Thursday when we talk with a guest celebrity artist from one of our industries. We love to talk with you, so start a conversation @mof1podcast or join the conversation happening now in Slack.</p>
					<br />
					<h5>// THE MASTERS</h5>
					<p>So what makes us the “masters” of our genre? Well, when we say we are the master in a topic, it simply means that we are incredibly passionate about that thing and that—for the context of the show—we are the “go to” for that category.</p>
				</div>
				<div class="amaster-column">
					<div class="amaster">
						<div class="amaster__img">
							<div class="the-image" style="background-image: url('<?php bloginfo('template_directory');?>/assets/src/img/home/Kolb-Patrick-2.jpg');"></div>
						</div>
						<div class="amaster__name">
							Patrick <span>// TV &amp; Film</span>
						</div>
					</div>
					<div class="amaster">
						<div class="amaster__img">
							<div class="the-image" style="background-image: url('<?php bloginfo('template_directory');?>/assets/src/img/home/Kolb-Luke-2.jpg');"></div>
						</div>
						<div class="amaster__name">
							Luke <span>// Toys &amp; Games</span>
						</div>
					</div>
					<div class="amaster">
						<div class="amaster__img">
							<div class="the-image" style="background-image: url('<?php bloginfo('template_directory');?>/assets/src/img/home/Kolb-Andrew-2.jpg');"></div>
						</div>
						<div class="amaster__name">
							Andrew <span>// Art &amp; Design</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>