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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '273109');

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
define('AUTH_KEY',         'vs9jUc@MiA!UVe1NS6+6G}=(*x@i!oT~N6KVUDud{@r*hITF3(`a-au=As-lCXaZ');
define('SECURE_AUTH_KEY',  ';_V8q-4A[[,F!/CDqric,?KK4B9i&-X(>dy?nx-fui^N}wlQ8VmDD/$r>BEvb%pE');
define('LOGGED_IN_KEY',    '&5:}uVaVnA5yMUZW#|HTq_YzM~i]w.LgP+8}|Dmde%i5oo887XlW+]:Q)xnb=OSO');
define('NONCE_KEY',        'H:Mmg7ab+?.x2-9|aHS%/Qn`0puY?!Oh.L;ki^a/& 68dj2[#2{P<pf,nc?lS9i*');
define('AUTH_SALT',        'OC9h>e$?fmrX2C2jG:Nn7@u+,+.bc.>Ma>.se9x*!YfO&72W?)hOL!^k-]Vs(j[D');
define('SECURE_AUTH_SALT', ',x+um)2:`@b4?6pdXm? K:Uj*P090u$E8tLgCQf))a5LHV49s%ksIt-N0FZoBu=O');
define('LOGGED_IN_SALT',   ')}z>MpmxNBPl-whM~(bzx5R[XxBG;(+X{UMPxpR+&uX&|[0p}lE{k6fRE3S6`kVk');
define('NONCE_SALT',       'uNs~0W]K5s54w+|UyqlVyK*! kqmcf.g%C:y9R75Y7`[d#9qD:LBZhmNCxR0SrO4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_lipist';

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
