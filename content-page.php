<?php

/**

 * Page Template

 */

?>



<?php /*?><?php

$post_image_id = get_post_thumbnail_id($post_to_use->ID);

		if ($post_image_id) {

			$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);

			if ($thumbnail) (string)$thumbnail = $thumbnail[0];

		}

?><?php */?>

<?php $my_class = get_post_meta($post->ID,'kepler-class', true); ?>

<a name="read"></a>

<section id="post-<?php the_ID(); ?>" <?php post_class($my_class); ?>>

  <div class="container">

    <div class="section-title" data-animation="fadeInLeft" data-animation-delay="0">

      <h2><?php the_title(); ?></h2>

    </div>

    <div class="col-md-12 col-sm-12">

      <div class="feature animated" data-animation="fadeInLeft" data-animation-delay="0">

        <!--<div class="feature-icon">

          <i class="fa fa-eye"></i>

        </div>-->

        <p><?php the_content(); ?></p>

      </div>

    </div>

  </div>

</section>

<?php

    if ( is_page('gatherings')) { 

    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12148.350495140756!2d-80.0540187!3d40.4290586!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe61b19e235b758bd!2sCalvary+Chapel!5e0!3m2!1sen!2sus!4v1438140870024" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';

	}

?>

