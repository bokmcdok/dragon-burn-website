<?php

/*
 * Inherit from the Twenty Sixteen theme.
 */	

function dragon_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentysixteen-style' for the Twenty Sixteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'dragon_enqueue_styles' );

/*
 * Add a widget area to the header
 */

function dragon_widgets_init() {
		register_sidebar( array(
		'name'          => 'Top Bar',
		'id'            => 'site-outer'
	) );
}
add_action( 'widgets_init', 'dragon_widgets_init');

/*
 * Remove references to Google fonts from the theme (we are based in China).
 */

function dragon_dequeue_google_fonts() {
    wp_dequeue_style( 'twentysixteen-fonts' );
}
add_action( 'wp_enqueue_scripts', 'dragon_dequeue_google_fonts', 20 );

//  Improve the article excerpts.
function improved_trim_excerpt($text) {
        global $post;
        if ( '' == $text ) {
				//  Get default content.
                $text = get_the_content('');
                $text = apply_filters('the_content', $text);
                $text = str_replace('\]\]\>', ']]&gt;', $text);

				//  Filter out any scripts.
                $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);

				//  Strip out HTML but keep subheadings and paragraphs.
                $text = strip_tags($text, '<p><h2>');

				//  Increase the length to 15 words.
                $excerpt_length = 25;
                $words = explode(' ', $text, $excerpt_length + 1);
                if (count($words)> $excerpt_length) {
                        array_pop($words);
                        $text = implode(' ', $words);
                }

		//  Cut off after the last complete sentence.
		$sentences = explode('.', $text);		
		if (sizeof($sentences) > 1)
		{
			array_pop($sentences);
			$text = implode('.', $sentences);
		}
		else
		{
			$text .= "...";
		}

		//  Add a 'Read More...' link.
		$text = $text.'.</p><p><a href="'.get_permalink().'">Read More...</a></p>';

		//  Include the thumbnail if there is one.
		if ( has_post_thumbnail() )
		{
			$text = the_post_thumbnail().$text;
		}
        }

        return $text;
}

//  Replace default excerpt filter with our custom filter.
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt');
?>