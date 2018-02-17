<?php

/**

 * Template name: Sermons Page

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

<section id="post-<?php the_ID(); ?>" <?php post_class($my_class); ?>>

  <div class="container">

    <div class="section-title" data-animation="fadeInLeft" data-animation-delay="0">

      <h2><?php the_title(); ?></h2>

    </div>

        

        <?php

        $the_query = new WP_Query(array(

			  'posts_per_page' => '50',

			  //'post_parent'    => 86,

			  'post_type'      => 'sermon',

			  'order'          => 'ASC',

		  ));

		  // Open query loop

		 if ( $the_query->have_posts() ) : while ( $the_query->have_posts () ) : $the_query->the_post (); ?> 

       					

                  <?php

					$post_image_id = get_post_thumbnail_id($post_to_use->ID);

							if ($post_image_id) {

								$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);

								if ($thumbnail) (string)$thumbnail = $thumbnail[0];

							}

				   ?>

	   

	

	   			  <div class="col-md-3 col-sm-12">

                     <a href="<?php the_permalink(); ?>">

                  	 <div class="feature animated blog-container-thb" data-animation="fadeInLeft" data-animation-delay="0" style="background: url('<?php echo $thumbnail; ?>') center center no-repeat;background-size:cover;margin-bottom:0;cursor:pointer">

                     </div>

                     </a>

                     <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

                     <a href="<?php the_permalink(); ?>"><?php echo get_the_excerpt(); ?></a>

                  </div>   

       		

       <?php endwhile; else: ?>

       		

            <h2 style="text-align:center">Sorry, there are no posts in this category</h2>

       

       <?php endif; ?>

        

       

  </div>

</section>

 



<?php get_footer(); ?>