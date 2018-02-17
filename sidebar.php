<footer>
    <div class="container">
	  <?php
      if(is_active_sidebar('footer1')){
      dynamic_sidebar('footer1');
      }
      ?>
      <!--<div class="col-xs-6">
        <ul class="social">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>-->
      <?php /*?><div class="col-xs-6">
        <h5 class="footer-text">&copy; <?php echo date("Y") ?> <?php bloginfo('name'); ?></h5>
      </div><?php */?>
    </div>
  </footer>
  
