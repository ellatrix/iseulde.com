<?php

add_filter( 'template_directory', function() {
	return ROOT_PATH . '/t';
} );

add_filter( 'stylesheet_directory', function() {
	return ROOT_PATH . '/t';
} );

add_filter( 'template_directory_uri', function() {
	return WP_HOME . '/t';
} );

add_filter( 'stylesheet_directory_uri', function() {
	return WP_HOME . '/t';
} );
