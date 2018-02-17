<?php
/**
 * Category Template
 */
?>

<?php get_header(); ?>
<a name="read"></a>
<section id="post-<?php the_ID(); ?>" <?php post_class($my_class); ?>>
  <div class="container">
    <div class="section-title" data-animation="fadeInLeft" data-animation-delay="0">
      <h2><?php single_cat_title('Content in: ',true); ?></h2>


    </div>
            
    
	   <?php if ( have_posts() ) : while ( have_posts () ) : the_post (); ?> 
       					
                  <?php
					$post_image_id = get_post_thumbnail_id($post_to_use->ID);
							if ($post_image_id) {
								$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
								if ($thumbnail) (string)$thumbnail = $thumbnail[0];
							}
				   ?>
	   
	
	   			  <div class="col-md-3 col-sm-12">
                  	 <div class="feature animated blog-container-thb" data-animation="fadeInLeft" data-animation-delay="0" style="background: url('<?php echo $thumbnail; ?>') no-repeat;background-size:cover;">
                         <div class="blog-title-thb">
                            <a href="<?php the_permalink(); ?>" style="color:#fff"><h2><?php the_title(); ?></h2></a>
                         </div>
                     </div>
                     <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
                  </div>   
       		
       <?php endwhile; else: ?>
       		
            <h2 style="text-align:center">Sorry, there are no posts in this category</h2>
       
       <?php endif; ?>
             
  </div>
</section>

<?php get_footer(); ?>
