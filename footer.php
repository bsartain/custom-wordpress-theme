<footer>

    <div class="container">

	  <?php

      if(is_active_sidebar('footer1')){

      dynamic_sidebar('footer1');

      }

      ?>

      <?php

      if(is_active_sidebar('footer2')){

      dynamic_sidebar('footer2');

      }

      ?>

    </div>

    <div class="container">

        <div class="col-md-2">        
			<ul class="social">
	          <li><a href="https://www.facebook.com/CalvaryChapelCharlotte/?fref=ts"><i class="fa fa-facebook"></i></a></li>
	          <li><a href="https://twitter.com/CalvaryChapelOC"><i class="fa fa-twitter"></i></a></li>
	        </ul>
        </div>
        <div class="col-md-3">
        	<h5 class="footer-text"><a href="mailto:terry@calvarychapelcharlotte.com">terry@calvarychapelcharlotte.com</a></h5>
        </div>
        <div class="col-md-2">
			<h5 class="footer-text">(704) 609-3859</h5>
        </div>
        <div class="col-md-4">
        	<h5 class="footer-text">&copy; <?php echo date("Y") ?> <?php bloginfo('name'); ?></h5>
        </div>

    </div>

  </footer>
  <script>
  	$(document).ready(function(){
		$('label').css('width','100%');
	});
  </script>

<?php wp_footer(); ?>

</body>

</html>