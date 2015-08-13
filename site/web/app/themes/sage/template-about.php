<?php
/**
 * Template Name: About Page
 */
?>
<?php
//vars
$hero_title = get_field('hero_title');
$hero_sub_title = get_field('hero_sub_title');
$hero_tag = get_field('hero_tag');
$hero_image = get_field('hero_image');
?>
	<section class="visual">
		<div class="container">
			<div class="text-block">
				<div class="heading-holder">
					<h1><?php echo $hero_title; ?></h1>
				</div>
				<p class="tagline"><?php echo $hero_sub_title; ?></p>
				<span class="info"><?php echo $hero_tag; ?></span>
			</div>
		</div>
		<img src="<?php echo $hero_image; ?>" alt="" class="bg-stretch">
	</section>
<?php
	//vars
	$what_you_get_tag = get_field('what_you_get_tag');
	$what_you_get_main_image = get_field('what_you_get_main_image');
?>
	<section class="area">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h2 class="visible-xs visible-sm text-primary">&lt;<?php echo $what_you_get_tag; ?>&gt;</h2>
					<?php if( have_rows('what_you_get_sub_sections') ): ?>
						<ul class="visual-list">
						<?php while( have_rows('what_you_get_sub_sections') ): the_row();

							// vars
							$image = get_sub_field('image');
							$title = get_sub_field('title');
							$description = get_sub_field('description');

							?>

							<li>
								<div class="img-holder">
									<img class="img-circle" src="<?php echo $image; ?>" width="110" alt="">
								</div>
								<div class="text-holder">
									<h3><?php echo $title; ?></h3>
									<p><?php echo $description; ?></p>
								</div>
							</li>

						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
				<div class="col-md-7">
					<div class="slide-holder">
						<h2 class="hidden-xs hidden-sm text-primary">&lt;Here is what you get&gt;</h2>
						<div class="img-slide scroll-trigger"><img src="<?php echo $what_you_get_main_image; ?>" height="624" width="1184" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
		//vars
		$social_buttons_section_title = get_field('social_buttons_section_title');
		$youtube_link = get_field('youtube_link');
		$twitter_link = get_field('twitter_link');
		$facebook_link = get_field('facebook_link');
		$youtube_followers = get_field('youtube_followers');
		$twitter_followers = get_field('twitter_followers');
		$facebook_followers = get_field('facebook_followers');

	?>

	<section class="main">
		<div class="container">
			<div class="block-holder">
				<div class="block-frame">
					<div class="cycle-gallery">
						<div class="mask">
							<h2><?php echo $social_buttons_section_title; ?></h2>

							<?php if( have_rows('staff') ): ?>
								<div class="slideset">
									<?php while( have_rows('staff') ): the_row();

										// vars
										$staff_image = get_sub_field('staff_image');
										$staff_name = get_sub_field('staff_name');
										$staff_position = get_sub_field('staff_position');
										$staff_text = get_sub_field('staff_text');
										$staff_handle = get_sub_field('staff_handle');
										$staff_handle_link = get_sub_field('staff_handle_link');

										?>

										<div class="slide">
											<div class="img-box">
												<div class="img-holder"><img src="<?php echo $staff_image; ?>" height="85" width="85" alt=""></div>
												<div class="text-holder">
													<h3><?php echo $staff_name; ?></h3>
													<em class="date"><?php echo $staff_position; ?></em>
													<a href="<?php echo $staff_handle_link; ?>"><?php echo $staff_handle; ?></a>
													<p><?php echo $staff_text; ?></p>
												</div>
											</div>
										</div>

									<?php endwhile; ?>
								</div>
							<?php endif; ?>

						</div>
						<a class="btn-prev" href="#"><i class="fa fa-arrow-left"></i></a>
						<a class="btn-next" href="#"><i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="block-frame">
					<ul class="cta-list">
						<li>
							<a href="<?php echo $youtube_link; ?>" class="btn btn-danger"><i class="fa fa-youtube"></i> Youtube</a>
							<p><?php echo $youtube_followers; ?></p>
						</li>
						<li>
							<a href="<?php echo $twitter_link; ?>" class="btn btn-info"><i class="fa fa-twitter"></i> Twitter</a>
							<p><?php echo $twitter_followers; ?></p>
						</li>
						<li>
							<a href="<?php echo $facebook_link; ?>" class="btn btn-blue"><i class="fa fa-facebook"></i> Facebook</a>
							<p><?php echo $facebook_followers; ?></p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

<?php
//vars
	$talking_about_us_section_title = get_field('talking_about_us_section_title');
?>
	<section class="visual-container">
		<div class="visual">
			<div class="container">
				<h2><?php echo $talking_about_us_section_title; ?></h2>

				<?php if( have_rows('people_talking_about_us') ): ?>
					<ul class="testimonials">
						<?php while( have_rows('people_talking_about_us') ): the_row();

							// vars
							$image = get_sub_field('image');
							$text = get_sub_field('text');

							?>

							<li>
								<div class="img-holder"><a href="#"><img src="<?php echo $image; ?>" height="43" width="165" alt="smashing magazine"></a></div>
								<p><em><?php echo $text; ?> </em></p>
							</li>

						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/dna7.jpg" height="764" width="1380" alt="" class="bg-stretch">
		</div>
	<div>
</section>
