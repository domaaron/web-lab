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
define( 'DB_NAME', 'webapp_db' );

/** Database username */
define( 'DB_USER', 'webapp_user' );

/** Database password */
define( 'DB_PASSWORD', 'G5@zR2!nW8qX6pL1' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'uH,I)[86Oo ~9j!-*pj(<0Dg{h}4^uAx=tI/M+DzNv_*8]pQ?;ZG&i^bB:q>YwK>' );
define( 'SECURE_AUTH_KEY',  '[,E}^8 Cr-&_[6X>{5Y,JN#yxu8DtUf-61YtR{}?^a]+qAdTge]^?ZK,92h#t _t' );
define( 'LOGGED_IN_KEY',    'DnQVQRZbu7}33]B|`Yk7AOXL/~dL}th;|s}{AC@gJumBPSN(YQ7,gwL|,(Jemnqq' );
define( 'NONCE_KEY',        'lI;6ppJGl.,K{%=GEr&bQ,:I@|[U$G^;FeBGj&v:&;uWz_7ngC/TGo6@mHtrl~ow' );
define( 'AUTH_SALT',        'Jt$@#8coK40 9=`5K0V1D8MP}l7/rkEuyeMbWwF_!(?;VYJqg?GrrpS&GHA+OM6-' );
define( 'SECURE_AUTH_SALT', 'lwy0(^%)jwyGM8*pi{/*vvFYOxOq:[kur~|c@IBW2;$%%GtJ@~NV^o.ULDcS0$R5' );
define( 'LOGGED_IN_SALT',   'h&zcQO+X]nl5^LvlDimYFZ&Js(9GHR[wE-XZoTC,/a*D?A-hX;t-Qyma/phC8Aah' );
define( 'NONCE_SALT',       'Y}yL`ynB@rC_ GW:U6F$e(A+@.>)fb1cT{HwE *TmdZ.!Dg3my+K,iZ JvWgj8]A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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