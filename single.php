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
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
  </div>
  <!-- Blog Section End  -->
<?php get_footer(); ?>
