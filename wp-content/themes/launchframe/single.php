<?php
/**
 * @package Launchframe
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post();

?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="episode-header">
					<div class="abs-img with-overlay" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="vm-xs-top-3">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h6>Posted: <?php the_date(); ?> by <?php the_author(); ?></h6>
				<br />
				<?php the_content(); ?>
			</div>
			<div class="col-md-3 col-md-offset-1">
				<div class="row">
					<div class="mof1-ad mof1-ad--single" style="background-image: url(<?php bloginfo('template_directory');?>/assets/src/img/castpro/Castpro-Ad-Side.png);">
						<a href="http://mof1podcast.com/castpro?utm_source=mof1podcast&utm_campaign=Castpro&utm_medium=website" title="Castpro - Your Podcast Partner" target="_blank"></a>
					</div>
				</div>
				<div class="row vm-xs-top-1">
					<ul id="share-buttons">
						<li><a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
						<li><a href="http://twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php echo get_the_title(); ?>&hashtags=mof1podcast" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
						<li><a href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
						<li><a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
