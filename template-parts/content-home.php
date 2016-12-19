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
					<li><a href="http://www.dragonburn.bokmcdok.com/en/the-burn/">The Event</a></li>
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
		
		<div class="home-content-right">
			<div class="home-content-right-description">
				<h1>Newsletter</h1>
				<p>Sign up for Dragon Burn's monthly newsletter!</p>
			</div>
			
			<!-- Begin MailChimp Signup Form -->
			<div id="mc_embed_signup">
			<form action="//dragonburn.us6.list-manage.com/subscribe/post?u=a9591edb36fd58206d592da28&amp;id=f58c37bac5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div id="mc_embed_signup_scroll">
				
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
			    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a9591edb36fd58206d592da28_f58c37bac5" tabindex="-1" value=""></div>
			    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			    </div>
			</form>
			</div>
			<!--End MailChimp Signup Form -->
			
		</div>
		
		<div class="home-content-bottom">
			<h1>Latest News</h1>
			<ul>
				<?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				<li>
					<a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
					<?php the_excerpt(__('(more…)')); ?>
				</li>
				<?php 
				endwhile;
				wp_reset_postdata();
				?>
			</ul>
			
			<div class="home-content-bottom-links">
				<ul>
					<li><a href="http://www.dragonburn.bokmcdok.com/en/the-burn/latest-news/">Read More News</a></li>
					<li><a href="http://www.dragonburn.bokmcdok.com/en/the-burn/contact/">Tell Us Your News</a></li>
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

</article><!-- #post-## -->