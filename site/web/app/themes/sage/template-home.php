<?php
/**
 * Template Name: Home Page
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
	$block_title = get_field('block_title');
	$block_description = get_field('block_description');
	$block_image = get_field('block_image');
?>
	<section class="main">
		<div class="container">
			<div id="cta">
				<a href="/products/" class="btn btn-primary rounded">View All Our Products</a>
				<p>Gene Spcific Ideals</p>
			</div>
			<div class="row">
				<div class="text-box col-md-offset-1 col-md-10">
					<h2><?php echo $block_title; ?></h2>
					<p><?php echo $block_description; ?></p>
					<div class="social-placeholder"><img src="<?php echo $block_image; ?>" height="26" width="365" alt=""></div>
				</div>
			</div>
		</div>
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
									<img src="<?php echo $image; ?>" width="110" alt="">
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
	$section_title = get_field('section_title');
	$section_snippet = get_field('section_snippet');
?>
	<section class="visual-container">
		<div class="visual-area">
			<div class="container">
				<h2><?php echo $section_title; ?></h2>
				<div class="pricing-tables">

					<?php
						$temp = $wp_query;
						$wp_query= null;
						$wp_query = new WP_Query();
						$args = array(
							'showposts' => '-1',
							'post_type' => 'product'
					);

						if(isset($_GET['cat'])) {
							$args['cat'] = $_GET['cat'];
						}

						$wp_query->query($args);

					$i = 0;
						while ($wp_query->have_posts()) :
							$wp_query->the_post();
							$price = get_field('price');
							$time_line = get_field('time_line');
						if($i % 4 == 0) { ?>
							<div class='row equal'>
						<?php
						}
					?>

					<div class="plan <?php if($i === 2) { ?> recommended <?php } ?>">
						<div class="head">
							<h4><?php echo the_title(); ?></h4>
						</div>
						<div class="price">
							<span class="price-main"><span class="symbol">€</span><?php echo $price; ?></span>
							<span class="price-additional"><?php echo $time_line; ?></span>
						</div>
						<ul class="item-list">
							<li><?php echo the_excerpt(); ?></li>
						</ul>
						<a href="<?php echo the_permalink(); ?>" class="btn btn-default rounded" role="button">Purchase</a>
					</div>

					<?php $i++;
						if($i != 0 && $i % 4 == 0) { ?>
							</div><!--/.row-->
							<div class="clearfix"></div>
					<?php } ?>
				<?php endwhile;
						wp_reset_query();
				?>
			</div>
				<p class="silent"><?php echo $section_snippet; ?></p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/dist/images/img-decor-03.jpg" height="1175" width="1380" alt="" class="bg-stretch">
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
						</div>
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
	$banner_image = get_field('banner_image');
?>
	<section class="visual">
		<img src="<?php echo $banner_image; ?>" alt="" class="bg-stretch">
	</section>
	<section class="main">
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-md-4">
						<h3>News</h3>
							<?php
								$temp = $wp_query;
								$wp_query= null;
								$wp_query = new WP_Query();
								$args = array(
									'showposts' => '3',
									'post_type' => 'post'
							);

								$wp_query->query($args);

								while ($wp_query->have_posts()) :
									$wp_query->the_post();
								?>

								<h4><?php echo the_title(); ?></h4>
								<p><?php echo the_excerpt(); ?></p>
						<?php
							endwhile;
							wp_reset_query();
						?>
						<div class="btn-holder">
							<a href="/news/" class="btn btn-link">Go to News</a>
						</div>
					</div>
					<div class="col-md-4">
						<h3>Reports</h3>
						<?php
							$temp = $wp_query;
							$wp_query= null;
							$wp_query = new WP_Query();
							$args = array(
								'showposts' => '3',
								'post_type' => 'report'
						);

							$wp_query->query($args);

							while ($wp_query->have_posts()) :
								$wp_query->the_post();
							?>

							<h4><?php echo the_title(); ?></h4>
							<p><?php echo the_excerpt(); ?></p>
					<?php
						endwhile;
						wp_reset_query();
					?>
					<div class="btn-holder">
						<a href="/reports/" class="btn btn-link">Go to Reports</a>
					</div>
					</div>
					<div class="col-md-4">
						<h3>New Products</h3>
						<?php
							$temp = $wp_query;
							$wp_query= null;
							$wp_query = new WP_Query();
							$args = array(
								'showposts' => '3',
								'post_type' => 'product'
						);

							$wp_query->query($args);

							while ($wp_query->have_posts()) :
								$wp_query->the_post();
							?>

							<h4><?php echo the_title(); ?></h4>
							<p><?php echo the_excerpt(); ?></p>
					<?php
						endwhile;
						wp_reset_query();
					?>
					<div class="btn-holder">
						<a href="/product/" class="btn btn-link">Go to Products</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
