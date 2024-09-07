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
define( 'DB_NAME', 'game guide' );

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
define( 'AUTH_KEY',         'km$b0`XYi `EV$]v1C6Z?a.V}[_R3X>qc0.M?-T@m~_cGUB!4hM70U&c|I(Ze|6|' );
define( 'SECURE_AUTH_KEY',  'Rge7Opm1H1}(+F0!p&>6<RIDEiN=<9gmi+5Y~D7]GkxTJpA*|<uH1<+Pl<iQ:1C<' );
define( 'LOGGED_IN_KEY',    '9NrKQorZ11mpQ{:ACl9~WK_m@S .ckBOh5FA}m(udnMo Y[pWb>R[k*g+lz#6:ut' );
define( 'NONCE_KEY',        '+-=]M]3RN}>Mc>>aRyc1JIM#W|==Vv]6oE,!PF;1,DITRx/.Bqzz uLIz(ZleOI?' );
define( 'AUTH_SALT',        'x[-4:<uq$A[Abv-aOTePI+J=5t6hP=P+;Vx1AxYCgb(+FF)zVb7Ya1dE<|o*>;Ri' );
define( 'SECURE_AUTH_SALT', 'k[q{GSS`j=#6jBy(!+1^A(n+k;GT?@p5(+>4U6!q$v{nSM:;QoH(TLl8JZIZd.?H' );
define( 'LOGGED_IN_SALT',   'WF[c[Y7|e5e;H-&#A!yR}2iRo68Am{C2?5DEpjc*nv+ElbQt#ooQvE+5zGTtBPRC' );
define( 'NONCE_SALT',       'kMlik,nh;4Dr;1QaDi0,.h%>s#svG?5h}PjH.<!L)&M>9]K.3PCW)i}bDD=%U`&*' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
