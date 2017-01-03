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
define('FS_METHOD', 'direct');

define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '26e5b714f1ee0c61e1b381e0d84a8db37d9ebdf784ed8de5');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '$p[~33Xd-A*mI2jZa!&:eNs1jP16/Ah)d!YCBR!,>/R=,Vdc*O4E%3hmI/Gz3<Js');
define('SECURE_AUTH_KEY',  'Z2PBLuZS P${a+o /CI(#Qw)7mcd_jrWu%k)ejAEnM3#fb?fG~+B>~UBu~gZ2gZq');
define('LOGGED_IN_KEY',    'VD;zL1&2tLLhpdop^~I6eN%SMD14i-nmccVFTG5nQ=-wt)UET`ij:~XX.|j`]zV?');
define('NONCE_KEY',        'U,cCqX>.10OL7v|6@z~(uk:A,Ia9WFqcr/N&{K~AJ?[C)iG%Jt_z0 ;Z{t$d2g56');
define('AUTH_SALT',        'X)fU<^/BHWfbms7sm4Fb#@,/c{VJFk-jJ>!}4+NtE=cIw ?Lnl}6af[^;E@%c46.');
define('SECURE_AUTH_SALT', '|[3{#D$Q5bkC^Gp=B{zSY!0vlJoT^lxU}e|8E]_A#gK@)]<!v _g/g|(,2Q/3&>&');
define('LOGGED_IN_SALT',   'W{Sx;:U639Z{Ae%k=F+wWv|#+y4|5>S2p/ V02Sg4z2qubM Lr6da*j)48nk`!vu');
define('NONCE_SALT',       'R*e8aZsn-H%5yDN[1AKkpZ7`wJ0-1d0tm!#f/8!O{5pysX;w8ZB[P?7a$Ri,jS{s');

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

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'lucent.design');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
