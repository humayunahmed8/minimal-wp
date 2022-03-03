<?php 

/*
Template Name: Homepage
*/

if(is_front_page()){
  get_header();
}else{
  get_header('blog');
}
?>
    
    <!-- Hero Section -->
    <?php get_template_part('template-parts/section', 'hero') ?>
    <!-- Features Section -->
    <?php get_template_part('template-parts/section', 'features') ?>
    <!-- Services Section -->
    <?php get_template_part('template-parts/section', 'services') ?>
    <!-- Video Section -->
    <?php get_template_part('template-parts/section', 'video') ?>
    <!-- Team Section -->
    <?php get_template_part('template-parts/section', 'team') ?>
    <!-- Counter Section -->
    <?php get_template_part('template-parts/section', 'counter') ?>
    <!-- Pricing Section -->
    <?php get_template_part('template-parts/section', 'pricing') ?>
    <!-- Skills Section -->
    <?php get_template_part('template-parts/section', 'skills') ?>
    <!-- Portfolio Section -->
    <?php get_template_part('template-parts/section', 'portfolio') ?>
    <!-- Testimonial Section -->
    <?php get_template_part('template-parts/section', 'testimonials') ?>
    <!-- Blog Section -->
    <?php get_template_part('template-parts/section', 'blog') ?>
    <!-- Client Section -->
    <?php get_template_part('template-parts/section', 'clients') ?>
    <!-- Contact Section -->
    <?php get_template_part('template-parts/section', 'contact') ?>
    
    <?php get_footer(); ?>
