<?php

/**

 * Home Template

 */

?>



<?php

$post_image_id = get_post_thumbnail_id($post_to_use->ID);

		if ($post_image_id) {

			$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);

			if ($thumbnail) (string)$thumbnail = $thumbnail[0];

		}

?>

<?php $my_class = get_post_meta($post->ID,'kepler-class', true); ?>

<section id="post-<?php the_ID(); ?>" <?php post_class($my_class); ?> style="background: url('<?php echo $thumbnail; ?>') no-repeat center center scroll; background-size:100% auto">

  <div class="container">

    <div class="col-md-12 col-sm-12">

      <div class="feature animated" data-animation="fadeInLeft" data-animation-delay="0">

        <?php the_content(); ?>

      </div>

    </div>

  </div>

</section>







