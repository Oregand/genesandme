<?php
/**
 * Template Name: About Page
 */
?>

<style type="text/css">
	/* Set a size for our map container, the Google Map will take up 100% of this container */
	#map {
		width: 100%;
		height: 910px;
		margin-top: -110px;
	}
</style>


	<section class="visual">
	        <div id="map"></div>
	</section>
	<section class="main">
		<div class="container">
			<div id="cta">
				<a href="https://goo.gl/maps/V2CyC" class="btn btn-primary rounded">Get Directions</a>
			</div>
			<div class="row">
				<div class="text-box col-md-offset-1 col-md-10">
					<h2>GenesandMe</h2>
					<p>Aenean cursus imperdiet nisl id fermentum. Aliquam pharetra dui laoreet vulputate dignissim. Sed id metus id quam auctor molestie eget ut augue. </p>
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
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/graph-04.svg" width="110" alt="">
							</div>
							<div class="text-holder">
								<h3>Address</h3>
								<p>Aenean cursus imperdiet nisl id fermentum. Aliquam pharetra dui laoreet vulputate dignissim. Sed id metus id quam auctor molestie eget ut augue. </p>
							</div>
						</li>
						<li>
							<div class="img-holder">
								<img class="pull-left" src="<?php echo get_template_directory_uri(); ?>/assets/images/graph-03.svg" width="90" alt="">
							</div>
							<div class="text-holder">
								<h3>Email Details</h3>
								<p>Maecenas eu dictum felis, a dignissim nibh. Mauris rhoncus felis odio, ut volutpat massa placerat ac. Curabitur dapibus iaculis mi gravida luctus. Aliquam erat volutpat. </p>
							</div>
						</li>
						<li>
							<div class="img-holder">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/graph-02.svg" height="84" alt="">
							</div>
							<div class="text-holder">
								<h3>Phone Details</h3>
								<p>Maecenas eu dictum felis, a dignissim nibh. Mauris rhoncus felis odio, ut volutpat massa placerat ac. Curabitur dapibus iaculis mi gravida luctus. Aliquam erat volutpat. </p>
							</div>
						</li>
						<li>
							<div class="img-holder">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/graph-01.svg" height="71" alt="">
							</div>
							<div class="text-holder">
								<h3></h3>
								<p>Maecenas eu dictum felis, a dignissim nibh. Mauris rhoncus felis odio, ut volutpat massa placerat ac. Curabitur dapibus iaculis mi gravida luctus. Aliquam erat volutpat. </p>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-7">
					<div class="slide-holder">
						<h2 class="hidden-xs hidden-sm text-primary">Who are we?</h2>
						<div class="img-slide scroll-trigger"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/StJamesHospital_1776986a.jpg" height="624" width="1184" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="main">
		<div class="container">
			<div class="block-holder">
				<div class="block-frame">
					<div class="cycle-gallery">
						<div class="mask">
							<div class="slideset">
								<div class="slide">
									<div class="img-box">
										<div class="img-holder"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-01.jpg" height="85" width="85" alt=""></div>
										<div class="text-holder">
											<h3>Steven Walters</h3>
											<a href="#">@DoctorS</a>
										</div>
									</div>
									<p><a href="#">@Pixelbuddha</a> Suspendisse sodales sem est, in scelerisque felis scelerisque in. Aenean faucibus mollis risus. Praesent sit amet erat eget eros.</p>
									<em class="date">2 hours ago</em>
								</div>
								<div class="slide">
									<div class="img-box">
										<div class="img-holder"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-02.jpg" height="85" width="85" alt=""></div>
										<div class="text-holder">
											<h3>Shane Jennings</h3>
											<a href="#">@shanejen</a>
										</div>
									</div>
									<p><a href="#">@PSD2HTML</a> Ut id porta quam. Morbi sit amet magna lobortis, hendrerit lorem et, tincidunt lorem. Sed vulputate condimentum lorem vel dapibus</p>
									<em class="date">5 hours ago</em>
								</div>
								<div class="slide">
									<div class="img-box">
										<div class="img-holder"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-03.jpg" height="85" width="85" alt=""></div>
										<div class="text-holder">
											<h3>Rafael Belverde</h3>
											<a href="#">@bellraffi</a>
										</div>
									</div>
									<p><a href="#">@codrops</a> Curabitur nec dapibus ligula. In eget ante in nisi laoreet accumsan pretium vitae est. Nulla lacinia efficitur dui eget accumsan?</p>
									<em class="date">1 day ago</em>
								</div>
							</div>
						</div>
						<a class="btn-prev" href="#"><i class="glyphicon glyphicon-menu-left"></i></a>
						<a class="btn-next" href="#"><i class="glyphicon glyphicon-menu-right"></i></a>
					</div>
				</div>
				<div class="block-frame">
					<ul class="cta-list">
						<li>
							<a href="#" class="btn btn-default"><i class="fa fa-github"></i> GitHub</a>
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
	<section class="visual-container">
		<div class="visual-area">
			<div class="container">
				<h2>People Are Talking About Fork</h2>
				<ul class="testimonials">
					<li>
						<div class="img-holder"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-smashing.png" height="43" width="165" alt="smashing magazine"></a></div>
						<p><em>Sed vestibulum scelerisque urna, eu finibus leo facilisis sit amet. Proin id dignissim magna. Sed varius urna et pulvinar venenatis. </em></p>
					</li>
					<li>
						<div class="img-holder"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-codrops.png" height="50" width="148" alt="codrops"></a></div>
						<p><em>Donec euismod dolor ut ultricies consequat. Vivamus urna ipsum, rhoncus molestie neque ac, mollis eleifend nibh.</em></p>
					</li>
					<li>
						<div class="img-holder"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-w.png" height="64" width="64" alt="w"></a></div>
						<p><em>In efficitur in velit et tempus. Duis nec odio dapibus, suscipit erat fringilla, imperdiet nibh. Morbi tempus auctor felis ac vehicula. </em></p>
					</li>
					<li>
						<div class="img-holder"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-pixel.png" height="24" width="225" alt="Pixel Buddha"></a></div>
						<p><em>Sed vestibulum scelerisque urna, eu finibus leo facilisis sit amet. Proin id dignissim magna. Sed varius urna et pulvinar venenatis. </em></p>
					</li>
					<li>
						<div class="img-holder"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cb.png" height="34" width="166" alt="creative bloq"></a></div>
						<p><em>Praesent ut eros tristique, malesuada lectus vel, lobortis massa. Nulla faucibus lorem id arcu consequat faucibus. </em></p>
					</li>
					<li>
						<div class="img-holder"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-tnw.png" height="34" width="108" alt="tnw"></a></div>
						<p><em>Fusce pharetra erat id odio blandit, nec pharetra eros venenatis. Pellentesque porttitor cursus massa et vestibulum.</em></p>
					</li>
				</ul>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-decor-02.jpg" height="764" width="1380" alt="" class="bg-stretch">
		</div>
	<div>
</section>
