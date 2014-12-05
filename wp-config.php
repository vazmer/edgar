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
define('DB_NAME', 'socialme_edgardb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'K*q?:7gB75?}zdbw-I9Q9:V8=IZ8p|}Y|$Ma!X3K>am,#sK6~,GSh{~4U<wq(boO');
define('SECURE_AUTH_KEY',  'E [W]w-R6$&/=!gh}x$-&h8{kZBx_oI$FIq*K5u#2#XXF%gLQa%q~-vV/9Gv&?@`');
define('LOGGED_IN_KEY',    'F>bFyf.6&^Rq/z3F87I`@)_|U=HTzf_>.=AHg%pXZ^4_ <Y{*/-mKoO*>&><9 {#');
define('NONCE_KEY',        '7(8}`7N:;s^~?n.sroS}8?[+|)0(H+0[nPU*G,7T~XKM#t:|T6;#8Q3}J< iH w#');
define('AUTH_SALT',        ' q(/E&XD[4aq4~Xoca%y6H9R_U7BSp2M1-~L_yQvs |TD<UIyxtY4mD`3&bDt|^<');
define('SECURE_AUTH_SALT', 'b)1){ZtW^:O0ShlYt5@h+}<q4pXp#P@p<XfPVB]o4^]Xz(:`[.^|Zm/|h[^%Jk.g');
define('LOGGED_IN_SALT',   'OV>*CXq<Z181sd9`p]dmx4tm=>E c]!ATB&p37LnRF]1 m%4%F|ew~E5Gt&Krfni');
define('NONCE_SALT',       '.B5DJ9{;w:*ESLeMka?u00/{wbLvvSqi :)p`kd)+IZgi3@}F]C9%wUQ}2w!(RYj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'edg_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
