<!-- Testimonial Section Start -->
<section id="testimonial" class="testimonial section-padding">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
                    <?php $testimonials = get_theme_mod('testimonial_repeater');
                    foreach($testimonials as $testimonial) :
                    
                    // Image Condition 
                    if($testimonial['testimonial_author_thumb']) {
                        $testimonial_author_thumb = $testimonial['testimonial_author_thumb'];
                    }else {
                        $testimonial_author_thumb = get_template_directory_uri() . '/assets/img/testimonial/img2.jpg';
                    }
                    ?>
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="img-thumb">
                                <img src="<?php echo $testimonial_author_thumb; ?>" alt="">
                            </div>
                            <div class="info">
                                <h2><a href="#"><?php echo $testimonial['testimonial_author_name']; ?></a></h2>
                                <h3><a href="#"><?php echo $testimonial['testimonial_author_designation']; ?></a></h3>
                            </div>
                            <div class="content">
                                <p class="description"><?php echo $testimonial['testimonial_author_comments']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->  