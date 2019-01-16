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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/ftp20173c/thisis3c.com/longevity/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'wp_longevity' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bhadani' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'oTHb8hwc8$2^XMN/tL1^%SZQP7AsS2CO!ug+Z1:YzlCW~8(aD**ckh&*+l6Lu6kK');
define('SECURE_AUTH_KEY',  'nn/&Z05F8%5U(+T6"Ru$p#1|2$:0L$cHSScZr;uYt$S2Is$DA`A$VM0/4HyzgWG3');
define('LOGGED_IN_KEY',    'W:NlyB5fQ3@g%QLiklKecu;RX~i"D)s(YDtxCDdccLAlz#+jYgCCAQhYXW!a91p?');
define('NONCE_KEY',        'y8lkw~t!Uo`3zb9Tts:**Kt^dft86iS:w4itwJ^KZzhD?|AkV6Av2@~?5(!8~$xN');
define('AUTH_SALT',        'mENEorIlfbM+%7X)?:&dl6?/l?P9J75q~GQ+"ZR|!P8CIdtW%r%5lEj"9&Exg8c5');
define('SECURE_AUTH_SALT', ':OV2BHQUFMic+S/M%_Bk9xQCLJK%~b7YNi/H`"g&7P2hAkt/(Ho5333CtD|)f5u~');
define('LOGGED_IN_SALT',   'wzWj$ptG7XHWE%tbOs6|*`cOJbyVfNKNvHvE*Y"AhWKF/_wLV?8e:eYE)8n8cSod');
define('NONCE_SALT',       'Z;+4BEiLlFrKA|!K;P13RZ8ZBGQ4Gy+nBWeQ_G0f:`f_?sY7(5&Y~JK83O6^7bb6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

