<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<div class="footer-left-content">
				<h1>Learn More</h1>
				<ul>
					<li><a href="<?php echo db_get_base_url(); ?>/home/">Home</a></li>
					<li><a href="<?php echo db_get_base_url(); ?>/about/">About</a></li>
					<li><a href="<?php echo db_get_base_url(); ?>/the-burn/">The Burn</a></li>
					<li><a href="<?php echo db_get_base_url(); ?>/prepare/">Prepare</a></li>
					<li><a href="<?php echo db_get_base_url(); ?>/participate/">Participate</a></li>
					<li><a href="<?php echo db_get_base_url(); ?>/gallery/">Gallery</a></li>
					<li><a href="<?php echo db_get_base_url(); ?>/contact/">Contact</a></li>
				</ul>
			</div>
			
			<div class="footer-right-content">
				<h1>Participate!</h1>
				<ul>
					<li><a href="<?php echo db_get_base_url(); ?>/volunteer/">Volunteer for Dragon Burn</a></li>
					<li><a href="<?php echo db_get_base_url(); ?>/theme-camps/">Start a Theme Camp</a></li>
					<li><a href="<?php echo db_get_base_url(); ?>/participate/contribute/installation">Build an Installation at Dragon Burn</a></li>
					<li><a href="<?php echo db_get_base_url(); ?>/participate/contribute/workshop/">Host a Workshop at Dragon Burn</a></li>
					<li><a href="<?php echo db_get_base_url(); ?>/participate/contribute/perform/">Perform at Dragon Burn</a></li>
					<li><a href="<?php echo db_get_base_url(); ?>/participate/contribute/community-event/">Run an Event for the Community</a></li>
				</ul>
			</div>
			
			<div class="footer-bottom-content">
				<p>Website by Doc Bok and Koi</p>
				<p>Copyright Dragon Burn Organisation</p>
			</div>
			
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
