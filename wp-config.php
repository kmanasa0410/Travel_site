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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Travelsite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'N^ugUZkiAtz@TJ~N$K<meWmPAeCHl;SIK_rPx%{m;4iDMI3b2x^@qiBh1<P1vVtj' );
define( 'SECURE_AUTH_KEY',  'RbmbW4xgr2?>Yu<+WXB0qE*OM4!YSJM0Ef]#-z`m@4#HL-(1>.iq6DX)Tq*Y^LhL' );
define( 'LOGGED_IN_KEY',    'sDxh)of9S`H}ZH%P+!Ld):9;0FM`MP8LvHO~3T:5wFN-NySf-R`(Er0|Vycu&w[E' );
define( 'NONCE_KEY',        '@HfP|-BkowJ)*Q1Vexc,0)e3K8Onaj?xi|VDWe0Ab9-2++. Vr|WIdHon,&LA=Ed' );
define( 'AUTH_SALT',        'rxWPQ{tU:T?XeGEsyBu_zD~gU$DJT?2T[G-{5H7Nx_crJ|=9XUdTZ[+([b@JDP5-' );
define( 'SECURE_AUTH_SALT', 'F+SnBIb#K%U2f]=N:r,k)qZn_;z({E: JlE3138*^^R29!9YNk44)g{_J>4bm=tv' );
define( 'LOGGED_IN_SALT',   'Xu@l^|-XJWdULr:Ar7(OIZU-s<E:b!vr85[~JtK3wj8.?2ab1k0o|^g:%v}9h]qS' );
define( 'NONCE_SALT',       '8Gl2pwbiR`iz6J6I<cv}LI+u%o-0Hv@/HAN,`I@PtH+n%+mGHpoi>I+R`{Yy$O#b' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
