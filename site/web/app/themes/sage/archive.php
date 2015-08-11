
<?php
    $args = array(
        'type' => 'post',
        'orderby' => 'name',
        'order' => 'ASC'
        );
      $categories = get_categories($args);
?>
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
                       <div class='row'>
                    <?php
                    }

                    $category = get_the_category();
                    $cat_filter = $category[0]->cat_name;

                ?>

                <div class="col-sm-6 col-md-4 <?php echo $cat_filter ?>">
                    <a href="<?php echo the_permalink(); ?>">
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
                              <span><?php echo the_category(); ?></span>
                              <p><?php echo the_excerpt(); ?></p>
                            </div>
                        </div>
                    </a>
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
