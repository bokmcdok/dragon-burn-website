<?php
/**
 * The template for the sidebar containing the main widget area for pages under the about section
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<div class="generic-sidebar">
			<h1>About</h1>
			<ul>
				<li><a href="<?php echo db_get_base_url(); ?>/about/history-burning-man/">History of Burning Man</a></li>
				<li><a href="<?php echo db_get_base_url(); ?>/about/history-dragon-burn/">History of Dragon Burn</a></li>
				<li><a href="<?php echo db_get_base_url(); ?>/about/dragon-burn-works/">How Dragon Burn Works</a>
				<ul>
					<li><a href="<?php echo db_get_base_url(); ?>/about/dragon-burn-works/mission-statement/">Mission Statement</a></li>
					<li><a href="<?php echo db_get_base_url(); ?>/about/dragon-burn-works/guiding-principles/">Guiding Principles</a></li>
					<li><a href="<?php echo db_get_base_url(); ?>/about/dragon-burn-works/gifting-economy/">Gifting Economy</a></li>
				</ul>
			</li>
				<li><a href="<?php echo db_get_base_url(); ?>/about/afterburn-reports/">Afterburn Reports</a>
				<ul>
					<li><a href="<?php echo db_get_base_url(); ?>/about/afterburn-reports/transparency/">Transparency</a></li>
					<li><a href="<?php echo db_get_base_url(); ?>/about/afterburn-reports/financial-statements/">Financial Statements</a></li>
				</ul>
			</li>
				<li><a href="<?php echo db_get_base_url(); ?>/about/frequently-asked-questions/">Frequently Asked Questions</a></li>
			</ul>
		</div>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>