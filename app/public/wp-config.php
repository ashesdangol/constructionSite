<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BNE9Zdckkp5VEwgT49ZSceiY3xvmlWktUBilzttgMJ6EW8nclfjFR+W3ww19qcUwkKPQ9MmdlDBi+r5+l0Rv5A==');
define('SECURE_AUTH_KEY',  'pr0a6J6JPIxJKMDIGp7cmYJbcTxaZzEUlBWfqEh8oj8OwEBIOWEC26PLlabmFC6R3dYTuqGNHa/IWcacQvZLoA==');
define('LOGGED_IN_KEY',    'YV0cLvcu9Vr9UjtfIKdWz/FrWGIx1BHq/FAgDp/IRmuJcrEm4X7d36ovB7juESDFUMkksgHkVM38J03dcLJ0Tg==');
define('NONCE_KEY',        '251ejUYyBPPRc/V6Ie9sE0SoA5RGz3rhLWFGr+cnBAY5u+U7lGAmtOLZco4CjA6gF62KZ01Wt81b59Sxdoh76A==');
define('AUTH_SALT',        'VYxSDjcl4VfjORzgeJq/e+QEYoWuE7zPLmqtKyJpYflFmNPXqEAx9iwTPsC6TWsAMSW87ghJQ+fIOx1M2Gzwbg==');
define('SECURE_AUTH_SALT', 'GQ3sIVcOihIVPAyn4dx77zYJ9uv7TnMdE//JDkoQyhR7+sNHhuKKXpDB5VuTwGwsRFAMrHJu9+67gU2ZamCO8g==');
define('LOGGED_IN_SALT',   'A1T6rqpOIijkXCEq9lELN0uVZoUPU+QUrvKCsGRtGQC1yMKcuXpC7mHmqepQhna7LRdSPgYBKDBds6xImCqwpA==');
define('NONCE_SALT',       'R2tD8G3m+dExzsviboVLJ5eG7E/L0VlIbBlFQt887pb9qMaRVNgn7M3Dtx+or1bVI+bMH23B/3QASav70uFc6g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
