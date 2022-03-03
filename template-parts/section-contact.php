<!-- Contact Section Start -->
<?php if(get_theme_mod('contact_section_show_hide', true) == true) : ?>
<section id="contact" class="section-padding">    
    <div class="container">
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="contact-block">
                    <?php echo do_shortcode('[contact-form-7 id="416" title="Minimal Contact"]'); ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="contact-right-area wow fadeIn">
                    <div class="contact-title">
                        <h1><?php echo get_theme_mod('contact_section_title', 'We are a friendly bunch..'); ?></h1>
                        <p><?php echo get_theme_mod('contact_section_title_desc'); ?></p>
                    </div>
                    <h2><?php echo get_theme_mod('contact_list_title', 'Contact Us'); ?></h2>
                    <div class="contact-right">
                        <?php $contacts = get_theme_mod('contact_item_repeater');
                        foreach($contacts as $contact) :
                        ?>
                        <div class="single-contact">
                            <div class="contact-icon">
                                <i class="<?php echo $contact['contact_item_icon']; ?>"></i>
                            </div>
                            <p><?php echo $contact['contact_item_title']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>
<?php endif; ?>
<!-- Contact Section End -->