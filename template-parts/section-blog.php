<!-- Blog Section -->

<?php 
if(get_theme_mod('blog_section_show_hide') ==  true) :
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
);
$query = new WP_Query($args);
?>

<?php if ( $query->have_posts() ) : ?>
<section id="blog" class="section-padding">
    <!-- Container Starts -->
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('blog_section_title', 'Latest blog'); ?></h2>
            <p><?php echo get_theme_mod('blog_section_title_desc', 'A desire to help and empower others between community contributors in technology <br> began to grow in 2020.'); ?></p>
        </div>
        <div class="row">
            <?php while($query->have_posts()) : $query->the_post(); ?>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
                <div class="blog-item-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                    <?php if(has_post_thumbnail()) : ?>
                    <div class="blog-item-img">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>                
                    </div>
                    <?php else: ?>
                    <div class="blog-item-img">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_template_directory_uri();  ?>/assets/img/blog/img1.jpg" alt="">
                        </a>                
                    </div>
                    <?php endif; ?>
                    <div class="blog-item-text"> 
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn btn-common btn-rm"><?php echo esc_html__('Read More', 'minimal'); ?></a>
                    </div>
                </div>
            </div>
            <?php endwhile; 
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<?php else : ?>
<section id="blog" class="section-padding text-center">
    <?php echo esc_html__('Sorry, no posts matched your criteria.', 'minimal'); ?>
</section>
<?php endif; endif; ?>
<!-- blog Section End -->