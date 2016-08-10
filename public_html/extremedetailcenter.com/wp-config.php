<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
 //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home4/valhalla/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'valhalla_detail');

/** MySQL database username */
define('DB_USER', 'valhalla_detail');

/** MySQL database password */
define('DB_PASSWORD', 'B7B?rz0c@RMK');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

//define('FORCE_SSL_ADMIN', true);

$_SERVER['HTTPS'] = 'on';

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Nz-D<9_`J]jQ XNt2zZM&#;d]yk)[+4=L@kv:G3f&:2]D+l8bf#4m>^PLIZkbyw~');
define('SECURE_AUTH_KEY',  '^l;:PAD(R_8u-=mAf`$i|:pIz`$-4nq:9Gz!}wB.4PVpl8moe9|y#w#&J~}zMC^%');
define('LOGGED_IN_KEY',    'hJk35A%vSE?l5olK*jpgh#Gh.nVO|?e]D}w~Ae3K}C#fxD0lnnfw>/IO=MMM]mhS');
define('NONCE_KEY',        'XJaG0T!]@WS)n*vn?4jy0Hx2~h)F5};+FuK|X*-M[1?&0]E<N@Ri@[u%G>y6_ii@');
define('AUTH_SALT',        'O2+,>6e>d~hE +C%!Ph2NzJvp+u#&+C$Up_(-U*o-f*ratpyUr+z^sSaV_1bWq|7');
define('SECURE_AUTH_SALT', '3Ap||WT+ %W>/RCX(8u{6|kZZuGH5,d9v86&+:OR].-l-t16r(saw48Ex#IFV2.;');
define('LOGGED_IN_SALT',   'Q_X!em>Ex4/v1T?Q(}?3P`3^6J+*7U])|O|aB1bO`RTc2Kno8[3PvE]/r!5C1?kP');
define('NONCE_SALT',       'YW$zCEUaU$f|4|{hCu]Ff#l*+I HwRS5@dxhg|`$YA b?8(J<dq%Z3,>a=)l3LMB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'valh_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
