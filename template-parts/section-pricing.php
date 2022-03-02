<?php if(get_theme_mod('pricing_section_show_hide', true) == true) : ?>
<!-- Pricing section Start --> 
<section id="pricing" class="section-padding bg-gray">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('pricing_section_title', 'Best Pricing'); ?></h2>
            <p><?php echo get_theme_mod('pricing_section_desc'); ?></p>
        </div>
        <div class="row">
            <?php $pricing = get_theme_mod('pricing_item_repeater'); 
            foreach($pricing as $price) :
            ?>
            <div class="col-lg-4 col-md-6 col-xs-12 <?php if($price['featured_plan'] == true){echo 'active';} ?>">
                <div class="table wow <?php echo $price['plan_animation']; ?>" id="<?php if($price['featured_plan'] == true){echo 'active';} ?>-tb" data-wow-delay="1.2s">
                    <div class="title">
                        <h3><?php echo $price['pricing_plan_title']; ?></h3>
                    </div>
                    <div class="pricing-header">
                        <p class="price-value">
                            <span>$<?php echo $price['plan_price']; ?></span><span>/<?php echo $price['pricing_plan_sub']; ?></span>
                        </p>
                    </div>
                    <ul class="description">
                        <li><?php echo $price['plan_feature_1']; ?></li>
                        <li><?php echo $price['plan_feature_2']; ?></li>
                        <li><?php echo $price['plan_feature_3']; ?></li>
                        <li><?php echo $price['plan_feature_4']; ?></li>
                        <li><?php echo $price['plan_feature_5']; ?></li>
                        <li><?php echo $price['plan_feature_6']; ?></li>
                        <li><?php echo $price['plan_feature_7']; ?></li>
                    </ul>
                    <a href="<?php echo $price['plan_purchase_btn_link']; ?>" class="btn btn-common"><?php echo $price['plan_purchase_btn_label']; ?></a>
                </div> 
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Pricing Table Section End -->

<?php endif; ?>