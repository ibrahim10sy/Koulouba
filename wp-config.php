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
define( 'DB_NAME', 'sitekoulouba' );

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
define( 'AUTH_KEY',         '{$:4$7ZO89hwhp~_a7~}R$#Dq-}WZx)P:9xM8j>m6_~/,je$t%{neA*Y!,8zYu{P' );
define( 'SECURE_AUTH_KEY',  '&|VY2q}f86kxsyvA2xbLv@v3j41jR(AswZDT#gm3wqu}9mXi%Ztjj9r?`#r. p9K' );
define( 'LOGGED_IN_KEY',    '0$@{m4D,mH=r.$Il7D^YD38N{EJv1tGKf.kP3^V#rTl,0d~A~CO}=1|7bP_Riy86' );
define( 'NONCE_KEY',        '  XcDEAxA-%]`RKGX7K,}c2lqd>nX.%?KYZK^K; ,I4Y%zvf{iTr;:LOR;4&3J9+' );
define( 'AUTH_SALT',        '7A-wtx ^Zyj:UL7QN{Obz!b$@?CobNb~C@1ySe=n.MSR+^3T(z#2=DwdBTq T>RH' );
define( 'SECURE_AUTH_SALT', 'rngwS8>Y7FOgHX/]@?GM;f=bx+)#-)KcH{kWT|ZrhJQIk.y<.^cQ#_cEG{$CO[rq' );
define( 'LOGGED_IN_SALT',   'oUsPmwT4|I81?8c]zig.]A CM#XYZbSdF$g?-&=O.1>mN@ODUp|n(s~=)p( d3;g' );
define( 'NONCE_SALT',       'oyze~%xew-2-i!N[RT}>{Z4H*+?uon_M|~Rt&0wlAAk(j1t4V<g?Dzz:Z`H*:>Dm' );

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
