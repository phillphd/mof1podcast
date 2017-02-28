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
		<div class="row  vp-xxs-top-3 vp-lg-top-4">
			<div class="mof1-ad mof1-ad--fullWidth" style="background-image: url(<?php bloginfo('template_directory');?>/assets/src/img/infinity/BF-Infinity-FullWidth.png);">
				<a href="https://www.baronfig.com/products/infinity?utm_source=mof1podcast&utm_campaign=Baron_Fig__Infinity&utm_medium=website" title="Infinity by Baron Fig" target="_blank"></a>
			</div>
		</div>
		<div class="row vp-xxs-top-3 vp-xxs-bottom-2 vp-lg-top-5 vp-lg-bottom-5">
			<div class="col-md-6 col-lg-5 vm-xxs-bottom-2 vm-md-bottom-0">
				<div class="btn-slack">
					<a href="https://slackin-fuwqvuhict.now.sh/" target="_blank" class="btn-slack__link"></a>
					<div class="btn-slack__img">
						<img src="<?php bloginfo('template_directory');?>/assets/src/img/home/Slack_Mark_Web.png">
					</div>
					<div class="btn-slack__text">
						<h5>Join Mof1 on Slack<br />It's a party.</h5>
						<p style="display: inline-block;">I like to party!</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-7">
				<div class="contact-form">
					<h5 class="contact-form__header">Sign Up for Exclusive Content</h5>
					<p class="contact-form__header">( No Spam. For Reals! )</p>
					<?php include '_partial-signup.php'; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="section__bg"></div>
	<div class="container">
		<div class="row section__header">
			<div class="col-lg-2 vm-xxs-bottom-2 vm-lg-bottom-0">
				<h2>Dispatch</h2>
				<a href="/archive/" class="section__link p">More Dispatch</a>
			</div>
			<div class="col-lg-8">
				<p>Mof1 is out on the street at conferences, attending the latest and greatest art shows, movies, etc. Keep up with where (and when) we are in the world.</p>
			</div>
		</div>
		<div class="row section__content section__content--big">
			<div class="episode-box">
				<div class="episode-box__img" style="background-image: url('http://hotseat.mof1podcast.com/wp-content/themes/launchframe/assets/src/img/bg.jpg');"></div>
				<div class="episode-box__meta">
					<p>Hot Seat Interviews</p>
					<p class="airdate">Listen to interviews with incredible creatives from the floor of ReImagine Conference 2016.</p>
					<a class="button sm-btn" href="http://hotseat.mof1podcast.com/">Read More</a>
				</div>
			</div>
			<div class="episode-box">
				<div class="episode-box__img" style="background-image: url('http://mof1podcast.com/wp-content/uploads/2016/12/HMT_ad.jpg');"></div>
				<div class="episode-box__meta">
					<p>Holiday Meal Time With Friends</p>
					<p class="airdate">We are excited to announce a delicious collaboration to bring you an amazing holiday meal time! Check it out!</p>
					<a class="button sm-btn" href="http://mof1podcast.com/holiday-meal-time-with-friends/">Read More</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="row section__header">
			<div class="col-lg-2 vm-xxs-bottom-2 vm-lg-bottom-0">
				<h2>Network</h2>
				<a href="/network-news/" class="section__link p">More News</a>
			</div>
			<div class="col-lg-8">
				<p>We curate various articles, podcasts, items, and websites that we think you will love. If you like what you see, support them by downloading an episode, sharing their article on social media, or but their stuff and tell ‘em that we sent ya!</p>
			</div>
		</div>
		<div class="row section__content">
			<div class="episode-box episode-box--network">
				<div class="episode-box__img" style="background-image: url('http://2e4fmm4173kfqb7uraadejq8.wpengine.netdna-cdn.com/wp-content/uploads/2015/05/Screen-Shot-2015-09-26-at-5.01.00-PM.png');"></div>
				<div class="episode-box__meta">
					<p>Hey Monkey! Design</p>
					<p class="airdate">Lenny Terenzi</p>
					<a class="button sm-btn" href="http://www.heymonkeydesign.com/">Read More</a>
				</div>
			</div>
			<div class="episode-box episode-box--network">
				<div class="episode-box__img" style="background-image: url('http://2e4fmm4173kfqb7uraadejq8.wpengine.netdna-cdn.com/wp-content/uploads/2015/05/Kolb_site_img.png');"></div>
				<div class="episode-box__meta">
					<p>Kolb is Neat</p>
					<p class="airdate">Andrew Kolb</p>
					<a class="button sm-btn" href="http://www.kolbisneat.com/">Read More</a>
				</div>
			</div>
			<div class="episode-box episode-box--network">
				<div class="episode-box__img" style="background-image: url('http://2e4fmm4173kfqb7uraadejq8.wpengine.netdna-cdn.com/wp-content/uploads/2015/05/JustinPeterson_site_img.png');"></div>
				<div class="episode-box__meta">
					<p>Justin Peterson Art</p>
					<p class="airdate">Justin Peterson</p>
					<a class="button sm-btn" href="http://justinpeterson.bigcartel.com/">Read More</a>
				</div>
			</div>
		</div>
	</div>
</section>

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
				<p class="big-p">Good stuff ONLY. Don’t worry... we will NOT spam you! For reals!</p>
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
	<div class="section__bg"></div>
	<div class="container">
		<div class="row section__header">
			<div class="col-lg-2 vm-xxs-bottom-2 vm-lg-bottom-0">
				<h2>About</h2>
				<a href="/the-masters/" class="section__link p">Meet The Masters</a>
			</div>
			<div class="col-lg-8">
				<p>So what makes us the “masters” of our genre? Well, when we say we are the master in a topic, it simply means that we are incredibly passionate about that thing and that—for the context of the show—we are the “go to” for that category</p>
			</div>
		</div>
		<div class="row section__content">
			<ul class="master-list">
				<li>
					<div class="master-list__img">
						<div class="abs-full u-bg-img" style="background-image: url('<?php bloginfo('template_directory');?>/assets/src/img/home/Kolb-Patrick-2.jpg');"></div>
					</div>
					<div class="master-list__meta" style="color: #000;">
						<p>Patrick Hill</p>
						<h6>TV &amp; Film</h6>
					</div>
				</li>
				<li>
					<div class="master-list__img">
						<div class="abs-full u-bg-img" style="background-image: url('<?php bloginfo('template_directory');?>/assets/src/img/home/Kolb-Luke-2.jpg');"></div>
					</div>
					<div class="master-list__meta" style="color: #000;">
						<p>Luke Gaul</p>
						<h6>Toys &amp; Games</h6>
					</div>
				</li>
				<li>
					<div class="master-list__img">
						<div class="abs-full u-bg-img" style="background-image: url('<?php bloginfo('template_directory');?>/assets/src/img/home/Kolb-Andrew-2.jpg');"></div>
					</div>
					<div class="master-list__meta" style="color: #000;">
						<p>Andrew Sale</p>
						<h6>Art &amp; Design</h6>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>

<?php get_footer(); ?>