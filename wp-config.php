<?php

/**
 * Security options.
 *
 */

// Disables de file editor porvided in the administration panel.
define( 'DISALLOW_FILE_EDIT', true );

// Force SSL conection in admin panel.
define( 'FORCE_SSL_ADMIN', true );

// Block external requests and admit a list of hosts.
define( 'WP_HTTP_BLOCK_EXTERNAL', true );
define( 'WP_ACCESSIBLE_HOSTS', 'example.com,*.anotherexample.com' );

// Override file permissions.
define('FS_CHMOD_FILE', 0644);
define('FS_CHMOD_DIR', 0755);

/**
 * Debugging options.
 *
 */

// Hide the debug notices in frontend but save them in a log file in wp-content. Useful in production sites.
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Diaplay the amount of database queries in the admin panel.
if ( current_user_can( 'administrator' ) ) {
  global $wpdb;
  echo '<pre>';
  print_r( $wpdb->queries );
  echo '</pre>';
} )

/**
 * Performance options.
 *
 */

// Sets the autosave interval time in seconds.
define( 'AUTOSAVE_INTERVAL', 160 );

// Sets the amount of post revisions to be saved.
define( 'WP_POST_REVISIONS', 10 );

// Disable post revisions completely.
define( 'WP_POST_REVISIONS', false );

// Change the amount of days you want to keep the thrash before delete it comopletely.
define( 'EMPTY_TRASH_DAYS', 10 );

// Disable trash. Posts will be deleted permanently.
define('EMPTY_TRASH_DAYS', 0 );

// Adjust the amount of memory allocated for Wodpress. Use it if you don't have access to php.ini.
define( 'WP_MEMORY_LIMIT', '128M' );

// Adjust the maximum amount of memory allowed for Wodpress. Use it if you don't have access to php.ini.
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

// Repair your database automatically. 
// After adding this, you need to visit the following URL to optimize and repair WordPress database.
// http://example.com/wp-admin/maint/repair.php 
define('WP_ALLOW_REPAIR', true);

/**
 * Other options.
 *
 */

// Set the WP home and Site URL.
define('WP_HOME', 'http://www.example.com');
define('WP_SITEURL', 'http://www.example.com');
