<?php

add_filter( 'stylesheet_uri', function() {
	return get_stylesheet_directory_uri() . '/index.css?v=0.1.2';
} );

add_filter( 'amp_post_template_metadata', function( $metadata ) {
	if ( ! is_singular() ) {
		return;
	}

	return $metadata;
} );

add_action( 'amp_post_template_head', function() {
	if ( ! has_site_icon() ) {
		return;
	}

	echo (
		sprintf( '<link rel="icon" href="%s" sizes="32x32">', esc_url( get_site_icon_url( 32 ) ) ) .
		sprintf( '<link rel="icon" href="%s" sizes="192x192">', esc_url( get_site_icon_url( 192 ) ) ) .
		sprintf( '<link rel="apple-touch-icon-precomposed" href="%s">', esc_url( get_site_icon_url( 180 ) ) ) .
		sprintf( '<meta name="msapplication-TileImage" content="%s">', esc_url( get_site_icon_url( 270 ) ) )
	);
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

remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
