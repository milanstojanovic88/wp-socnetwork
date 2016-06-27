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
define('DB_NAME', 'wp-socnetwork');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'tVaW6f:J-Ha#spwp9T{P@3o9ho|8*$#AXOr}p<r<`cD]tcSQbN 9ld{qgK`u}cc2');
define('SECURE_AUTH_KEY',  'rEcvxIpyO)^f$Z[]%#>{0-Lb%EjP3rBqe5cjrI7NizH.|!V]-_A*[cneH=vkAlL:');
define('LOGGED_IN_KEY',    '{Q%tgOa.NJeBQ~^1_`~[/.-M-N]6T&^`T.Z_DA$pd7m/A4|A2+0TJ[i!(OFFd77l');
define('NONCE_KEY',        '?g>BDE6gqK`1is+0nF*U/~vmu)z$g=tZ::Q~`J`YX=U9X}1wK.?WiC4KvP@==e%w');
define('AUTH_SALT',        'g=GH=V]_E0IAlO!BCeYjPqF3QsV4S15+rp-GP@;@}02tFk<M=m0U$%R#5GRq85Hh');
define('SECURE_AUTH_SALT', 'hc1.aSX0i^tO6JYWF@}3&fWXB)eCVvC:9O+RkN0nQVZ``~KMID#0_OcjmB>^uv4C');
define('LOGGED_IN_SALT',   'TtV7wv`X/<HxS,^](UG%0&r{h+>nP0ujk0Wb~`.WUj?] P6*sD1ELdM^3.>qjIJ@');
define('NONCE_SALT',       'e*C;$=0`@]@%e2z$<,}DBn3G7c<+Waib>^3+$}>Xsc[i>qWO3)@a;_B6[XY!nWJO');

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
