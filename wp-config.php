<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jp-2023-wp-db' );
// define( 'DB_NAME', 'u167030765_jp2023wpdb' );

/** Database username */
define( 'DB_USER', 'root' );
// define( 'DB_USER', 'u167030765_jp2023main' );

/** Database password */
define( 'DB_PASSWORD', '' );
// define( 'DB_PASSWORD', 'L!ucUVvld*YpGZ8xrs' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );
// define( 'DB_HOST', 'https://www.byclovis.com/' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'n~;oDx+I]gu|U7!P7tu<B)/WX#DWV(CWKgCkz r%OuY}hSj7C=LA6[i#eDWK5^</' );
define( 'SECURE_AUTH_KEY',  '39kmbDH[ wGJdRfd,$N!}6Ipm /M`dxlj(}[y)dG{i%]rfnQ5Zh#q(kkO0f_6CqA' );
define( 'LOGGED_IN_KEY',    'IB~.,q*T7sPmf%2|&o;.% %bwuKYM^Y$5AT]i-_3^By3HK[v&Q>Xt!X{;+ko9W~J' );
define( 'NONCE_KEY',        '.@EIP]^o{QYsI&swt1!}!RFiJ2xx$[.$F(;~:8a!^<<RYv&ggdUa${}<V[*YTmY!' );
define( 'AUTH_SALT',        '=|n6:!BLX^`O`.D8vP5J[=HVU^9cr( 34XI!O| NWf!|Xz<qK1H5Ze%1je%I!LLP' );
define( 'SECURE_AUTH_SALT', 'd4j$]66I8*K<dX%V4Z$wTnM8Z6nCx*;O~jynDHOvz(#(~vvO JOEgL@)d,pj7:F-' );
define( 'LOGGED_IN_SALT',   '.lJC8*x)~_N(O$bTfV|-K^dVt`C}>/+x70bYcdwat;[L*J*mv%xrEw9uEm+YL:)7' );
define( 'NONCE_SALT',       'jcc0b3>3]h)Cko2$AFhI:kmo4Ttwp,Vh1bcQFqJbXYD2P[9Sj w}U9q]kv7<$c/X' );

@ini_set( 'upload_max_size' , '400M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
