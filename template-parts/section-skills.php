<?php if(get_theme_mod('skills_section_show_hide') == true) :?>
<div class="skill-area section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
                <?php 
                if(get_theme_mod('skills_image')){
                    $skills_image = get_theme_mod('skills_image');
                }else{
                    $skills_image = get_template_directory_uri() . '/assets/img/about/img-1.jpg';
                } ?>
                <img class="img-fluid" src="<?php echo $skills_image; ?>" alt="" >
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12 info wow fadeInRight" data-wow-delay="0.3s">
            <div class="site-heading">
                <h2 class="section-title"><?php echo get_theme_mod('skills_content_title', 'Our skills'); ?></h2>
                <p>
                    <?php echo get_theme_mod('skills_content_desc'); ?>
                </p>
            </div>
            <div class="skills-section">
                <?php $skills = get_theme_mod('skills_progress_bar_repeater'); 
                foreach($skills as $skill) :
                ?>
                <div class="progress-box">
                    <h5><?php echo $skill['skills_bar_title']; ?> <span class="pull-right"><?php echo $skill['skills_bar_percentage']; ?>%</span></h5>
                    <div class="progress" style="opacity: 1; left: 0px;">
                        <div class="progress-bar" role="progressbar" data-width="<?php echo $skill['skills_bar_percentage']; ?>" style="width: <?php echo $skill['skills_bar_percentage']; ?>%;"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>