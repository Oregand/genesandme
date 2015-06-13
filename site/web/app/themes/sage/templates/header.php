<div id="wrapper">
    <header id="header">
      <div class="container">
        <div class="logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/helix48.png" alt="FORKIO"></a></div>
        <nav id="nav">
          <div class="opener-holder">
            <a href="#" class="nav-opener"><span></span></a>
          </div>
          <a href="/products/" class="btn btn-primary rounded">Our Products</a>
          <div class="nav-drop">
          <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

            <div class="drop-holder visible-sm visible-xs">
              <span>Follow Us</span>
              <ul class="social-networks">
                <li><a class="fa fa-github" href="#"></a></li>
                <li><a class="fa fa-twitter" href="#"></a></li>
                <li><a class="fa fa-facebook" href="#"></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>