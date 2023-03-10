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
define( 'DB_NAME', 'coolmat' );

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
define( 'AUTH_KEY',         'a8%Kn=h$qXK:{Xah_4*vD9#d6yHFq-=ZY5oSL)?NBY;Z.c714r|-+kK!M2JA%7e7' );
define( 'SECURE_AUTH_KEY',  'DGy0`Yg>o!*LCr Gy]l/gc(u5jJ%?hss/zs0r$*r@W9)%F)382wI4!uz5$Z`RIT~' );
define( 'LOGGED_IN_KEY',    'uM9E1GeICQTScBCkv}~%%n;_ecQ(80C-p;pD6=]+$DP,d2Pf0u?YD6X:>p:7z:2_' );
define( 'NONCE_KEY',        '(/swy@U_B0]~u~nQ%|M$gOpH]2T%&A`<eHUK D1*LTv[q]cs.<oXVPE7T&b0cPz=' );
define( 'AUTH_SALT',        'xIyYds|.f+|3= .l#)5RyK%1r>bgE {IrhWfOi]y:1db&;@4#]0_go` }%-A=Hav' );
define( 'SECURE_AUTH_SALT', '%UassCWJ|_>{bbVVc|=s2:#EA4(e$P<dg4LmSbXzv7oO~6T:fU-BrK,c0;Bdi<|`' );
define( 'LOGGED_IN_SALT',   '5kVg~M-km`YX0zIoNRZD.;.OIl0 ifB1u.?Xr#LX8*|s6<}.*pB;1.3=<&{k!EFF' );
define( 'NONCE_SALT',       'PZ7;JngUKxD+nJ8$JRULOPv:QJKGDq1p}UT;Jk|S68K/s,x vg2Z=.s|vUqsCE[h' );

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
