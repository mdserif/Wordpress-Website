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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'u:-]Os<JB5fz.VSwZOy@G:%Sp{:J<<.=$>Vx$#ma*Rkkj}uT}:S( |+8J-gHUD)O' );
define( 'SECURE_AUTH_KEY',  'mx+eK&B#(n/^i_{FyB{lXl6},+zO!6IAjSh8W]vgYwMY6VHmsH@Llzs1NBOPNCzQ' );
define( 'LOGGED_IN_KEY',    '<i&.PLlc~@e|V;**(?kY[U)p{(x(^WMBdG[2^=39W~VoSV(RMf$Ls,u<!4PfpAc#' );
define( 'NONCE_KEY',        'aJ.%IChfh0R!Qlz=3>fi@R3U;f1m[U>nT]$B<cCppxo_X;=FpAbF)3mr]h3{2Xh4' );
define( 'AUTH_SALT',        'f`u)0&r!1%98bcH^Fi<{kT_LPU@]4%f_=T<J01Yj3mOmYCD|*#=uYUyLo{F krtH' );
define( 'SECURE_AUTH_SALT', 'tB4k[l/QIn)v3Y[`d2U,7kjYJmsG^WI&>8w_xyZeLM$mIvY+$1AGSkT?@CMoB7Mc' );
define( 'LOGGED_IN_SALT',   '|s#QY%`ETuh%TRl0~yvlb|?x$DTVR05) 8YT&0GUvR7;610@yc?G=tZHWP95TL@@' );
define( 'NONCE_SALT',       '[XX8wAV+Qe*z<xx`G}7Z#iavZQEE<#A|84KI(S`M<]xD%G1xX=R]VtO(]I=|ocXy' );

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
