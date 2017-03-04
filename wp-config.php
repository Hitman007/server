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
define('DB_NAME', 'maryjanepoker');

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
define('AUTH_KEY',         '^I<}~yJ*lW{xz`,FRLqe.4Eozwv3Tez1jo|Aa)vet^%e[G-l#V.LeqT*sVAH!,jZ');
define('SECURE_AUTH_KEY',  '8lBXA8zPrZD}s|VS%TQ=e`7#{Ki0GsprW DbDwZ~Luq^BG:4=j50r`.N[JG_msr/');
define('LOGGED_IN_KEY',    'YKAkA4g7wev`~$ZsNK#xgyQBFlv<-!!3V:(%$7JYc^zB5&%y1P}$Vw9iJnbtQ//A');
define('NONCE_KEY',        'SOn5<y2+~0vpk2JMe1qF[CR6q^S1mm)g$Wp]Sm$Yz-+<S[o[.*V.808~:@ES4O0S');
define('AUTH_SALT',        ')K|Z!)>LhJMm-A_MSa-AHHH@$.%yEe Y}u4_>-Z]}p}|A)Z4~L`@$@[1vYj+_#g,');
define('SECURE_AUTH_SALT', 'p{s(+]$(Cj%oar!^Z2mNDeUvX&-D:(XU@jrM4tGE6-(T=erWJ`Ldw4!*@?S[SPof');
define('LOGGED_IN_SALT',   'YrgQ}![+m{>nMJk~$tTx+Wy]}_0MQ7mGq7yB8[}BAh?hikvw[7ipz_%&%/zN[tM`');
define('NONCE_SALT',       'Vq Pzg0-5wGA%2;U<4@>K=gBMy9TiCsd)VZ+ehJ>$!m5>l)ud]:Fw:OR6+@QKWdr');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
