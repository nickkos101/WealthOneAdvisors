<?php
function wealthone_scripts() {
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'function', get_template_directory_uri() . '/function.js', array('jquery', 'jquery-ui-tabs', 'slick'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'wealthone_scripts' );


function wealthone_title( $title )
{
	if( empty( $title ) && ( is_home() || is_front_page() ) ) {
		return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
	}
	return $title;
}

add_filter( 'wp_title', 'wealthone_title' );

?>