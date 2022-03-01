<!-- Feature Section Start -->
<div id="feature">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="text-wrapper">
                    <div>
                        <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s"><?php echo get_theme_mod('feature_content_heading'); ?></h2>
                        <p class="mb-4"><?php echo get_theme_mod('feature_content_heading_desc'); ?></p>
                        <a href="<?php echo get_theme_mod('feature_content_btn_url'); ?>" class="btn btn-common"><?php echo get_theme_mod('feature_content_btn_label'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 padding-none feature-bg">
                <div class="feature-thumb">
                    <?php $features = get_theme_mod( 'feature_repeater'); 
                    foreach( $features as $feature ) : ?>
                    <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="icon">
                            <i class="<?php echo $feature['feature_icon']; ?>"></i>
                        </div> 
                        <div class="feature-content">
                            <h3><?php echo $feature['feature_title']; ?></h3>
                            <p><?php echo $feature['feature_desc']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature Section End -->