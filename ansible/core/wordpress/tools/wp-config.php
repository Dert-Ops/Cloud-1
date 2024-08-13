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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'dertops');

/** Database password */
define( 'DB_PASSWORD', '123');

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


define('AUTH_KEY',         'kl{V|Mh-oG0WN!INg;o|?Q/y+Y,)^gFe;UGc)J:Em>JXBTAJ$y`3,_&u{ipLHNd:');
define('SECURE_AUTH_KEY',  'iZvmM)L|3J~Wo1~HuF<ZQo5+mLJ8+nD7N]=!<F6qhc#A.<8F=^)mt-+u=5QW-Fyf');
define('LOGGED_IN_KEY',    'GpW6!|gS/>aY`U[7xNy@+KMVR?QnNl2=WQgs!F|B1up&$M%Al@M_Q+Bv.@.?+H=#');
define('NONCE_KEY',        '-Iuq;2!U[`Q~ZDYz<{`LK <UgZxUtNeRd-P9mY[w~Q-b{}2<)2S4-^d([nh)-S^V');
define('AUTH_SALT',        '^LlE$n d2Q_-d*[vjn]Gqz/#@]lwE!bs*5B,7DYgRK<F{%*Ojob|c_X|&[/|+H`E');
define('SECURE_AUTH_SALT', '>|d183iBC=qgpN8v^D!VksNv.U^T0hWDF5Tms+@lh9;pzP(*x0tKi{=V2N,#U_<T');
define('LOGGED_IN_SALT',   'J58A9;w|4|2nM*K}Iuajp<h@okm|+,*O7WX8O|c:pG;G_Nd9S(c.c:5+4,uq!s]J');
define('NONCE_SALT',       '};.NRN3,Ch=>CBtA7~X.+4B^@(_bf3/9J,7}a_d>QI#/wJc4d+>{Kig9l4VU7I]4');

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
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
