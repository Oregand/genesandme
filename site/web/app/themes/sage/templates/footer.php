<footer class="content-info" role="contentinfo">
	<div class="container">
		<div class="footer-holder">
			<div class="row">
				<div class="col-md-4">
					<div class="logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/helix48.png" alt="GenesAndMe"></a></div>
					<span><i class="fa fa-copyright"></i> CopyRight 2015 GenesAndMe</span></br>
					<span><i class="fa fa-cogs"></i> See Our<a href="/terms-and-conditions/"> Terms & Conditions</a></span></br>
					<span><i class="fa fa-github"></i> Designed & Built By <a href="https://oregand.github.io">David O'Regan</a></span>
				</div>
				<div class="col-md-2">
					<h4>Navigate Our Site</h4>
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				</div>
				<div class="col-md-3">
					<div class="text-holder">
						<h4>Get In Touch</h4>
						<strong class="phone"><?php echo get_option('tel_number'); ?></strong>
						<span class="available"><a href="mailto:<?php echo get_option('email'); ?>"><?php echo get_option('email'); ?></a></span>
						<h4><?php echo get_option('address_1'); ?></h4>
						<address><?php echo get_option('address'); ?></address>
					</div>
				</div>
				<div class="col-md-3">
					<div class="text-frame">
						<h4>Our Information</h4>
						<p><?php echo get_option('about'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
