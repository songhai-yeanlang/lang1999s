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
define( 'DB_NAME', 'su20_final' );

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
define( 'AUTH_KEY',         'bW+ztVC7~3q2{>o IFFvb.kT^Ms[]%n*FnlfL*/$F8C52+HB}# QcgUk8[0]:7B2' );
define( 'SECURE_AUTH_KEY',  'q_w_mdrE[w!hT?=Je#T3Vf}rEQP+)#MpfMeN^q<=U(Le&i0|-PFuf0sLu`v1=fhQ' );
define( 'LOGGED_IN_KEY',    'Z8(:a34s^eS6E=6{-OZRP/Ii|<fBwGQukvBP1`0R)%!65%}_lL:r0Bkr!eV+GAnJ' );
define( 'NONCE_KEY',        '*iON{;]sf5kdM[aEQ`s{MruA[~1=m=8U^/~@&=sc +-@/O$HT6^!XS@p90~T{_EB' );
define( 'AUTH_SALT',        'U7_c&czKP2XVd*D=e@Iw^6<gT<,^_JNaCjQasCkmbe:@cSQZ?91,iLu6dtRx,jtj' );
define( 'SECURE_AUTH_SALT', '>V&!n!dQ2Yqw_~.@Y]7fj$>Qhotm6{;<E55_/0w@l_sx1tUp),1a?N/AYA#%gfP*' );
define( 'LOGGED_IN_SALT',   'S>:]}uWF9yT)(P$=7YMIy.zP`FKe41?3W{l)_RTF*%Q[uxxqpf`5L/wb>^~G/.Sv' );
define( 'NONCE_SALT',       '@&s5*mGP!T+d;rc-O92Bn5N0jct@?_JtPuGw=1ZYvQGq?@N%#@5&dCaeieGKx%= ' );

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
