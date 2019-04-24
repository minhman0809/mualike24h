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
define('DB_NAME', 'u308316020_wp');

/** MySQL database username */
define('DB_USER', 'u308316020_wp');

/** MySQL database password */
define('DB_PASSWORD', '261997');

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
define('AUTH_KEY',         'Jkqc$/(*bWz8s#N+b%dkN6eD F>2b7L9xNO#p,1B{(|&qmY/`M[xLXO`J?H3)]eC');
define('SECURE_AUTH_KEY',  ';4Y|GQv.;g6li)j;(B)|TM[mPnq,V,cl9wvCv7V.Mc*Eaz`( LM{#PMrP#;(i<fm');
define('LOGGED_IN_KEY',    'HkU</!7?AY9H2%;V08g6M25kAe?Kk2Kiz=o9gz%w5 r>L7kb42S7?G*t{6ttDdn?');
define('NONCE_KEY',        '{BXol#ox!sfBn@(*![hilj{WsDc<67Ry+p6,}&3=z}$/( 9,v0w?PU>7ll:!C^Tu');
define('AUTH_SALT',        '=pU10?Y)u(vO?f?fvs^SW.s6Wl{0DboD2fZdANM`:8imS<bvdlf;twRh}$F{d`E}');
define('SECURE_AUTH_SALT', 'Hz054q*Td#n(A1<@RVL`]V8#O@j7H&Uc1.*#z@bd,{aIaSYZhz n`_FzGQ=gl.Kp');
define('LOGGED_IN_SALT',   'K/,9+6h|`]l6En|yajT-&_Op=`>cgH IDz8dw:iLwXIZJWQ.@,SnRbj%7;JLMgK?');
define('NONCE_SALT',       '>Cz#Pe.g|:;/+T]iAk8/og:7@e]w}JA=9,: `04)jB[!6SQP{LZ{a]Md.,JcnAC;');

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
