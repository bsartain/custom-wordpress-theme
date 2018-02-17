<?php

/**

 * Archive Template

 */

?>

<?php

$post_image_id = get_post_thumbnail_id($post_to_use->ID);

    if ($post_image_id) {

      $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);

      if ($thumbnail) (string)$thumbnail = $thumbnail[0];

    }

?>

<?php get_header(); ?>

<a name="read"></a>

<section id="post-<?php the_ID(); ?>" <?php post_class(array($my_class,'col-md-3 col-sm-12')); ?>>

  <div class="container">

                

                  <?php

          $post_image_id = get_post_thumbnail_id($post_to_use->ID);

              if ($post_image_id) {

                $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);

                if ($thumbnail) (string)$thumbnail = $thumbnail[0];

              }

           ?> 

            <div>

               <a href="<?php the_permalink(); ?>">

               <div class="feature animated blog-container-thb" data-animation="fadeInLeft" data-animation-delay="0" style="background: url('<?php echo $thumbnail; ?>') center center no-repeat;background-size:cover;margin-bottom:0">

               </div>

               </a>

               <h4><?php the_title(); ?></h4>

               <a href="<?php the_permalink(); ?>"><?php echo get_the_excerpt(); ?></a>

            </div>      

  </div>

</section>