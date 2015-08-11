<?php while (have_posts()) : the_post(); ?>

    <?php
        $args = array(
            'type' => 'product',
            'orderby' => 'name',
            'order' => 'ASC'
            );
          $categories = get_categories($args);
    ?>

    <section class="visual">
        <div class='container'>
          <div class='row'>
            <div class='col-md-6'>
              <h2 class="pull-left">Products</h2>
            </div>
            <div class='col-md-6'>
                <ul class="list-inline">
                    <?php foreach ($categories as $cat) {
                            ?>
      		                    <a href="<?php echo $cat->name; ?>"><li <?php echo isset($_GET['cat']) && $_GET['cat'] == $cat->term_id ? 'selected' : '' ?> value="/resources?cat=<?php echo $cat->term_id ?>"><?php echo $cat->name; ?></li></a>
      		              <?php
                        }
      		          ?>
                </ul>
            </div>
          </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/145592.jpg" alt="" class="bg-stretch">
    </section>

    <section class="main">
        <div class='container text-center'>
            <div class="row">
                <div class="col-md-10">
                    <span class="label label-warning pull-left">Warning</span>
                    <h3 class="pull-left"><?php echo the_category(); ?></h3>

                    <h2><?php echo the_title(); ?></h2>

                    <?php
                          $thumb_id = get_post_thumbnail_id();
                          $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size');
                          $thumb_url = $thumb_url_array[0];

                          if($thumb_url) { ?>
                              <img class="img-responsive img-post" src="<?php echo $thumb_url; ?>" alt="Post Image">
                     <?php } ?>

                    <p><?php echo the_content() ;?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                    <a href="http://twitter.com/home?status=" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=" title="Share on LinkedIn" target="_blank" class="btn btn-linkedin"><i class="fa fa-linkedin"></i> LinkedIn</a>
                    <a href="https://plus.google.com/share?url=" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fa fa-google-plus"></i> Google+</a>
                    <a href="http://www.stumbleupon.com/submit?url=" title="Share on StumbleUpon" target="_blank" data-placement="top" class="btn btn-sitename"><i class="fa fa-sitename"></i> Email</a>
                </div>
            </div>
        <div>
    </section>

    <section class="area">
        <div class='container'>
            <div class="row text-center">
                <h2>On The Same Subject</h2>
            </div>
          		<?php
          			$temp = $wp_query;
          			$wp_query= null;
          			$wp_query = new WP_Query();
                    $args = array(
                			  'post_type' => 'product',
                			  'posts_per_page' => '3',
                			  'orderby' => 'rand'
                	);

                      if(isset($_GET['cat'])) {
                          $args['cat'] = $_GET['cat'];
                      }

          			$wp_query->query($args);

                    $i = 0;
          			while ($wp_query->have_posts()) :
          				$wp_query->the_post();

                       if($i % 3 == 0) { ?>
                           <div class='row'>
                        <?php
                        }
                    ?>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <?php
                                $thumb_id = get_post_thumbnail_id();
                                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size');
                                $thumb_url = $thumb_url_array[0];

                                if($thumb_url) { ?>
                                    <img class="img-responsive" src="<?php echo $thumb_url; ?>" alt="Post Image">
                           <?php } ?>

                            <div class="caption">
                              <h3><?php echo the_category(); ?></h3>
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

<?php endwhile; ?>
