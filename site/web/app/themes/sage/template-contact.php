<?php
/**
 * Template Name: Contact Page
 */
?>

<style type="text/css">
	/* Set a size for our map container, the Google Map will take up 100% of this container */
	#map {
		width: 100%;
		height: 500px;
	}
</style>

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
	$address_section_title = get_field('address_section_title');
	$address_text_1 = get_field('address_text_1');
	$address_text_2 = get_field('address_text_2');
?>

<section class="main">
	<div class="container">
		<div class="content">
			<div class="row">
				<div class="col-md-12 text-center">
					<h3><?php echo $address_section_title; ?></h3>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3">
					<h4>Main Address:</h4>
					<p><?php echo $address_text_1; ?>
				</div>
				<div class="col-md-3">
					<h4>Sub Address:</h4>
					<p><?php echo $address_text_2; ?>
				</div>
				<div class="col-md-3">
					<div class="btn-holder">
						<a href="https://goo.gl/maps/V2CyC" class="btn btn-link">Get Directions</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div id="map"></div>
				</div>
				<div class="col-md-6">
					<?php echo do_shortcode('[contact-form-7 id="72" title="Contact form 1"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
