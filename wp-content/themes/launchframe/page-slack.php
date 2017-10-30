<?php
/**
 * @package Launchframe
 */

get_header(); ?>

<section class="home" style="background-color: #F3F3F3;">
	<div class="container vp-xs-top-6 vp-xs-bottom-6">
		<div class="row signup-cta" style="background-color: #FFFFFF;">
			<div class="col-lg-5 vm-xxs-bottom-2 vm-lg-bottom-0">
				<h3>Join Us On Slack</h3>
				<p class="big-p">Join the community &amp; the conversation on Slack!</p>
			</div>
			<div class="col-lg-7">
				<div class="contact-form">
					<div class="signup">
						<form action="#!" method="post" id="slack-subscribe-form" name="slack-subscribe-form">
							<div class="signup__wrapper">
								<input id="slack-signup-email" type="email" placeholder="Your Email Goes Here" name="EMAIL">
								<input id="slack-signup-submit" type="submit" value="" name="subscribe">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section class="section u-bg-gray-light">
	<iframe src="https://now-examples-slackin-vhveoonyoc.now.sh/" style="width: 100%; height: 900px;"></iframe>
</section> -->

<?php get_footer(); ?>