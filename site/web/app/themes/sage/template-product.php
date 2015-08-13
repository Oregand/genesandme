<?php
/**
 * Template Name: Product Page
 */
?>
<?php
    $args = array(
        'type' => 'product',
        'orderby' => 'name',
        'order' => 'ASC'
        );
      $categories = get_categories($args);
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
				<div class="product-header">
					<h1><?php echo $hero_title; ?></h1>
				</div>
				<p class="tagline"><?php echo $hero_sub_title; ?></p>
				<span class="info"><?php echo $hero_tag; ?></span>
			</div>
		</div>
		<img src="<?php echo $hero_image; ?>" alt="" class="bg-stretch">
	</section>

    <section class="visual-container">
    	<div class="visual-area-products">
    		<div class="container">
    			<h2>GenesandMe Products</h2>
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

                          <div class="plan">
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
    		</div>
    		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-decor-03.jpg" height="1175" width="1380" alt="" class="bg-stretch">
    	</div>
    </section>
