<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'admin_db');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'simplon');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'p??ai-!wU2)5`}vBYiP[,s((`rT0QmF|R`|!ZXsr!f@;ZCstRSlc+=g;T4CzX:MH');
define('SECURE_AUTH_KEY',  'ya$ZuO0J!:1GmJ|J#mFejb8j8kv^<NRE0s qNIm}`}!4BtG%uc;sr`6?N]+R_J2&');
define('LOGGED_IN_KEY',    '-2erZ|2vVC`m=xHcMReB?iXHQY$v%{VzHN_lT.2Q=:,U.ZIoRLFyx=?rJL(y^4x:');
define('NONCE_KEY',        'Cx+W6obKrt${W=S-:RMmi{:.DzV=|eYMe29s1)l]Oxjp&lR(%4QL4l*k-HJP3iU-');
define('AUTH_SALT',        '`lf^;7<|~.sdn22#/,$X5gr1}ZQu6Q0OkLK:#k~sFMQ*S& r,qM);0+jHZ2dfzTn');
define('SECURE_AUTH_SALT', '/oYOW`un*y2cA2qqG6=0}0ZR6PxJ22BoWdTtK<k@K:2K01[R7OX,%LaL|.Tx.KEj');
define('LOGGED_IN_SALT',   '!j9|A~h/TfZ7<zx{_qc{;/N;RW0M&n?[lZzDW+bw,UDI[jShUhNmuS%}!~2<BsZ2');
define('NONCE_SALT',       'W/6Qr(zsnJJpAL/TRI XrG,vo&:Q79$JN}V*-0NNxmEZ&!>1,8,{=k8lK|la!!.>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD','direct');
