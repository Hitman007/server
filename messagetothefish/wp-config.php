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
define('DB_NAME', 'fish');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'kjea3kjahd3wq2');

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
define('AUTH_KEY',         'Qp^6?/HZlrafO}-ffq$}aFZ6|.<:`3>w%yv2t~3w>#vGkX+X.w!+KeZ^F/epE5VN');
define('SECURE_AUTH_KEY',  'Q4dTMvMhS*1T9pCr2(jK)1]6t;(qUm#6Fk%Qk1.@#pzN@.d9W)&qhve]b$ex?CCy');
define('LOGGED_IN_KEY',    'H1.:7f+:)<G]4(+?8oqh1-i|T=*jXJN[F%T2kN)^?}q%l<(tp[<;[)c}yd{D(`R?');
define('NONCE_KEY',        'GKDb,]I;G%U1O;<O{5>{8$AbQTMUL)|*}VT| cD|rd`9H6i+mPR+>m*L`IDkz`<1');
define('AUTH_SALT',        'f/^L(~8 qB&:Px7IWvATf6lWn,0|LxAd~Y(]|;R]T].|yYQ1e9=|KQC4g1fL]@/h');
define('SECURE_AUTH_SALT', '{o77XqEOAW`&s|I*,N5)wQ3/M,GuNpv#Q}z-xHt?`V4akmSA?K4t761B7t:]><d5');
define('LOGGED_IN_SALT',   '(w}Rr2`!,|fV@P9`D79hgyDvMf9&Nl[|RC4QZ%x;g*t,B=F=|I-mx#pg%3^XVV6 ');
define('NONCE_SALT',       '};-$2p,lhSI:2Fkmx2?f0zneGYyQB;~S?:ajCxki<vx5&Ut!+o.41/==**;}!1^|');

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
define('FS_METHOD', 'direct');
