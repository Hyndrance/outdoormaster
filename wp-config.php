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
define('DB_NAME', 'db_outdoor');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'altabss2017!');

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
define('AUTH_KEY',         '_c1M}WE9LYpaKB9t7;+SWqYwd#O{oan)S^0X|!bj(gXLP#k=I2,[L&Bogt~h<bfD');
define('SECURE_AUTH_KEY',  'DS G6X#Xp]I?!tu4@a++v_5U3?D[2RsW~.1b!]4d`t6:]*ZN0#-KjHY4xbC;rFc}');
define('LOGGED_IN_KEY',    'nzOjPJ8)83_)5Q~iy/_57Fi@0~ODhJOVk`#oYRd75Apyw9L^u[2j+mtn4oPpX@DG');
define('NONCE_KEY',        '#i&6DzDn60Ahr&xGKIHba#F ,-CK^<V]TV$T$=J{T,/>u]p| .r{N<PY|o1jZnsG');
define('AUTH_SALT',        '8*PCQB/f haD((vy`rc,U4hNA#OYJK*y]!N%{&/4]KhBc;e&u5e~ac4RIl$sY8,S');
define('SECURE_AUTH_SALT', 'l[<~m</67^%N+Z#{kXvnH8vnm:a~(!dg]%`8qTVBmBw~7fb^o:MCH4?tC<SO)nYg');
define('LOGGED_IN_SALT',   'co_&rNV>4c[~!p :#s7FCdeE2t>^X2M8`:{+W[IH9844mETgB.0rO)]gpG>c}>;%');
define('NONCE_SALT',       'HlBTo%/<mQKEx=pu8K<a*$&^9*Uqu3m4<eWoa/(#ybwgg/k6E`5A%Wm+3$rQFO0i');

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
