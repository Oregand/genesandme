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
		<img src="<?php echo get_template_directory_uri(); ?>/dist/images/dna6.png" alt="" class="bg-stretch">
	</section>
	<section class="main">
		<div class="container">
			<div id="cta">
				<a href="/products/" class="btn btn-primary rounded">View All Our Products</a>
				<p>Gene Spcific Ideals</p>
			</div>
			<div class="row">
				<div class="text-box col-md-offset-1 col-md-10">
					<h2>Revolutionary Gene Typing</h2>
					<p>Aenean cursus imperdiet nisl id fermentum. Aliquam pharetra dui laoreet vulputate dignissim. Sed id metus id quam auctor molestie eget ut augue. </p>
					<div class="social-placeholder"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/sprite.png" height="26" width="365" alt=""></div>
				</div>
			</div>
		</div>
	</section>
	<section class="area">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h2 class="visible-xs visible-sm text-primary">&lt;Here is what you get&gt;</h2>
					<ul class="visual-list">
						<li>
							<div class="img-holder">
								<img src="<?php echo get_template_directory_uri(); ?>/dist/images/graph-04.svg" width="110" alt="">
							</div>
							<div class="text-holder">
								<h3>Created to Build A Better Human</h3>
								<p>Aenean cursus imperdiet nisl id fermentum. Aliquam pharetra dui laoreet vulputate dignissim. Sed id metus id quam auctor molestie eget ut augue. </p>
							</div>
						</li>
						<li>
							<div class="img-holder">
								<img class="pull-left" src="<?php echo get_template_directory_uri(); ?>/dist/images/graph-03.svg" width="90" alt="">
							</div>
							<div class="text-holder">
								<h3>Infinite Customization based On Your Genes</h3>
								<p>Maecenas eu dictum felis, a dignissim nibh. Mauris rhoncus felis odio, ut volutpat massa placerat ac. Curabitur dapibus iaculis mi gravida luctus. Aliquam erat volutpat. </p>
							</div>
						</li>
						<li>
							<div class="img-holder">
								<img src="<?php echo get_template_directory_uri(); ?>/dist/images/graph-02.svg" height="84" alt="">
							</div>
							<div class="text-holder">
								<h3>Experimental Features</h3>
								<p>Maecenas eu dictum felis, a dignissim nibh. Mauris rhoncus felis odio, ut volutpat massa placerat ac. Curabitur dapibus iaculis mi gravida luctus. Aliquam erat volutpat. </p>
							</div>
						</li>
						<li>
							<div class="img-holder">
								<img src="<?php echo get_template_directory_uri(); ?>/dist/images/graph-01.svg" height="71" alt="">
							</div>
							<div class="text-holder">
								<h3>Hours Dedicated To You!</h3>
								<p>Maecenas eu dictum felis, a dignissim nibh. Mauris rhoncus felis odio, ut volutpat massa placerat ac. Curabitur dapibus iaculis mi gravida luctus. Aliquam erat volutpat. </p>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-7">
					<div class="slide-holder">
						<h2 class="hidden-xs hidden-sm text-primary">&lt;Here is what you get&gt;</h2>
						<div class="img-slide scroll-trigger"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/dna1.jpg" height="624" width="1184" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="visual-container">
		<div class="visual-area">
			<div class="container">
				<h2>GenesandMe Pricing</h2>
				<div class="pricing-tables">
					<div class="plan">
						<div class="head">
							<h3>Students</h3>
						</div>
						<div class="price">
							<span class="price-main"><span class="symbol">$</span>8</span>
							<span class="price-additional">per month</span>
						</div>
						<ul class="item-list">
							<li>Personal License</li>
						</ul>
						<button type="button" class="btn btn-default rounded">purchase</button>
					</div>
					<div class="plan">
						<div class="head">
							<h3>professional</h3> </div>
						<div class="price">
							<span class="price-main"><span class="symbol">$</span>19</span>
							<span class="price-additional">per month</span>
						</div>
							<ul class="item-list">
							<li>Professional License</li>
							<li>Email Support</li>
							</ul>
						<button type="button" class="btn btn-default rounded">purchase</button>
					</div>
					<div class="plan recommended">
						<div class="head">
							<h3>agency</h3> </div>
						<div class="price">
							<span class="price-main"><span class="symbol">$</span>49</span>
							<span class="price-additional">per month</span>
						</div>
							<ul class="item-list">
								<li>1-12 Team Members</li>
								<li>Phone Support</li>
							</ul>
						<button type="button" class="btn btn-default rounded">purchase</button>
					</div>
					<div class="plan">
						<div class="head">
							<h3>enterprise</h3> </div>
						<div class="price">
							<span class="price-main"><span class="symbol">$</span>79</span>
							<span class="price-additional">per month</span>
						</div>
						<ul class="item-list">
							<li>Unlimited Team Members</li>
							<li>24/ 7 Phone Support</li>
						</ul>
						<button type="button" class="btn btn-default rounded">purchase</button>
					</div>
				</div>
				<p class="silent">Duis lobortis arcu sed arcu tincidunt feugiat. Nulla nisi mauris, facilisis vitae aliquet id, imperdiet quis nibh. Donec eget elit eu libero tincidunt consequat nec elementum orci. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/dist/images/img-decor-03.jpg" height="1175" width="1380" alt="" class="bg-stretch">
		</div>
	</section>
	<section class="main">
		<div class="container">
			<div class="block-holder">
				<div class="block-frame">
					<div class="cycle-gallery">
						<div class="mask">
							<h2>Be sure to follow us!</h2>
						</div>
						<a class="btn-prev" href="#"><i class="fa fa-facebook"></i></a>
						<a class="btn-next" href="#"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
				<div class="block-frame">
					<ul class="cta-list">
						<li>
							<a href="#" class="btn btn-danger"><i class="fa fa-youtube"></i> Youtube</a>
							<p>7 352 Followers</p>
						</li>
						<li>
							<a href="#" class="btn btn-info"><i class="fa fa-twitter"></i> Twitter</a>
							<p>136 312 Followers</p>
						</li>
						<li>
							<a href="#" class="btn btn-blue"><i class="fa fa-facebook"></i> Facebook</a>
							<p>218 092 Subscribers</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="visual">
		<img src="<?php echo get_template_directory_uri(); ?>/dist/images/dna_zps421036f0.jpg" alt="" class="bg-stretch">
	</section>
	<section class="main">
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-md-4">
						<h3>News</h3>
						<h4>Fully Available: Live Preview Support for Multiple Browsers</h4>
						<p>Morbi faucibus ante ipsum, a tincidunt libero posuere et. Etiam tempor tortor at odio condimentum, sit amet fringilla ligula maximus. Mauris venenatis nisl nisi, et dictum dui aliquet nec. Sed erat, nec aliquam vel, aliquam ac felis. </p>
						<h4>Improved Support for Typing </h4>
						<p>Nulla purus quam, pulvinar sed ante et, feugiat maximus velit. Donec eu elit mauris. </p>
						<h4>Improved Stability</h4>
						<p>Proin id ligula eget massa tincidunt molestie. Morbi urna lectus, molestie vel quam vel, iaculis fermentum nunc. Morbi imperdiet, leo in interdum pretium.</p>
						<div class="btn-holder">
							<a href="#" class="btn btn-link">Go to News</a>
						</div>
					</div>
					<div class="col-md-4">
						<h3>Reports</h3>
						<h4><a href="#">Custom Themes 1.1</a></h4>
						<p>Etiam viverra vulputate diam, pulvinar cursus augue egestas ullamcorper. </p>
						<h4><a href="#">Filter Forge</a></h4>
						<p>Nulla purus quam, pulvinar sed et, feugiat maximus velit.</p>
						<h4><a href="#">WebZap</a></h4>
						<p>Morbi imperdiet, leo in interdum pretium, elit eros dapibus velit, eu posuere quam diam vitae orci. Suspendisse interdum accumsan magna vitae commodo.</p>
						<h4><a href="#">Renamy</a></h4>
						<p>Vivamus consectetur suscipit elit, ut lacinia diam elementum et.</p>
						<div class="btn-holder">
							<a href="#" class="btn btn-link">Go to Reports</a>
						</div>
					</div>
					<div class="col-md-4">
						<h3>New Products</h3>
						<h4><a href="#">Morbi imperdiet, leo in interdum pretium.</a></h4>
						<time class="date" datetime="2015-02-18">February 18, 2015</time>
						<h4><a href="#">Donec orci ante, porta vel nulla quis, aliquet hendrerit leo.</a></h4>
						<time class="date" datetime="2015-02-12">February 12, 2015</time>
						<h4><a href="#">Suspendisse egestas vulputate luctus.</a></h4>
						<time class="date" datetime="2015-02-06">February 6, 2015</time>
						<h4><a href="#">Quisque varius ante lorem, eget pretium purus hendrerit a egestas. </a></h4>
						<time class="date" datetime="2015-02-02">February 2, 2015</time>
						<h4><a href="#">Phasellus in augue risus. </a></h4>
						<time class="date" datetime="2015-01-23">January 23, 2015</time>
						<div class="btn-holder">
							<a href="#" class="btn btn-link">Go to Products</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
