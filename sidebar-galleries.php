<?php
/**
 * The template for the sidebar containing the main widget area for pages under the galleries section
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<div class="generic-sidebar">
			<h1>Galleries</h1>
			<ul>
				<li><a href="<?php echo db_get_base_url(); ?>/galleries/image/">Image Galleries</a>
					<ul>
						<li><a href="<?php echo db_get_base_url(); ?>/galleries/image/burner-bash/">Burner Bash</a></li>
					</ul>
				</li>
				<li><a href="<?php echo db_get_base_url(); ?>/galleries/video/">Videos</a></li>
			</ul>
		</div>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>