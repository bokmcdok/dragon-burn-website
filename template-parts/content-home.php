<?php
/**
 * The template used for displaying the home page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<div class="home-content-top">
			<div class="home-content-top-image">
				<img src="/wp-content/themes/twentysixteen-child/images/burning-dragon-200x133.jpg">
			</div>
			<div class="home-content-top-description">
				<h1>What is Dragon Burn?</h1>
				<p>Dragon Burn is a Shanghai-based community of artists, musicians
				and performers who gather once a year to create a temporary village
				of free expression!</p>
			</div>
			<div class="home-content-top-links">
				<ul>
					<li>Learn More:</li>
					<li><a href="http://www.dragonburn.bokmcdok.com/en/the-event/">The Event</a></li>
					<li><a href="http://www.dragonburn.bokmcdok.com/en/prepare/tickets/">Get Tickets</a></li>
					<li><a href="http://www.dragonburn.bokmcdok.com/en/participate/">Participate</a></li>					
				</ul>
			</div>
		</div>
		
		<div class="home-content-left">
			<div class="home-content-left-description">
				<h1>Volunteer for Dragon Burn</h1>
				<p>Dragon Burn is a created and run by participants just like
				you. Dragon Burn won't happen without your participation!</p>
			</div>
			<div class="home-content-left-links">
				<ul>
					<li>Become a participant:</li>
					<li><a href="http://www.dragonburn.bokmcdok.com/en/participate/volunteer-dragon-burn/">Volunteer Now!</a></li>				
				</ul>
			</div>
		</div>
		<?php
		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
	?>

</article><!-- #post-## -->