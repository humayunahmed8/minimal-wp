<?php
if ( ! is_active_sidebar( 'blog-sidebar' ) ) {
	return;
}
?>

<div class="widgets">
	<?php dynamic_sidebar( 'blog-sidebar' ); ?>
</div><!-- #secondary -->
