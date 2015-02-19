<?php
//Set Themnail size to 672 width and 9999 height
add_image_size( 'autothumb', 672, 9999, false );


// Load jQuery
//----------------------------------------------------------------------------------
function load_custom_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/js/custom.js' );
	wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/css/animate.css' );
	wp_enqueue_script( 'wow', get_stylesheet_directory_uri() . '/js/wow.min.js' );
}

add_action( 'wp_enqueue_scripts', 'load_custom_scripts' );


// Excerpt length
//----------------------------------------------------------------------------------
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// Excerpt read more link
//----------------------------------------------------------------------------------
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('...Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

?>