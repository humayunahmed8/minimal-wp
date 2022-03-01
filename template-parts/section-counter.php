<!-- Counter Section Start -->
<?php if(get_theme_mod('counter_up_section_show_hide', true) == true) : ?>
<section id="counter" class="section-padding">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="row">
                    <?php $counters = get_theme_mod('counter_up_item_repeater');
                    foreach($counters as $count) :
                    ?>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="counter-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-o">
                                <i class="<?php echo $count['counter_up_icon']; ?>"></i>
                            </div>
                            <div class="fact-count">
                                <h3><span class="counter"><?php echo $count['counter_up_number']; ?></span></h3>
                                <p><?php echo $count['counter_up_title']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- Counter Section End -->