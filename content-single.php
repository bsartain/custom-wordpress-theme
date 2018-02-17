<?php

/**

 * Content Single Template

 */

?>



<?php $my_class = get_post_meta($post->ID,'kepler-class', true); ?>

<a name="read"></a>

<section id="post-<?php the_ID(); ?>" <?php post_class($my_class); ?>>

  <div class="container">

    <div class="section-title" data-animation="fadeInLeft" data-animation-delay="0">       

      

    </div>

    <div class="col-md-12 col-sm-12">

      <div class="feature animated" data-animation="fadeInLeft" data-animation-delay="0">

        <h1><?php the_title(); ?></h1>

		<span class="sermon-label">Date: </span><?php the_time('F j, Y') ?><br />

		    <?php echo get_the_term_list( get_the_ID(), 'speaker', '<span class="sermon-label">Speaker: </span>' ); ?><br />

		    <?php echo get_the_term_list( get_the_ID(), 'bible_book', '<span class="sermon-label">Bible Book: </span>' ); ?><br />

        <?php echo get_the_term_list( get_the_ID(), 'sermon_series', '<span class="sermon-label">Sermon Series: </span>' ); ?>

        

        <p><?php the_content(); ?></p>        

                

		<?php if( get_field('add_sermon') ): ?>        

            

          <div class="row">

              <audio preload="none" style="width:100%;" controls="controls">

                  <source type="audio/mpeg" src="<?php the_field('add_sermon'); ?>" />

              </audio>

          </div>

          

		<?php endif; ?>
    <?php comments_template(); ?>
        

      </div>

    </div>

  </div>

</section>

