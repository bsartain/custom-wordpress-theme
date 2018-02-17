<?php







/**







 * Template name: Home Page







 */







?>















<?php get_header(); ?>







<a name="read"></a>







<div class="row" style="margin-right:0px">



    <div class="col-md-2">&nbsp;</div>



	  <div class="col-md-4">



      <div style="margin: 80px 20px">



      	<h2>Special Announcement</h2>



        <p>Welcome to Calvary Chapel Charlotte. We are currently in transition as we seek the Lord in what He has for us next. Continue to come back to our website to receive updates and meeting times. Thank you so much for your support as we continue to Win, Disciple and Send people for the Gospel and the kingdom of God.  </p>



      </div>



    </div>



    <div class="col-md-4">



      <div style="margin: 80px 20px">



        <h2>Contact</h2>



        <p><strong>Phone:</strong> (704) 609-3859<br>



        <strong>Email:</strong> <a href="mailto:terry@calvarychapelcharlotte.com">terry@calvarychapelcharlotte.com</a><br>



          Contact any time for prayer, information or how we can help.<br>



          <ul class="social">



            <li><a href="https://www.facebook.com/CalvaryChapelCharlotte/?fref=ts" style="border: 1px solid #737373;color:#737373" target="_blank"><i class="fa fa-facebook"></i></a></li>



            <li><a href="https://twitter.com/CalvaryChapelOC" class="asocial" style="border: 1px solid #737373;color:#737373" target="_blank"><i class="fa fa-twitter"></i></a></li>



          </ul>



        </p>



      </div>



    </div>



    <div class="col-md-2">&nbsp;</div>



   <!--  <style>



      .news{



        padding: 50px 100px 50px 100px;



      }



      @media screen and (max-width: 600px) {



          .news{



            padding: 50px 40px 50px 40px;



          }



      }



    </style> -->







    <!-- <div class="row news">



      <div class="col-md-6">



        <h2>BUILDING UPDATE</h2>



        <h4>Grand Opening 8/21/2016</h4>



        <p>We are in the process of fixing up our new meeting space. Launch of our new Sunday Services will be 08/21/2016. In the meantime, we will gather as a family in various homes, enjoying food, Bible Study, Fellowship and worship. To subscribe to our mailing list for pre-gathering updates and news, please subscribe to our email list.</p>



        <p>God Bless You!</p>



      </div>



      <div class="col-md-6">



        



        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">



        <style type="text/css">



          #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }



          /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.



             We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */



        </style>



        <div id="mc_embed_signup">



        <form action="//calvarychapelcharlotte.us3.list-manage.com/subscribe/post?u=d85cac7bd3f94b3f903838eac&amp;id=88539d46ab" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>



            <div id="mc_embed_signup_scroll">



          <h2>Subscribe to our mailing list for updates</h2>



        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>



        <div class="mc-field-group">



          <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>



        </label>



          <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">



        </div>



        <div class="mc-field-group">



          <label for="mce-FNAME">First Name </label>



          <input type="text" value="" name="FNAME" class="" id="mce-FNAME">



        </div>



        <div class="mc-field-group">



          <label for="mce-LNAME">Last Name </label>



          <input type="text" value="" name="LNAME" class="" id="mce-LNAME">



        </div>



          <div id="mce-responses" class="clear">



            <div class="response" id="mce-error-response" style="display:none"></div>



            <div class="response" id="mce-success-response" style="display:none"></div>



          </div>    



            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d85cac7bd3f94b3f903838eac_88539d46ab" tabindex="-1" value=""></div>



            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>



            </div>



        </form>



        </div>



        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>



        



      </div>      



    </div> -->



    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.8736903305426!2d-80.93784068446345!3d35.1348254673506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88569bd6ec1c8c21%3A0xcad3652b3d9ecdfa!2s8809+Lenox+Pointe+Dr%2C+Charlotte%2C+NC+28273!5e0!3m2!1sen!2sus!4v1465249801865" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> -->



</div>















<?php 







  //Daily devo loop



  $args = array(







    'category_name'    => 'devotion',



    'post_type'        => 'post',



    'orderby'          => 'date',



    'posts_per_page'   => 1



    



  );







$query = new WP_Query( $args ); 







?>







<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>



  <section id="features" style="background-color:#f1f1f1">



    <div class="container"> 



          <div class="col-md-12 col-sm-12" style="padding:0">



            <div class="feature animated" data-animation="fadeInLeft" data-animation-delay="0">



              <h2 style="color: #caac5e"><?php the_title(); ?></h2>



              <p style="color: #fff"><?php the_content(); ?></p>



            </div>



          </div>



     </div>



  </section>



<?php endwhile; ?>



<?php wp_reset_postdata();//resets the posts so that the loop[ below can work correctly. ?>



<?php endif; ?>







<?php if( have_rows('homepage') ): while ( have_rows('homepage') ) : the_row() ?>







<style>







.animated p {







	color:<?php the_sub_field('text_color'); ?>;







}







</style>







<section id="features" style="background: url('<?php the_sub_field('image');?>') no-repeat center center scroll; background-size:cover; background-color:<?php the_sub_field('background_color');?>">







  <div class="container">	







        <div class="col-md-12 col-sm-12" style="color: #fff;padding:0">







          <div class="feature animated" data-animation="fadeInLeft" data-animation-delay="0" >







            <a href="<?php the_sub_field('link');?>"><h2><?php the_sub_field('title');?></h2></a>







            <?php the_sub_field('content');?>







          </div>







        </div>







   </div>







</section>







   







<?php	endwhile; else :?>







		







			// no rows found







		







<?php endif; ?>















<script>



$(document).ready(function(){



  $('.wpcf7-response-output').css({"color":"#000"});



  $('.wpcf7-response-output').html('Someone will be in touch shortly. God bless you.');



  $('p:contains("Devotional provided")').addClass('hidedevo').css("display", "none");  



  $('p:contains("Thought for the")').css({"display":"none"});



  //Script for special announcements for CCCharlotte. Changes the home page.

  



</script>











<?php get_footer(); ?>



















