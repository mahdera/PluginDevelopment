<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_plugin_development');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '-dJ@ECLwB.x~vfHsE!iXJ14O71M9X h,i.nS?qXfYczp:X*!Pk&.Kof[GV>wjXio');
define('SECURE_AUTH_KEY',  'KI@>weOy4=?(lkrMfK%pXP0JT1>k5`=hJ RG1~tQX-MPr%xhB|x^7YJ=-ODWFR+3');
define('LOGGED_IN_KEY',    'A/HP6hMXXt+sOPaBcRXstGk-?5eH81PPY,ODEa2k4fA|b4SHzxSaIuk/@OjHRwD}');
define('NONCE_KEY',        '|<bcN+M|k*<|yD>E#pVqu2;;wx(E7NrC.)&PcQ(2(qD4mV,J$P9+FQ-X gv4%_VF');
define('AUTH_SALT',        'dPjFcn:xdA3k [dQ,`9cF6^G,$_.orA>OIK|d)][2VY]g+P/e)1vtp~}NvPDk%yq');
define('SECURE_AUTH_SALT', 'po-%v;Ny=Mi^%@YCscoZ-_x-T+b+xq~#g+U}B-YT&uE1era%2&t`1{Rm!Qg3i^8{');
define('LOGGED_IN_SALT',   'SX:oE|||T?3|>e7+U:ddtGf~gr)_s1INMxp,vog_/K%!^TF+B9*6:~/*=8J7d,=x');
define('NONCE_SALT',       'tM#;Z~P(+xv+TqVM94Tmh8b:d/,-AZr}e7E]=3A.?5EiFvN9Cc]e$<y?%-H$GaEd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
