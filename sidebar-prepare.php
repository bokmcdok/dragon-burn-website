<?php
/**
 * The template for the sidebar containing the main widget area for pages under the Prepare section
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<div class="generic-sidebar">
			<h1>Prepare</h1>
			<ul>
				<li><a href="<?php echo db_get_base_url(); ?>/prepare/tickets/">Tickets</a></li>
				<li><a href="<?php echo db_get_base_url(); ?>/prepare/conditions-of-entry/">Conditions of Entry</a></li>
				<li><a href="<?php echo db_get_base_url(); ?>/prepare/survival-guide/">Survival Guide</a></li>
				<li><a href="<?php echo db_get_base_url(); ?>/prepare/what-to-bring/">What to Bring</a></li>
				<li><a href="<?php echo db_get_base_url(); ?>/prepare/consent/">Consent</a></li>
				<li><a href="<?php echo db_get_base_url(); ?>/prepare/getting-there/">Getting There</a></li>
			</ul>
		</div>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>