<?php
/**
 * Template Name: Product Page
 */
?>
<?php
    $args = array(
        'type' => 'post',
        'orderby' => 'name',
        'order' => 'ASC'
        );
      $categories = get_categories($args);
?>

<section class="visual">
	<div class="container">
		<div class="text-block">
			<div class="heading-holder">
				<h1>Products</h1>
			</div>
			<p class="tagline">A real gamechanger in the world of genetyping</p>
			<span class="info">Never before have we known more about our DNA and the human genome</span>
		</div>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/apature.jpg" alt="" class="bg-stretch">
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
    <div class='container'>
      		<?php
      			$temp = $wp_query;
      			$wp_query= null;
      			$wp_query = new WP_Query();
                  $args = array(
                      'showposts' => '-1'
                );

                  if(isset($_GET['cat'])) {
                      $args['cat'] = $_GET['cat'];
                  }

      			$wp_query->query($args);

                $i = 0;
      			while ($wp_query->have_posts()) :
      				$wp_query->the_post();

                   if($i % 3 == 0) { ?>
                       <div class='row row-gap-bottom equal'>
                    <?php
                    }

                    $category = get_the_category();
                    $cat_filter = $category[0]->cat_name;

                ?>

                <div class="col-sm-6 col-md-4 <?php echo $cat_filter ?>">
                    <div class="thumbnail">
                      <?php
                            $thumb_id = get_post_thumbnail_id();
                            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size');
                            $thumb_url = $thumb_url_array[0];

                            if($thumb_url) { ?>
                                <img class="img-responsive" src="<?php echo $thumb_url; ?>" alt="Post Image">
                       <?php } ?>

                        <div class="innerColPaddingWhite caption">
                          <h3><?php echo $cat_filter; ?></h3>
                          <span><?php echo the_title(); ?></span>
                          <p><?php echo the_excerpt(); ?></p>
                        </div>
                  </div>
              </div>

                <?php $i++;
                    if($i != 0 && $i % 3 == 0) { ?>
                      </div><!--/.row-->
                      <div class="clearfix"></div>
                <?php } ?>
            <?php endwhile;
                  wp_reset_query();
            ?>
     </div>
</section>
