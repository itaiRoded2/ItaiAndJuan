<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '9L!Fe,Z*Fpi*q6%JSx:QuE0vR/+_8J6G,Xc{v0|k1noH-v9.ef6~NO;]G;4-2z5:' );
define( 'SECURE_AUTH_KEY',  'EY/e~LI+`x?-;4NcYbdf[(htloBBNAc/)YqD%sn#}b.nBI`By$@<p|m:[(qDB-+1' );
define( 'LOGGED_IN_KEY',    'u9yR{`e>NfxLg ?Qb[(ad}KUv8OFq!8EEM7Qj# v1xHxGavxa817%P3S#Vzq(R0k' );
define( 'NONCE_KEY',        'xJY~|psrEd3)nV`z!_jsK2bB`PK9lg1kYcJ29C@^rm%lHL(]@{V)`.m~3x>e0WuW' );
define( 'AUTH_SALT',        '|h<pyYt6&C|~1|T$bAlQ&Rg*M_81_H:u#CX+QJv;fdsb-_OmOg7MtdXWI!b=|g8.' );
define( 'SECURE_AUTH_SALT', '*w0{ZeBJSgt*>T[4{{h;BQ`=2+AANNd;/E>Q2mcFTbp;;FZI@beZNW/;1(N4f|xe' );
define( 'LOGGED_IN_SALT',   'uTn0)^Du3m>y*i`aou~bYZ$XM^n?|l&(d<_]X.tbBIAm@h8fYD>YTCU[:F0I*r+6' );
define( 'NONCE_SALT',       'F#K|OKQTZryZ`/Yku*)[<fVT|=Z%|LL3Z0dg^VWnK<E&?5A/U2F=Ks)0Cn{[N-iF' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
// define('WP_ALLOW_REPAIR', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
