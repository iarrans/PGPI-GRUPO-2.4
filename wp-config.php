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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'BBDD_PGPI_Prueba' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '&:Wj~t .d&]r>BCWm8kgC;fwLv`c7#&A~UX$]nd8VDNXw`oK+^<l@;< 0>J,;*#.' );
define( 'SECURE_AUTH_KEY',  'Lm*RAf.?-/(%kM#L7kY`{(.`)5Ysx=<?_yF2m@EhF,:*4[r$U;-zXT>[?Q@C%Fm}' );
define( 'LOGGED_IN_KEY',    '}i}6Qg%@LOM.Dj~2Uj&{DMwL93tk_L|>-Aa9Tq{=bg4C_j7OX0K<PFCb/$3Kf!(8' );
define( 'NONCE_KEY',        '@PuCp--mVbev`{^s*{+?DX6.U{=Oz4$}5vgWaLTQ~A2#zqj&k^NlJBTb.0HhVKB]' );
define( 'AUTH_SALT',        '5*IjCHnjslY=.t%Zyy$&ihr~}1sKu4.#cEdHU<oUm1!KC-A/-Zb[$TM%E@iP4hl0' );
define( 'SECURE_AUTH_SALT', ' 1o7|(=zx(2pQxF(&i?sQ.;>IfiFjiU,^UVEIVJf=[qWv7||S/m;z%846jxJ4zP_' );
define( 'LOGGED_IN_SALT',   'eSH|=z`v;f(RHac]Ww`O{zDu;h+{=Qpqhj _I4#a@{}-sIKg;1=F`Xi3Ss}jNj{6' );
define( 'NONCE_SALT',       'F GT_H/aUSJ!(ZZIy|83KFH!DjVIpWBu.<7}lzfB$.dx5ZD%2s&S0n`xlJ<r*xyN' );

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
