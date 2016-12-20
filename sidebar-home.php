<?php
/**
 * The template for the sidebar containing the main widget area for the home page
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<div class="home-sidebar-top">
			<h1>From the Gallery</h1>
			<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '679' ); } ?>
			<div class="home-sidebar-top-link">
				<a href="http://www.dragonburn.bokmcdok.com/en/gallery/image-gallery/">Visit the Image Gallery</a>
			</div>
		</div>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
