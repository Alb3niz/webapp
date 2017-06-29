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
define('DB_NAME', 'mysql');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'rcfaH6FfNo7p');

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
define('AUTH_KEY',         'hChEI8?k-ihf{M<PKA27},F;;(d#=C7{vb^%cX#s8gHk#% PnrXDO$c3E}LIii#R');
define('SECURE_AUTH_KEY',  'D-7vAh^TWi2/d)IFPd]{BSbn)u/SCr9U~6%+]ilGl6I/-H.b9%W8dK4=hzTB^x9&');
define('LOGGED_IN_KEY',    'NLgA~M09-.c6q|Nc^h3FDSN[jGJ9twD48[3_/LK7w?&bwSjE4QI(en&3m8`]{ti<');
define('NONCE_KEY',        '($ss~Ub]k6CF)[a)D&^&!VIkEo1]YS3T1!8K-WrlTN]}~]tA2I22&ZMR-%WCO?hf');
define('AUTH_SALT',        ')%Pe%4/Pt=>L Dg:bucaEjkSwA7&-10|Ue%)@Ox!Mm)wv>p/?&Hu0u=#)TO41NdK');
define('SECURE_AUTH_SALT', '~90s`P9{3hS`(RpXT9tbhsvZqmc:&!ER6-#fY&F-Ibf3r) I!OG6>JYk+wh SCL_');
define('LOGGED_IN_SALT',   'TmVDV-tuNRTU*:B4G0%5M?uyVxr|Y5=oX-MQd+koGn,)w%^FdpS$|LMT1iM9E;`B');
define('NONCE_SALT',       'zbKVI!XxH/sz;84enC$K`i-MzIAX/-B)W?Nvz5.o=p63CyS*0fI8Lk){q8U9vgGK');

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
