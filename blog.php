<?php

/**
 *
 * Template name: Blog Page
 *
 */

 ?>



<?php get_header(); ?>



	<a name="read"></a>

    <section id="post-<?php the_ID(); ?>" <?php post_class($my_class); ?>>

      <div class="container">

        <div class="section-title" data-animation="fadeInLeft" data-animation-delay="0">

          <h2><?php the_title(); ?></h2>

        </div>
            
            <?php
              // set up or arguments for our custom query
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $wp_query = new WP_Query();
              $wp_query->query('category_name=blog&posts_per_page='.get_option('posts_per_page').'&paged=' . $paged);

              // Open query loop

             if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts () ) : $wp_query->the_post (); ?> 
              
              <?php

              //Get post image ID from the post id. get_post_thumbnail_id gets the ID of the image used attached to the post 
              $post_image_id = get_post_thumbnail_id($post->ID);
                //If the post image ID
                if ($post_image_id) {
                  //wp_get_attachment_image_src returns an array of a url of the attached image src, the width and height of the image, or a boolean of true, which returns url, width, height, or false, which returns nothing. False means there's no image available. 
                  $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
                  //If the $thumbnail isset, meaning if there is an image attached to the post, (string) php converts this into a string. The [0] means set it to "nothing" i.e. "" if it is false. 
                  if ($thumbnail) (string)$thumbnail = $thumbnail[0];
                } else{
                  //Set the url to the string http://cdn.charismanews.com/images/archives/stories/featured-news/Dark-cross.jpg
                  $thumbnail = 'http://brettsartain.org/ccpittsburgh/wp-content/uploads/2016/02/cross.jpg';
                }

              ?>       
              

                      <div class="col-md-3 col-sm-12">

                         <a href="<?php the_permalink(); ?>">

                         <div class="feature animated blog-container-thb" data-animation="fadeInLeft" data-animation-delay="0" style="background: url('<?php echo $thumbnail; ?>') center center no-repeat;background-size:cover;margin-bottom:0;cursor:pointer">

                         </div>

                         </a>

                         <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>

                         <a href="<?php the_permalink(); ?>"><?php echo get_the_excerpt(); ?></a>

                      </div>

                

           <?php endwhile; ?>
                
                <div class="row" style="padding:25px">
                  <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'thematic')) ?></div>
                  <div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'thematic')) ?></div>
                </div>
                

           <?php else: ?>

                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

           <?php endif; ?>


      </div>

    </section>

<?php get_footer(); ?>






  