<?php
function wealthone_scripts() {
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'function', get_template_directory_uri() . '/function.js', array('jquery', 'jquery-ui-tabs', 'slick'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'wealthone_scripts' );


function wealthone_title( $title )
{
	if( empty( $title ) && ( is_home() || is_front_page() ) ) {
		return __( 'Home', 'theme_domain' ) . ' | ' .get_bloginfo( 'sitetitle' ). ' | '. get_bloginfo( 'description' );
	}
	return $title;
}

add_filter( 'wp_title', 'wealthone_title' );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
//Menu Registration
register_nav_menus( array(
'Header_Nav' => 'Header Navigation Area',
) );


function wealthone_create_post_type() {
	register_post_type('resources', array(
		'labels' => array(
			'name' => __('Resources'),
			'singular_name' => __('Resource')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'resources'),
		'supports' => array('title','editor','thumbnail')
		)
	);
}
add_action('init', 'wealthone_create_post_type');

function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>