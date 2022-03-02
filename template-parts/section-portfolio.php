<!-- Portfolio Section -->
<?php if(get_theme_mod('portfolio_section_show_hide') == true) :?>
<section id="portfolios" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('portfolio_section_title', 'Our Works'); ?></h2>
            <p><?php echo get_theme_mod('portfolio_section_desc'); ?></p>
        </div>
        <!-- Portfolio Recent Projects -->
        <div id="portfolio" class="row">
            <?php $portfolios = get_theme_mod('portfolio_repeater'); foreach($portfolios as $portfolio) : ?>
            <?php 
            if($portfolio['portfolio_thumbnail']) {
                $portfolio_thumbnail = $portfolio['portfolio_thumbnail'];
            }else{
                $portfolio_thumbnail = get_template_directory_uri() . '/assets/img/portfolio/img-1.jpg';
            } 
            
            if($portfolio['portfolio_preview']) {
                $portfolio_preview = $portfolio['portfolio_preview'];
            }else{
                $portfolio_preview = get_template_directory_uri() . '/assets/img/portfolio/img-2.jpg';
            } 
            ?>
            <div class="col-lg-4 col-md-6 col-xs-12 mix development print">
                <div class="portfolio-item">
                    <div class="shot-item">
                        <img src="<?php echo $portfolio_thumbnail?>" alt="<?php echo $portfolio['portfolio_title']; ?>"/>  
                        <div class="single-content">
                            <div class="fancy-table">
                                <div class="table-cell">
                                    <div class="zoom-icon">
                                        <a class="lightbox" href="<?php echo $portfolio_preview; ?>"><i class="lni-eye item-icon"></i></a>
                                    </div>
                                    <a href="#"><?php echo $portfolio['portfolio_title']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>               
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- Portfolio Section Ends --> 