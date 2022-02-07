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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'TufqXAIuSBs6eGP7PrL6GvrACmhA5Nkymd93rgMoUHJ/PRMMS6TtFPp1VvUUFjKLbiaElTRnav6550UfDBcNYQ==');
define('SECURE_AUTH_KEY',  'B89kfkrOBXFgFMfUCopqNj/Jtq17rgA3d6ekDbln1MFhlydNv85C89K7AdrtOcDbUrhFS09SQUTmr5OneSgvPA==');
define('LOGGED_IN_KEY',    'z5LCzMa5ocqt1vAkOT99g2iJtgtoZGj3H84vE55cRPRAX+5tuw1ZvEFMM+9+yggFHB8EvmRtWSt9bYmVfHqXLw==');
define('NONCE_KEY',        '2mR/pmCk0Z/I+2R2AhRUUhGZjG2artejFfsYed3xwlTyhyB4c+6PRaR9i0wxDLYHrEYsj4StrYFta9TZ1wYB+w==');
define('AUTH_SALT',        '45lj3dfBqgrY7wCL3MyZZthUqEFKoWXGSXfqbBsOurEksiLMeJ+PyEq/NeHFMYN10FL2iLCH0hyk0YPtD+R+Jw==');
define('SECURE_AUTH_SALT', 'Ezo/cT7Bbsexk8mn8vA+KdHR4Qps4L+r+P4jYAzk2SgFCXM24MVQp5hAcP0A/DF+j9O9TbHRpF77ckoyEWKfZg==');
define('LOGGED_IN_SALT',   '6xy2JNEXC+2tdNh+btPl8ECbBPWqMnDBxSB+casNhjnQ6P0bK+YDaBxppQyjRJ+qazQnEh1Cc/khSZqX5vbrxQ==');
define('NONCE_SALT',       'dwhIIpV0WY4RrnnI6mJ7m9W2GYW9GgRM8FXWo1NYf5U7j2q3645pj7S64gHf1C9k6LBsQ2aZ4T+CL8PqHgWdHA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';






define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'multisitedemo.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
