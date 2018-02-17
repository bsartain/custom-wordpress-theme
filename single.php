 <?php get_header(); ?>



	<?php while ( have_posts() ) : the_post(); ?>



        <?php get_template_part( 'content', 'single' ); ?>
        



    <?php endwhile; // end of the loop. ?>



  

  <!--<section id="features">

    <div class="container">

      <div class="section-title">

        <h2>Welcome to Kepler</h2>        

        <p>Sed feugiat, nisl sit amet pellentesque dignissim, nisi tellus semper tortor.</p>

      </div>

      <div class="col-md-6 col-sm-6">

        <div class="feature left animated" data-animation="fadeInLeft" data-animation-delay="0">

          <div class="feature-icon">

            <i class="fa fa-eye"></i>

          </div>

          <h4>Retina Ready</h4>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        </div>

        <div class="feature left animated" data-animation="fadeInLeft" data-animation-delay="0">

          <div class="feature-icon">

            <i class="fa fa-support"></i>

          </div>

          <h4>Lifetime Support</h4>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        </div>

        <div class="feature left animated" data-animation="fadeInLeft" data-animation-delay="0">

          <div class="feature-icon">

            <i class="fa fa-google"></i>

          </div>

          <h4>Google Font Collection</h4>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        </div>

      </div>

      <div class="col-md-6 col-sm-6">

        <div class="feature right animated" data-animation="fadeInRight" data-animation-delay="0">

          <div class="feature-icon">

            <i class="fa fa-tablet"></i>

          </div>

          <h4>100% Responsive</h4>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        </div>

        <div class="feature right animated" data-animation="fadeInRight" data-animation-delay="0">

          <div class="feature-icon">

            <i class="fa fa-code"></i>

          </div>

          <h4>Clean Code</h4>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        </div>

        <div class="feature right animated" data-animation="fadeInRight" data-animation-delay="0">

          <div class="feature-icon">

            <i class="fa fa-bitbucket"></i>

          </div>

          <h4>Multiple Colors</h4>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        </div>

      </div>

    </div>

  </section>

  

  

  <section id="about" class="grey">

    <div class="container">

      <div class="col-md-6">

        <div class="section-title-alt">

          <h4>Who we are</h4>

          <hr>

        </div>

        <div class="about-text">

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod

          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,

          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo

          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse

          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non

          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod

          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,

          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo

          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>

        </div>

      </div>

      <div class="col-md-6">

        <div class="section-title-alt">

          <h4>We are good at</h4>

          <hr>

        </div>

        <h6>Web Design</h6>

        <div class="progress">

          <div class="progress-bar"  role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">

          </div>

        </div>

        <h6>Python</h6>

        <div class="progress">

          <div class="progress-bar"  role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">

          </div>

        </div>

        <h6>Graphic Design</h6>

        <div class="progress">

          <div class="progress-bar"  role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">

          </div>

        </div>

        <h6>WordPress</h6>

        <div class="progress">

          <div class="progress-bar"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">

          </div>

        </div>

      </div>

    </div>

  </section>-->



  <!--<section id="team">

    <div class="container">

      <div class="section-title">

        <h2>Meet the team</h2>

        <p>Sed feugiat, nisl sit amet pellentesque dignissim, nisi tellus semper tortor.</p>

      </div>

      <div class="col-md-3 col-sm-6">

        <div class="team animated" data-animation="fadeInUp" data-animation-delay="0">

          <div class="team-photo">

            <img src="images/team/1.jpg" alt="">

            <div class="team-overlay">

              <ul class="social">

                <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

              </ul>             

            </div>

          </div>

          <div class="team-info">

            <h4>Walter White</h4>

            <span>Founder</span>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus.</p>

          </div>

        </div>

      </div>

      <div class="col-md-3 col-sm-6">

        <div class="team animated" data-animation="fadeInUp" data-animation-delay="500">

          <div class="team-photo">

            <img src="images/team/2.jpg" alt="">

            <div class="team-overlay">

              <ul class="social">

                <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

              </ul>             

            </div>

          </div>

          <div class="team-info">

            <h4>Jesse Pinkman</h4>

            <span>Co-Founder</span>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus.</p>

          </div>

        </div>

      </div>

      <div class="col-md-3 col-sm-6">

        <div class="team animated" data-animation="fadeInUp" data-animation-delay="1000">

          <div class="team-photo">

            <img src="images/team/3.jpg" alt="">

            <div class="team-overlay">

              <ul class="social">

                <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

              </ul>             

            </div>

          </div>

          <div class="team-info">

            <h4>Cersei Lannister</h4>

            <span>Designer</span>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus.</p>

          </div>

        </div>

      </div>

      <div class="col-md-3 col-sm-6">

        <div class="team animated" data-animation="fadeInUp" data-animation-delay="1500">

          <div class="team-photo">

            <img src="images/team/4.jpg" alt="">

            <div class="team-overlay">

              <ul class="social">

                <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

              </ul>             

            </div>

          </div>

          <div class="team-info">

            <h4>Skyler White</h4>

            <span>Account</span>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus.</p>

          </div>

        </div>

      </div>

    </div>

  </section>-->  



  <!--<section id="services" class="parallax-section">

    <div class="parallax-overlay">

      <div class="container">

        <div class="section-title">

          <h2>What we do</h2>          

        </div>

        <div class="col-md-3 col-sm-6">

          <div class="service animated" data-animation="bounceIn" data-animation-delay="0">

            <div class="service-icon">

              <i class="fa fa-paint-brush"></i>

            </div>

            <h4>Graphic Design</h4>

            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>

          </div>

        </div>

        <div class="col-md-3 col-sm-6">

          <div class="service animated" data-animation="bounceIn" data-animation-delay="500">

            <div class="service-icon">

              <i class="fa fa-laptop"></i>

            </div>

            <h4>Web Development</h4>

            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>

          </div>

        </div>

        <div class="col-md-3 col-sm-6">

          <div class="service animated" data-animation="bounceIn" data-animation-delay="1000">

            <div class="service-icon">

              <i class="fa fa-send"></i>

            </div>

            <h4>Web Marketing</h4>

            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>

          </div>

        </div>

        <div class="col-md-3 col-sm-6">

          <div class="service animated" data-animation="bounceIn" data-animation-delay="1500">

            <div class="service-icon">

              <i class="fa fa-eyedropper"></i>

            </div>

            <h4>Branding</h4>

            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>

          </div>

        </div>

      </div>

    </div>

  </section>-->



  <!--<section id="call-to-action" class="grey">

    <div class="container">

      <div class="call animated" data-animation="fadeInUp" data-animation-delay="0">

        <h2>

          <span>Do you like what you see?</span>

          <a href="#" class="btn btn-empty-dark btn-lg">Get in touch</a>

        </h2>

      </div>

    </div>

  </section>-->



  <!--<section id="pricing">

    <div class="container">

      <div class="section-title">

        <h2>Our Prices</h2>        

        <p>Sed feugiat, nisl sit amet pellentesque dignissim, nisi tellus semper tortor.</p>

      </div>

      <div class="col-md-3 col-sm-6">

        <div class="pricing-table animated" data-animation="fadeInDown" data-animation-delay="0">

          <div class="pricing-head">

            <div class="price">

              <span>$0</span>

            </div>

            <h3>Free</h3>

          </div>

          <hr>

          <div class="pricing-body">

            <ul class="nav">

              <li>512MB Memory</li>

              <li>1 Core serviceor</li>

              <li>20GB SSD Disk</li>

              <li>1TB Transfer</li>

              <li>1 Month Support</li>

            </ul>

          </div>

          <div class="pricing-footer">

            <a href="#" class="btn btn-custom">Sign Up</a>

          </div>

        </div>

      </div>

      <div class="col-md-3 col-sm-6">

        <div class="pricing-table animated" data-animation="fadeInDown" data-animation-delay="500">

          <div class="pricing-head">

            <div class="price">

              <span>$9</span>

            </div>

            <h3>Starter</h3>

          </div>

          <hr>

          <div class="pricing-body">

            <ul class="nav">

              <li>1GB Memory</li>

              <li>2 Core serviceor</li>

              <li>40GB SSD Disk</li>

              <li>5TB Transfer</li>

              <li>3 Month Support</li>

            </ul>

          </div>

          <div class="pricing-footer">

            <a href="#" class="btn btn-custom">Sign Up</a>

          </div>

        </div>

      </div>

      <div class="col-md-3 col-sm-6">

        <div class="pricing-table selected animated" data-animation="fadeInDown" data-animation-delay="1000">

          <div class="pricing-head">

            <div class="price">

              <span>$19</span>

            </div>

            <h3>Premium</h3>

          </div>

          <hr>

          <div class="pricing-body">

            <ul class="nav">

              <li>2GB Memory</li>

              <li>4 Core serviceor</li>

              <li>80GB SSD Disk</li>

              <li>10TB Transfer</li>

              <li>6 Month Support</li>

            </ul>

          </div>

          <div class="pricing-footer">

            <a href="#" class="btn btn-custom">Sign Up</a>

          </div>

        </div>

      </div>

      <div class="col-md-3 col-sm-6">

        <div class="pricing-table animated" data-animation="fadeInDown" data-animation-delay="1500">

          <div class="pricing-head">

            <div class="price">

              <span>$59</span>

            </div>

            <h3>Platinum</h3>

          </div>

          <hr>

          <div class="pricing-body">

            <ul class="nav">

              <li>8GB Memory</li>

              <li>8 Core serviceor</li>

              <li>120GB SSD Disk</li>

              <li>25TB Transfer</li>

              <li>12 Month Support</li>

            </ul>

          </div>

          <div class="pricing-footer">

            <a href="#" class="btn btn-custom">Sign Up</a>

          </div>

        </div>

      </div>

    </div>

  </section>-->    



  <!--<section id="portfolio" class="grey">

    <div class="section-title">

      <h2>Our Works</h2>      

    </div>

    <ul id="filters" class="nav">

      <li class="filter" data-filter="all">All</li>

      <li class="filter" data-filter="graphic">Graphic</li>

      <li class="filter" data-filter="photography">Photography</li>

      <li class="filter" data-filter="branding">Branding</li>

      <li class="filter" data-filter="video">Video</li>

    </ul>

    <ul id="works-list" class="nav">

      <li class="mix graphic mix_all">

        <img src="images/portfolio/1.jpg" alt="">

        <a href="project-1.html" class="open-project">

          <div class="text-holder">

            <div class="text-caption">

              <div class="text-middle">

                <h5>Lotus Flower</h5>

              </div>

            </div>

          </div>

        </a>

      </li>

      <li class="mix photography mix_all">

        <img src="images/portfolio/2.jpg" alt="">

        <a href="project-2.html" class="open-project">

          <div class="text-holder">

            <div class="text-caption">

              <div class="text-middle">

                <h5>Alan Breakfast</h5>

              </div>

            </div>

          </div>

        </a>

      </li>

      <li class="mix graphic mix_all">

        <img src="images/portfolio/3.jpg" alt="">

        <a href="project-1.html" class="open-project">

          <div class="text-holder">

            <div class="text-caption">

              <div class="text-middle">

                <h5>Wild Side</h5>

              </div>

            </div>

          </div>

        </a>

      </li>

      <li class="mix video mix_all">

        <img src="images/portfolio/4.jpg" alt="">

        <a href="project-1.html" class="open-project">

          <div class="text-holder">

            <div class="text-caption">

              <div class="text-middle">

                <h5>Winter Is Coming</h5>

              </div>

            </div>

          </div>

        </a>

      </li>

      <li class="mix graphic mix_all">

        <img src="images/portfolio/5.jpg" alt="">

        <a href="project-1.html" class="open-project">

          <div class="text-holder">

            <div class="text-caption">

              <div class="text-middle">

                <h5>Hotel California</h5>

              </div>

            </div>

          </div>

        </a>

      </li>

      <li class="mix branding mix_all">

        <img src="images/portfolio/6.jpg" alt="">

        <a href="project-1.html" class="open-project">

          <div class="text-holder">

            <div class="text-caption">

              <div class="text-middle">

                <h5>Bycicle Race</h5>

              </div>

            </div>

          </div>

        </a>

      </li>

      <li class="mix photography video mix_all">

        <img src="images/portfolio/7.jpg" alt="">

        <a href="project-1.html" class="open-project">

          <div class="text-holder">

            <div class="text-caption">

              <div class="text-middle">

                <h5>Stairway To Heaven</h5>

              </div>

            </div>

          </div>

        </a>

      </li>

      <li class="mix graphic branding mix_all">

        <img src="images/portfolio/8.jpg" alt="">

        <a href="project-1.html" class="open-project">

          <div class="text-holder">

            <div class="text-caption">

              <div class="text-middle">

                <h5>Wish You Were Here</h5>

              </div>

            </div>

          </div>

        </a>

      </li>

    </ul>

  </section>--> 



 <!-- <section id="clients">

    <div class="container">

      <div id="clients-carousel" class="owl-carousel">

        <div class="item"><img src="images/clients/1.png" alt=""></div>

        <div class="item"><img src="images/clients/2.png" alt=""></div>

        <div class="item"><img src="images/clients/3.png" alt=""></div>

        <div class="item"><img src="images/clients/4.png" alt=""></div>

        <div class="item"><img src="images/clients/5.png" alt=""></div>

        <div class="item"><img src="images/clients/6.png" alt=""></div>

        <div class="item"><img src="images/clients/7.png" alt=""></div>

        <div class="item"><img src="images/clients/8.png" alt=""></div>

        <div class="item"><img src="images/clients/9.png" alt=""></div>

        <div class="item"><img src="images/clients/10.png" alt=""></div>

      </div>

    </div>

  </section>-->



  <!--<section id="contact" class="parallax-section">

    <div class="parallax-overlay">

      <div class="container">

        <div class="col-md-8 col-md-offset-2">

          <div class="section-title">

            <h2>Get in touch</h2>

          </div>        

          <form class="contact-form" method="post" action="contact.php" id="contact-us">

            <div class="form-double">

              <div class="form-group">

                <input name="fullname" type="text" class="form-control" placeholder="Full Name">

              </div>

              <div class="form-group last">

                <input name="email" type="text" class="form-control" placeholder="Email">

              </div>

            </div>

            <div class="form-group">

              <textarea name="message" class="form-control" placeholder="Message"></textarea>

            </div>

            <div class="form-submit">

              <input type="submit" class="btn btn-empty btn-lg" value="Send Message">

            </div>

          </form>

          <div class="form-sent">

            <div class="alert alert-success">

              <h6>Your Message Has Been Sent! Thank you for contacting us.</h6>

            </div>

          </div>

        </div>      

      </div>

    </div>

  </section>-->

  <?php get_footer(); ?>