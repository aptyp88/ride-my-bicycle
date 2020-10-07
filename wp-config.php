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
define( 'DB_NAME', 'wp_ride_my_bicycle' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!,FJgsn*;JZ3J:[W6@L7T7/Jhq>70T+Sub<juQ>FKl>. mi3D sO=#a2:8%w{Lg(' );
define( 'SECURE_AUTH_KEY',  '^?NapG_|hF8+f@|jV}GC%`h[]x/&C3`Dl!k seT<krO7jVx;J&|M=uO};hX3 q&z' );
define( 'LOGGED_IN_KEY',    'N*LNP*#A.B098Q8y&uEJ4wCzs$r:3G6kb^mNp8miqHBlq#B 30vX$hBNUYR,GlQd' );
define( 'NONCE_KEY',        '`K Xt|mmjf x%EXGj;~0a}PU]|7 H6aT>KsYpkX9zo>tLdmVGNM6ugU`PqZrPWLe' );
define( 'AUTH_SALT',        '$V0sLKW!)6zZD|{&/6RtNp>]LF3(_/aCEYlE7d2D|S^<p8VbHv)1{*V+s@<z7>C!' );
define( 'SECURE_AUTH_SALT', 'vEjwMA~@#^Ai*wVs4]Tk53041yL#,CR~_fQFZTu[,T*k&|C%uPrO3sW1iA?C3vdn' );
define( 'LOGGED_IN_SALT',   'c>6BCiM/bL(04Yhs`Hq[3jW3q`/OL*wrA`vhAkn*uc;S%^L(|K:/TVYh.GMcQm5<' );
define( 'NONCE_SALT',       '#TxZzTq63UA 1:4r+0DV<TeNYb-O?7s|{[r>PJV.mIqlZpo%d[xgmm!>wqCjv83>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ridemybicycle_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
