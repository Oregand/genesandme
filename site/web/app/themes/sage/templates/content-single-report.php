<?php while (have_posts()) : the_post(); ?>

    <?php
        $args = array(
            'type' => 'report',
            'orderby' => 'name',
            'order' => 'ASC'
            );
          $categories = get_categories($args);
    ?>


    <section class="main">
        <div class='container'>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="pull-left"><?php echo the_category(); ?></h3>

                    <h2><?php echo the_title(); ?></h2>
                    <p><?php echo the_content() ;?></p>
                    <?php
                          $thumb_id = get_post_thumbnail_id();
                          $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size');
                          $thumb_url = $thumb_url_array[0];

                          if($thumb_url) { ?>
                              <img class="img-responsive center-block" src="<?php echo $thumb_url; ?>" alt="Post Image">
                     <?php } ?>
                </div>
            </div>
            <div class="row text-center">
                <h2>On The Same Subject</h2>
            </div>
        <div>
    </section>

    <section class="main">
        <div class='container'>
          		<?php
          			$temp = $wp_query;
          			$wp_query= null;
          			$wp_query = new WP_Query();
                    $args = array(
                			  'post_type' => 'report',
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
                              <h3><?php echo the_title(); ?></h3>
                              <span><?php echo the_date(); ?></span>
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
