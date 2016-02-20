<?php

define( 'ROOT_PATH', __DIR__ );

require_once ROOT_PATH . '/../credentials.php';

if ( ! defined( 'WP_SITEURL' ) ) {
	define( 'WP_SITEURL', 'https://iseulde.com/w' );
	define( 'WP_HOME', 'https://iseulde.com' );
}

define( 'WP_CONTENT_DIR', ROOT_PATH );
define( 'WP_CONTENT_URL', WP_HOME );

define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define( 'DISALLOW_FILE_EDIT', true );

define( 'DISABLE_WP_CRON', true );

define( 'CONCATENATE_SCRIPTS', false );

$table_prefix = DB_TABLE_PREFIX;

require_once ABSPATH . 'wp-settings.php';
