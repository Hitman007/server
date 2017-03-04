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
define('DB_NAME', 'customrayguns');

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
define('AUTH_KEY',         'sf%%^KZ9AW>vF`4/|fa&h^;R?j(E?>[ZG)ISYA+Vvz4GA6~)A@ORaN/Ih[p,~x&~');
define('SECURE_AUTH_KEY',  'knLl(6GRt,?n6nlp-/=rSX(LjoI%lbyMf^GAy2%1i]8fhj.h2F;j:IjGDxF=8D$4');
define('LOGGED_IN_KEY',    '$|H<;l$nrYZK]vaE^@~ay_i.@k/:@2K8,EA,EQpK2AuJgtT[mfSZI:J4P1cIbexm');
define('NONCE_KEY',        'JHlRMYo=v#.5OxpPYzzwx#6^%7}RY;4PI$oouwzB/n6Dg.W1p7$0n{n((V3).Q9F');
define('AUTH_SALT',        '1OfMhv{5mYq3]:g|MF7Z5l/?XWGba|YNB~wm[gGBjJMH#+4C>m?|9<i:7Rg{(Hqk');
define('SECURE_AUTH_SALT', 'iHIK +XB[=){edN$}!rl:|[B^tq:^>`:S-XJg2st6YA_x2xf.e=ZFFGk*kW}C2He');
define('LOGGED_IN_SALT',   'MuI3r-iB,8$0cdt;}xzt/,v^>k-XR?:n_,dCK$|odZQp02KO#z1>7v= V)2<H^WS');
define('NONCE_SALT',       '`Xd^?>9{!DtCcoPH8l^d,^mXc|y1<o=R/]l6RZ%J.6YvJCiWui*QmP5TIY=*2@@P');

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
