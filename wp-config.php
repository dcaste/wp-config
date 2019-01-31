<?php

/**
 * Security options.
 *
 */

// Disables de file editor provided in the administration panel.
define( 'DISALLOW_FILE_EDIT', true );

// Force SSL connection so that both passwords and cookies are served via SSL.
define( 'FORCE_SSL_ADMIN', true );

// Prevents installing or updating themes, plugins and WP versions via admin panel.
define( 'DISALLOW_FILE_MODS', true );

// Block external requests and admit a list of hosts.
define( 'WP_HTTP_BLOCK_EXTERNAL', true );
define( 'WP_ACCESSIBLE_HOSTS', 'api.wordpress.org,*.github.com' );

// Override file permissions.
define( 'FS_CHMOD_DIR', ( 0755 & ~ umask() ) );
define( 'FS_CHMOD_FILE', ( 0644 & ~ umask() ) );

/**
 * Debugging options.
 *
 */

// Hide the debug notices in frontend but save them in a log file in wp-content. Useful in production sites.
// Advice: deny access to this debug.log file via .htaccess and set permissions to 600.
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

/**
 * Performance options.
 *
 */

// Modify autosave interval in seconds. This needs to be inserted above the ‘ABSPATH’ otherwise it won’t work.
define( 'AUTOSAVE_INTERVAL', 160 );

// Specify the amount of post revisions to be saved. This needs to be inserted above the ‘ABSPATH’ otherwise it won’t work.
define( 'WP_POST_REVISIONS', 3 );

// Disable post revisions completely. This needs to be inserted above the ‘ABSPATH’ otherwise it won’t work.
define( 'WP_POST_REVISIONS', false );

// Change the amount of days you want to keep the thrash before delete it comopletely.
define( 'EMPTY_TRASH_DAYS', 10 );

// Disable trash. Posts will be deleted permanently.
define('EMPTY_TRASH_DAYS', 0 );

// Adjust the amount of memory allocated for Wodpress. Use it if you don't have access to php.ini.
define( 'WP_MEMORY_LIMIT', '128M' );

// Adjust the maximum amount of memory allowed for Wodpress. Use it if you don't have access to php.ini.
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

// Enables cache or disable it if is false.
define( 'WP_CACHE', true );

/**
* Repair your database automatically. 
* After adding this, you need to visit the following URL to optimize and repair WordPress database.
* http://example.com/wp-admin/maint/repair.php 
*/
define('WP_ALLOW_REPAIR', true);

// Sets cookie domain. This will reduce unnecessary bytes required for the end user to download.
define( 'COOKIE_DOMAIN', 'www.example.com' );

// Disables CRON.
define( 'DISABLE_WP_CRON', true );

// Sets a CRON timeout. Make sure a cron process cannot run more than once every WP_CRON_LOCK_TIMEOUT seconds.
define( 'WP_CRON_LOCK_TIMEOUT', 60 );

/**
 * Other options.
 *
 */

// Overrides the WP home and Site URL. This options does not change its values in the database.
define('WP_HOME', 'http://www.example.com');
define('WP_SITEURL', 'http://www.example.com');

// Only one set of image edits are ever created. When you restore the original the edits are removed from the server.
define( 'IMAGE_EDIT_OVERWRITE', true );

// Changes the wp-content path. No trailing slash should be used.
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/blog' ); // Local path relative to this file.
define( 'WP_CONTENT_URL', 'http://example.com/blog' ); // Absolute path.

// Changes the plugins path. No trailing slash should be used.
define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/blog/plugins' ); // Local path relative to this file.
define( 'WP_PLUGIN_URL', 'http://example.com/blog/plugins' ); // Absolute path.

// If you have compability issues with plugins Set PLUGINDIR to the full local path of this directory (no trailing slash).
define( 'PLUGINDIR', dirname(__FILE__) . '/blog/plugins' );

// Changes theme path. This is a local path relative to this file.
register_theme_directory( dirname( __FILE__ ) . '/my-themes' );

// Changes the uploads directory. This is a local path relative to this file.
define( 'UPLOADS', 'media' );

// Changes the Must Use plugins path.
define( 'WPMU_PLUGIN_DIR', dirname(__FILE__) . '/blog/builtin' );
define( 'WPMU_PLUGIN_URL', 'http://example.com/blog/builtin' );

// Define the default fallback theme.
define('WP_DEFAULT_THEME', 'twentyeleven');

// Redirect Nonexistent Blogs. E.g., http://nonexistent.example.com or http://example.com/nonexistent/.
define( 'NOBLOGREDIRECT', 'http://example.com' );

// Disable all core updates.
 define( 'WP_AUTO_UPDATE_CORE', false );

 // Enable all core updates, including minor and major:
 define( 'WP_AUTO_UPDATE_CORE', true );

 // Enable core updates for minor releases (default):
 define( 'WP_AUTO_UPDATE_CORE', 'minor' );
