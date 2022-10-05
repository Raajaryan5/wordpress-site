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
define( 'AUTH_KEY',         ']F%R$Zcv_m4|_ge2^V6;,4>>c:l{@E}NpK71J@>yd=Yh7$>v)9*JkfLjmi790s%M' );
define( 'SECURE_AUTH_KEY',  'VpRz^HBLpBt<O!/M3 h x,ddeD%JpR9Eu23(#3Pon>K@%E;YYd2P:rm&8H{7ufH_' );
define( 'LOGGED_IN_KEY',    'JGF27!=(KS=%Z0N9cp6M:G/{9e8(&mC$emr&FN+kC0[z qghI[^2}<<OJQF/CRj|' );
define( 'NONCE_KEY',        '{g7]->k KD&O&g3#~]w4j.cuJ?IoeeBMN4[M+R!W%/~]KF~k{pm$/7g)@N.HOa)b' );
define( 'AUTH_SALT',        '6_<fO1!^ww-WV^sx[=4./qQCu{[w1Hx$rDxQAAQjJc/1HNf5xQ4h^Bp,xv/+v<4]' );
define( 'SECURE_AUTH_SALT', 'g>DqkX}o|W. A*.r.0Of+%Mz5{6M<!KGI34em66&OpPWX%1+i^X8J#ssIGz@,/sm' );
define( 'LOGGED_IN_SALT',   'e8y~xFL-nzLR#%mE9}4`^[:d+ui0zq0p/JAT+18U#zD#`K89~!oLubGBKdskS.oe' );
define( 'NONCE_SALT',       'F`;tjBsHW!P1q#AQxzD=<OzlcNxhp.BBR&-n;zSwt<Dn@C[NdMYw{?30unvUPKBL' );

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
define ('WP_ALLOW_REPAIR', true );
