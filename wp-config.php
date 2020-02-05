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
define('DB_NAME', 'orca_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'OB~<(vgx?ZWP+OsOS9vLAla,>/d8TTZ|Lk`E7#TMtxbwyepxucBwrdj/]%k[&U-E');
define('SECURE_AUTH_KEY',  'Qtc5W<#zw63spl5[ q24u%!_4{pNljG>fY(3OSD8J@.f.7suQ;@&]uChgf9_P9^_');
define('LOGGED_IN_KEY',    '5qfmcqoq;)#p-zr_Oi*;YcSQ~i w_</Y*sS;X:!2@kNu&lJUU72:Qjh14w0)_@$0');
define('NONCE_KEY',        ',7`N)f_h_<HX@}O~R@a~SSN@^zT]orM3c#+Z`a`aNj?x)?/HL%fh {kYS[aj`uQi');
define('AUTH_SALT',        'sLNDyS)-1cABKOC3~_ G]|)U}?r|TiybfcHw-WY9F%z=Nwx.{aE%5@c[g<ApyGIe');
define('SECURE_AUTH_SALT', '.`)Uj~ACSzYE1maKF[`[}9n.NiKx~`yoI>uY}y0,TVYpX^MV=S(B|pqTI@ZrAQg`');
define('LOGGED_IN_SALT',   'cu1rBf2G,9{Q0jZ~I;p`_;Y*4e8.K~Y?XIV5HEzb|~k4eBwn)ffR#>cdCqCWnrq0');
define('NONCE_SALT',       '=;HT`!T^Dri!(RMS,{Qrk.<z{ 0S4RvvDS!&Sr.g,#iQh4c#R>EQ-6T[0+l~JD68');

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
