<?php
/**
 * Template
 */
 ?>

<?php get_header(); ?>

	<?php /*?><?php
		//This function pulls in child pages of the BGOT Template and makes them blocks on the home page. BS-20141027
		$the_query = new WP_Query(array(
			'posts_per_page' => '8',
			//'post_parent' => 5,
			'post_type' => 'post',
			'order' => 'ASC'
		));
		// Open query loop
		if ( $the_query->have_posts() ) :     
			while ($the_query->have_posts()) : $the_query->the_post();
				// Get loop markup
				get_template_part( 'content', 'archive' );
				// Close query loop
			endwhile;
		endif;
	?><?php */?>
    
    <?php if ( have_posts() ) : ?>
    
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

		<?php endif; ?>
  
<?php get_footer(); ?>


  