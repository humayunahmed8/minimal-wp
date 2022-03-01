<!-- Services Section Start -->
<?php if(get_theme_mod('service_section_show_hide', true) == true) : ?>
<section id="services" class="section-padding bg-gray">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('service_section_title', 'Our Services'); ?></h2>
            <p><?php echo get_theme_mod('service_section_desc', 'A desire to help and empower others between community contributors in technology <br> began to grow in 2020.') ?></p>
        </div>
        <div class="row">
            <?php $services = get_theme_mod('service_item_repeater'); ?>
            <?php foreach($services as $service) : ?>
            <!-- Services item -->
            <div class="<?php echo get_theme_mod('service_item_column'); ?> col-md-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
                    <div class="icon">
                        <i class="<?php echo $service['service_icon']; ?>"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#"><?php echo $service['service_title']; ?></a></h3>
                        <p><?php echo $service['service_desc']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- Services Section End -->