<?php
/**
 * The template for the sidebar containing the main widget area for pages under the about section
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<div class="generic-sidebar">
			<h1>The Burn</h1>
			<ul>
				<li><a href="<?php echo db_get_base_url(); ?>/the-burn/latest-news/">Latest News</a></li>
				<li><a href="<?php echo db_get_base_url(); ?>/the-burn/event-guide/">Event Guide</a></li>
				<li><a href="<?php echo db_get_base_url(); ?>/the-burn/theme/">Theme</a></li>
				<li><a href="<?php echo db_get_base_url(); ?>/the-burn/effigy/">Effigy</a></li>
				<li><a href="<?php echo db_get_base_url(); ?>/the-burn/town-hall/">Town Hall</a></li>
			</ul>
		</div>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>