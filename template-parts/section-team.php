<!-- Team Section Start -->
<?php if(get_theme_mod('team_section_show_hide', true) == true) : ?>
<section id="team" class="section-padding text-center">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('team_section_title', 'Meet our team') ?></h2>
            <p><?php echo get_theme_mod('team_section_desc') ?></p>
        </div>
        <div class="row">
            <?php $teams = get_theme_mod('team_item_repeater'); 
            foreach($teams as $team) :
            ?>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
                    <div class="team-img">
                        <?php 
                        if($team['team_member_profile_picture']) {
                            $team_image = $team['team_member_profile_picture'];
                        }else {
                            $team_image = get_template_directory_uri() . '/assets/img/team/team-01.png';
                        }
                        
                        ?>
                        <img class="img-fluid" src="<?php echo $team_image?>" alt="">
                        <div class="team-overlay">
                            <div class="overlay-social-icon text-center">
                                <ul class="social-icons">
                                    <?php if($team['team_member_facebook_url']) : ?>
                                        <li><a href="<?php echo $team['team_member_facebook_url']; ?>"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                    <?php endif; ?>
                                    <?php if($team['team_member_twitter_url']) : ?>
                                        <li><a href="<?php echo $team['team_member_twitter_url']; ?>"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                    <?php endif; ?>
                                    <?php if($team['team_member_instagram_url']) : ?>
                                        <li><a href="<?php echo $team['team_member_instagram_url']; ?>"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="info-text">
                        <h3><a href="#"><?php echo $team['team_member_title']; ?></a></h3>
                        <p><?php echo $team['team_member_designation']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- Team Section End -->