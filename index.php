<?php get_header(); ?>
    
    <!-- Hero Section -->
    <?php get_template_part('template-parts/section', 'hero') ?>
    <!-- Features Section -->
    <?php get_template_part('template-parts/section', 'features') ?>
    <!-- Services Section -->
    <?php get_template_part('template-parts/section', 'services') ?>
    <!-- Video Section -->
    <?php get_template_part('template-parts/section', 'video') ?>
    <!-- Team Section -->
    <?php get_template_part('template-parts/section', 'team') ?>
    <!-- Counter Section -->
    <?php get_template_part('template-parts/section', 'counter') ?>
    <!-- Pricing Section -->
    <?php get_template_part('template-parts/section', 'pricing') ?>
    <!-- Skills Section -->
    <?php get_template_part('template-parts/section', 'skills') ?>
    <!-- Portfolio Section -->
    <?php get_template_part('template-parts/section', 'portfolio') ?>
    <!-- Testimonial Section -->
    <?php get_template_part('template-parts/section', 'testimonials') ?>
    <!-- Blog Section -->
    <?php get_template_part('template-parts/section', 'blog') ?>
    

    <!-- Clients Section Start -->
    <div id="clients" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">NOTABLE CLIENTS</h2>
          <p>Over the last 20 years, we have helped and guided organisations to achieve outstanding results</p>
        </div>
        <div class="row text-align-">
          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
            <div class="client-item-wrapper">
              <img class="img-fluid" src="<?php echo get_template_directory_uri();  ?>/assets/img/clients/img1.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
            <div class="client-item-wrapper">
              <img class="img-fluid" src="<?php echo get_template_directory_uri();  ?>/assets/img/clients/img2.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.9s">
            <div class="client-item-wrapper">
              <img class="img-fluid" src="<?php echo get_template_directory_uri();  ?>/assets/img/clients/img3.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="1.2s">
            <div class="client-item-wrapper">
              <img class="img-fluid"  src="<?php echo get_template_directory_uri();  ?>/assets/img/clients/img4.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Clients Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="section-padding">    
      <div class="container">
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-block">
              <form id="contactForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div>
                   <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea class="form-control" id="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button">
                      <button class="btn btn-common" id="form-submit" type="submit">Send Message</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div> 
                      <div class="clearfix"></div> 
                    </div>
                  </div>
                </div>            
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-right-area wow fadeIn">
              <div class="contact-title">
                <h1>We're a friendly bunch..</h1>
                <p>We create projects for companies and startups with a passion for quality</p>
              </div>
              <h2>Contact Us</h2>
              <div class="contact-right">
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-map-marker"></i>
                  </div>
                  <p>ADDRESS: 28 Green Tower, New York City, USA</p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-envelope"></i>
                  </div>
                  <p><a href="#">Email:  contact@stuck.com</a></p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-phone-handset"></i>
                  </div>
                  <p><a href="#">Phone:  +84 846 250 592</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- Contact Section End -->
    
    <?php get_footer(); ?>
