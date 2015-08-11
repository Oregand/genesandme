<?php
/**
 * Template Name: Reports Page
 */
?>
<?php
    $args = array(
        'type' => 'report',
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
				<div class="heading-holder">
					<h1><?php echo $hero_title; ?></h1>
				</div>
				<p class="tagline"><?php echo $hero_sub_title; ?></p>
				<span class="info"><?php echo $hero_tag; ?></span>
			</div>
		</div>
		<img src="<?php echo $hero_image; ?>" alt="" class="bg-stretch">
	</section>

<section class="main">
    <div class='container'>
      		<?php
      			$temp = $wp_query;
      			$wp_query= null;
      			$wp_query = new WP_Query();
                  $args = array(
                      'showposts' => '-1',
                      'post_type' => 'report'
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

                ?>

                <div class="col-sm-6 col-md-4 <?php echo $cat_filter ?>">
                    <div class="thumbnail">
                      <?php
                            $thumb_id = get_post_thumbnail_id();
                            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size');
                            $thumb_url = $thumb_url_array[0];

                            if($thumb_url) { ?>
                                <img class="img-responsive" src="<?php echo $thumb_url; ?>" alt="Post Image" width="400">
                       <?php } ?>

                        <div class="caption">
                            <a href="<?php echo the_permalink(); ?>"><h3><?php echo the_title(); ?></h3></a>
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
