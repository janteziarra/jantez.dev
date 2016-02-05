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
define('DB_NAME', 'jantezDBgxmd');

/** MySQL database username */
define('DB_USER', 'jantezDBgxmd');

/** MySQL database password */
define('DB_PASSWORD', '4lZTLFZTLF');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'odhGO#ptshp59_4C|[VJRRV8w@ckoRZ![~@!kCK[1J}0ckYYcF@,nrkYg[0||>rJR');
define('SECURE_AUTH_KEY',  'iei.{OWLx*ellah]2+*#pt9H669_]iLSWdG~#ltshp59_[;x-HODDK]1dSahkOV:');
define('LOGGED_IN_KEY',    'h[:_~|-CK8FN}4sVcYgV!>ovzZg:![|}!NR4NU7BncjgnQ>0v$!kn4B007@,cFNQY');
define('NONCE_KEY',        'm]6A.aeHahHO#ptthp19:#]~LP2DL]1pSWdlZ|[~~_lCK[15~_ODKGOCptWNV4C-d');
define('AUTH_SALT',        's-wh9]:5[dDRG-@o-Z:!!|wO8G|dORF4cNYJN|vwV[@|[zRCF37rgnM^vvzkB!>@R');
define('SECURE_AUTH_SALT', ']SWKRV8w~dlwZd[@|-_wCG[1C![hKSVcR@|ks@gk08}|[sKR088}4dkZgnNU}vzzn');
define('LOGGED_IN_SALT',   'Ee9pat_LdVs_5:w9Oldw|N1[CRo8>0vN440gRZzkz$7,7>FF}rcg^nnUr,B<3^BFB');
define('NONCE_SALT',       '-8:[0|NVKCK[1oSVVdR~!k@|krJ}00,}VcRJR08wZdcRZ|[@,>rJQ077}3cjYRU7F');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
