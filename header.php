<!DOCTYPE html>

<html>

<head>

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <meta charset="<?php bloginfo( 'charset' ); ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">  

  <meta name="description" content="">

  <meta name="keywords" content="">

  <meta name="author" content="">

  <meta property="og:title" content="Welcome to the Family">
  <meta property="og:site_name" content="Calvary Chapel Charlotte">
  <meta property="og:url" content="http://calvarychapelcharlotte.com/">
  <meta property="og:image" content="http://calvarychapelcharlotte.com/wp-content/uploads/2015/03/family2.jpg" />
  <meta property="og:description" content="Whether you are visiting for the first time, or you’re a regular attendee, we consider it an honor to have you with us. Our hope is that you would be inspired to live a life that follows Jesus. We look forward to seeing you on Sunday!">
  <meta property="fb:app_id" content="">
  <meta property="og:type" content="article">

  <!--[if lt IE 9]>

    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>

    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

  <![endif]-->

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



  <!-- Google Fonts -->

  <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Montserrat:400' rel='stylesheet' type='text/css'>

  <link rel="shortcut icon" type="image/png" href="https://calvarychapelcharlotte.com/wp-content/uploads/2016/04/favicon.png">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  

  <!-- Header -->

  <header id="topnav" class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">

      <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

          <span class="sr-only">Toggle navigation</span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

        </button>

        <div id="logo">

          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><!--<img src="images/logo.png" alt="">--><?php bloginfo('name'); ?></a>

        </div>

      </div>

      <div class="collapse navbar-collapse" id="navigation">

      <?php wp_nav_menu( array( 

	  		'menu_id'         => 'nav',

			'menu_class'      => 'nav navbar-nav',			

	   ) ); ?>

      </div>

    </div>

  </header>

  <!-- End Header -->

  <!-- Backgrounds -->

  <div id="backgrounds">

    <ul class="slides">

    <?php if(get_field('homepage_slides')): ?>



	<?php while(has_sub_field('homepage_slides')): ?>



		<li><img src="<?php the_sub_field('slides');?>"></li>



	<?php endwhile; ?>



	<?php endif; ?>

      <li>

		<?php

        if ( has_post_thumbnail() ) {

          the_post_thumbnail();

        } elseif ( is_simgular( 'sermon' ) ) {

          echo '<img src="http://calvarychapelcharlotte.com/wp-content/uploads/2015/08/communion.jpg">';

        } else {
          
        }
    ?>

	  </li>

    </ul>

  </div>

 <!-- End Backgrounds -->

  

  

  <div id="home">

    <div class="slide-caption">

      <div class="slide-middle">

        <div class="slide-intro">

          <h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h3> 

          <hr>

        </div>

        <div id="home-slider" class="flexslider">             

          <ul class="slides">        

            <li>
                <h1>

              			<?php

              				if (is_404()) {

              					echo "404 Error";

              				} elseif (is_page('welcome')) {

                        the_title();
                        echo '<div class="slide-intro">
                                <hr>
                                <h3>WIN, DISCIPLE, SEND</h3>
                              </div>';


              				} else {

                        the_title();

                      }

              			?>            

                </h1>
            </li>

          </ul>

        </div>

        <div class="home-text">

  		  <h6 class="home-excerpt"><?php if ( is_page(86)) { echo get_the_excerpt(); } else { }	?></h6>

          <a href="#read" class="btn btn-empty">More</a>
		  
<?php
          $link = '/give/';
          $class = 'btn btn-empty';
		  if(is_front_page()){
			echo "<a href='".$link."' class='".$class."'>Give</a>";
          }	
?>

        </div>

      </div>

    </div>

  </div>

<?php

  if ( is_admin_bar_showing() ) {
    echo '<style> #topnav{margin-top:30px} </style>';
  } else {
    echo '<style> #topnav{margin-top:0px} </style>';
  }

?>

<script>
	//Script for special announcements for CCCharlotte. Changes the home page.
  	//$('.flexslider').find('h1').html('Sunday Services Cancelled <div class="slide-intro"> <hr> <h3>Next service will be 11/13</h3> </div>');
	//$('#backgrounds .slides li:first').css({
	    //'background-image':'url("http://www.gracecity.com.au/wp-content/uploads/2014/06/lightstock_106669_small_user_4322826.jpg")',
	    //'display':'list-item'
	//});

</script>



  