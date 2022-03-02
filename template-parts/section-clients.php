<!-- Clients Section Start -->
<?php if(get_theme_mod('client_section_show_hide') ==  true) : ?>
<div id="clients" class="section-padding bg-gray">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('client_section_title', 'Notable clients'); ?></h2>
            <p><?php echo get_theme_mod('client_section_title_desc'); ?></p>
        </div>
        <div class="row text-align-">
            <?php $clients = get_theme_mod('client_item_repeater'); 
            foreach($clients as $client) :

            if($client['client_thumb']) {
                $client_thumb = $client['client_thumb'];
            }else {
                $client_thumb = get_template_directory_uri() . '/assets/img/clients/img1.png';
            }
            ?>
            <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="client-item-wrapper">
                    <img class="img-fluid" src="<?php echo $client_thumb; ?>" alt="">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>
<!-- Clients Section End -->