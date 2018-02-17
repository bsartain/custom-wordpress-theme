<?php
/**
 * Taxonomy Template
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
      <h2><?php single_cat_title('Content in: ',true); ?></h2>
    </div>
            
    
	   <?php if ( have_posts() ) : while ( have_posts () ) : the_post ();  
	   
	   
	   			  echo '<div class="col-md-3 col-sm-12"><div class="feature animated" data-animation="fadeInLeft" data-animation-delay="0">';
				  echo '<a href="' . get_the_permalink() . '">'. get_the_post_thumbnail($post_id, 'medium') . '</a>';
				  echo '<h4 style="font-size:16px"><a href="' . get_the_permalink() . '">'. get_the_title() . '</a></h4>';
				  echo '<div style="font-size:13px">' . get_the_excerpt() . '</div>';
				  echo '</div></div>';
	   
	   
	   ?>
       		
       <?php endwhile; else: ?>
       		
            <h2 style="text-align:center">Sorry, there are no posts in this category</h2>
       
       <?php endif; ?>
             
  </div>
</section>

<?php get_footer(); ?>

<?php /*?><?php
		  //This function pulls in child pages of the BGOT Template and makes them blocks on the home page. BS-20141027
		  $the_query = new WP_Query(array(
			  'posts_per_page' => '50',
			  //'post_parent'    => 86,
			  'post_type'      => 'sermon',
			  'order'          => 'ASC'
		  ));
		  // Open query loop
		  if ( $the_query->have_posts() ) :     
			  while ($the_query->have_posts()) : $the_query->the_post();
			  		
				  echo '<div class="col-md-3 col-sm-12"><div class="feature animated" data-animation="fadeInLeft" data-animation-delay="0">';
				  echo '<a href="' . get_the_permalink() . '">'. get_the_post_thumbnail($post_id, 'medium') . '</a>';
				  echo '<h4 style="font-size:16px"><a href="' . get_the_permalink() . '">'. get_the_title() . '</a></h4>';
				  echo '<div style="font-size:13px">' . get_the_excerpt() . '</div>';
				  echo '</div></div>';
				  
			  endwhile;
		  endif;
		?><?php */?>