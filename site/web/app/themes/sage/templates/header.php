<div id="wrapper">
    <header id="header">
      <div class="container">
        <div class="logo"><a href="/home/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/helix48.png" alt="GENESANDME"></a></div>
        <nav id="nav">
          <div class="opener-holder">
            <a href="#" class="nav-opener"><span></span></a>
          </div>
          <a href="/products/" class="btn btn-primary rounded">Our Products</a>
          <div class="nav-drop">
          <?php wp_nav_menu( array( 'menu_name' => 'Header Menu' ) ); ?>
          </div>
        </nav>
      </div>
    </header>
