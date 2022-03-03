<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <?php
          if(get_theme_mod('logo_type') == 'image_logo') {
            $logo = '<img src="'.get_theme_mod('image_logo').'" style="max-width:'.get_theme_mod('logo_dimension').'" alt="">';
          }else{
            $logo = get_theme_mod('text_logo', 'Minimal');
          }
          ?>
          <a href="index.html" class="navbar-brand"><?php echo $logo;?></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <?php
            wp_nav_menu(array(
              'theme_location'=> 'primary-menu',
              'menu_class'    => 'navbar-nav mr-auto w-100 justify-content-end clearfix',
              'container'     => false,
            ));
            ?>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->