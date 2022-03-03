<?php 
if(is_front_page()){
  get_header();
}else{
  get_header('blog');
}
?>
  <!-- Page header Start -->
  <section class="page-header" <?php if(has_post_thumbnail()) : ?> style="background-image:url(<?php the_post_thumbnail_url(); ?>)" <?php endif; ?>>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-12">
          <div class="breadcrumb-wrapper text-center">
            <h2><?php echo esc_html__('Single Post', 'minimal');?></h2>
            <p><a href="<?php echo site_url(); ?>">Home </a><?php echo esc_html__('/ Single Blog', 'minimal'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Page header End -->

  <!-- Blog Section Start  -->
  <div id="blog-single">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <?php while(have_posts()) : the_post(); ?>
            <div class="blog-post <?php post_class(); ?>">
              <?php if(has_post_thumbnail()) : ?>
                <div class="post-thumb">
                  <?php the_post_thumbnail(); ?>
                </div>
              <?php else : ?>
                <div class="post-thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-1-big.jpg" alt="" />
                </div>
              <?php endif; ?>
              <div class="post-content">
                <?php the_title('<h3>', '</h3'); ?>
                <?php the_content(); ?>
              </div>
            </div>
            <?php endwhile; ?>
            <div class="single-post-comments">
              <?php 
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
              ?>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-xs-12">
            <div class="widgets">
              <!-- Search Widget -->
              <div class="search-input single-widget">
                <input type="text" class="form-control" placeholder="Search Here....." />
              </div>
              <!-- Latest Post Widget -->
              <div class="widget-latest-post single-widget">
                <h4>Latest Post</h4>
                <ul class="latest-post">
                  <li class="single-latest-post">
                    <div class="latest-post-img">
                      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/1.jpg" class="img-fluid" alt="Blog-image"/></a>
                    </div>
                    <h5><a href="single-blog.html">Awesome Blog Title</a></h5>
                    <p><a href="#">12 Feb, 2020</a></p>
                  </li>
                  <li class="single-latest-post">
                    <div class="latest-post-img">
                      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/2.jpg" class="img-fluid" alt="Blog-image"/></a>
                    </div>
                    <h5><a href="single-blog.html">Awesome Blog Title</a></h5>
                    <p><a href="#">12 Feb, 2020</a></p>
                  </li>
                  <li class="single-latest-post">
                    <div class="latest-post-img">
                      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/3.jpg" class="img-fluid" alt="Blog-image"/></a>
                    </div>
                    <h5><a href="single-blog.html">Awesome Blog Title</a></h5>
                    <p><a href="#">12 Feb, 2020</a></p>
                  </li>
                </ul>
              </div>
              <!-- Categories Widget -->
              <div class="categories single-widget">
                <h4>Categories</h4>
                <ul>
                  <li><a href="#">Photography</a></li>
                  <li><a href="#">Education</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Travel</a></li>
                  <li><a href="#">Sports</a></li>
                  <li><a href="#">Technology</a></li>
                  <li><a href="#">Development</a></li>
                  <li><a href="#">Design</a></li>
                </ul>
              </div>
              <!-- Tags Widget -->
              <div class="tags single-widget">
                <h4>Tags</h4>
                <ul>
                  <li><a href="#">Corporate</a></li>
                  <li><a href="#">Web</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Photoshop</a></li>
                  <li><a href="#">Minimal</a></li>
                  <li><a href="#">Popular</a></li>
                  <li><a href="#">Design</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- Blog Section End  -->
<?php get_footer(); ?>
