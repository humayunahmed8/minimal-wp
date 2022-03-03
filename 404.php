<?php
	$not_found_bg = array(get_template_directory_uri() . '/assets/img/error-404.svg');
    get_header();
?>	
	<!-- Start Error Page Content -->
	<div class="not-found-wrapper" style="background-image: url('<?php echo $not_found_bg[0]; ?>');">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10">
					<div class="not-found-content text-center">
						<h2><?php esc_html_e('Page could not be'); ?> <span> <?php esc_html_e('found'); ?></span></h2>
						<p> <?php esc_html_e('Oops! Looks like you followed a bad link If you think this is a problem with us. Please contact with us or go back to main page.'); ?></p>
						<a class="back-main" href="<?php echo home_url(); ?>"> <?php esc_html_e('Go back'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Error Page Content -->
<?php get_footer();
