<?php

add_filter( 'stylesheet_uri', function() {
	return get_stylesheet_directory_uri() . '/index.css?v=0.1.2';
} );

add_action( 'wp_head', function() {
	echo '<link rel="stylesheet" href="' . esc_url( get_stylesheet_uri() ) . '">';
} );

add_action( 'after_setup_theme', function() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'gallery', 'caption' ) );

	add_editor_style( get_stylesheet_uri() );
} );

add_action( 'parse_query', function( $query ) {
	if ( $query->is_archive() || $query->is_attachment() ) {
		$query->set_404();
	} else if ( $query->is_search() ) {
		wp_redirect( 'https://google.com/search?q=' . $_GET['s'] . '+site:iseulde.com' );
		die;
	}
} );
