
    <!-- Copyright Section Start -->
    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-3 col-xs-12">
            <?php
              if(get_theme_mod('logo_type') == 'image_logo') {
                $logo = '<img src="'.get_theme_mod('image_logo').'" style="max-width:'.get_theme_mod('logo_dimension').'" alt="">';
              }else{
                $logo = get_theme_mod('text_logo', 'Minimal');
              }
            ?>
            <div class="footer-logo">
              <?php echo $logo; ?>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12">     
            <div class="social-icon text-center">
              <?php $links = get_theme_mod('social_media_repeater');
              foreach($links as $link) :
              ?>
                <a href="<?php echo $link['social_media_url']; ?>"><i class="<?php echo $link['social_media_icon']; ?>"></i></a>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="col-lg-4 col-md-5 col-xs-12">
            <p class="float-right"><?php echo get_theme_mod('footer_copyright'); ?></p>
          </div> 
        </div>
      </div>
    </div>
    <!-- Copyright Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    
    <?php wp_footer(); ?>
  </body>
</html>