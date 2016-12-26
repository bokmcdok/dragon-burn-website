<?php
/**
 * The template for the sidebar containing the main widget area for pages under the Prepare section
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<div class="generic-sidebar">
			<h1>Participate</h1>
			<ul>
				<li><a href="<?php echo db_get_base_url(); ?>/participate/volunteer/">Volunteer</a></li>
				<li><a href="<?php echo db_get_base_url(); ?>/participate/theme-camps/">Theme Camps</a></li>
				<li><a href="<?php echo db_get_base_url(); ?>/participate/contribute/">Contribute</a>
					<ul>
						<li><a href="<?php echo db_get_base_url(); ?>/participate/contribute/installation/">Apply to Build an Installation</a></li>
						<li><a href="<?php echo db_get_base_url(); ?>/participate/contribute/workshop/">Apply to Host a Workshop</a></li>
						<li><a href="<?php echo db_get_base_url(); ?>/participate/contribute/perform/">Apply to Perform at Dragon Burn</a></li>
						<li><a href="<?php echo db_get_base_url(); ?>/participate/contribute/art-grant/">Apply for an Art Grant</a></li>
					</ul>
				</li>
				<li><a href="<?php echo db_get_base_url(); ?>/participate/events/">Events Guide</a>
					<ul>
						<li><a href="<?php echo db_get_base_url(); ?>/participate/events/past-events">Past Events</a></li>
						<li><a href="<?php echo db_get_base_url(); ?>/participate/events/events-calendar">Events Calendar</a></li>
						<li><a href="<?php echo db_get_base_url(); ?>/participate/events/community-event">Apply to Host a Community Event</a></li>
					</ul>
				</li>
				<li><a href="<?php echo db_get_base_url(); ?>/participate/fundraising-guide/">Fundraising Guide</a></li>
				<li><a href="<?php echo db_get_base_url(); ?>/participate/community-links/">Community Links</a></li>
			</ul>
		</div>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>