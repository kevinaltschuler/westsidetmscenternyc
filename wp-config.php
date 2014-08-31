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
define('DB_NAME', 'tmsnyc');

/** MySQL database username */
define('DB_USER', 'albert');

/** MySQL database password */
define('DB_PASSWORD', 'cabbage');

/** MySQL hostname */
define('DB_HOST', 'halfgrain.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


/**
 * MEDIA PATH
 */
define( 'UPLOADS', '/tmsnyc/wp-content/'.'files' );



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E bzT-gwoo+`+B:hw!|Te*NOASVE;xl+=edSlZA8pmjTyuf_4adKCi#F!U`hfg+f');
define('SECURE_AUTH_KEY',  '[Miz7V%SJp{zNl[3H%SSe+@d$q{2O@nCobU3{R)7Lf8V{(NH nil{m/!{6sj7&|C');
define('LOGGED_IN_KEY',    '~ gG2>$&ChGdca]<L7RB<SRN1&9An-do4}q.m$_+@=x; ;fs>Y)hDN@]U!s8O@1g');
define('NONCE_KEY',        ';QtY3Rd[ddL4Z:H6}KldT+^tj+732%kIA)<I <3CV-frZ#T{k^?%^e^Y=/7;r0bz');
define('AUTH_SALT',        'XOvyc9]>X)];Yh8g4<!~A0w@`gi>)<]4Ylkn@_iwvLr:7=4+E|bjtP_@8zM5 .4,');
define('SECURE_AUTH_SALT', '$$<:&[R,HNJDb7U!E$7az|aGp/U]@P>~~|bq}QZWXNx-bPt$c+;vs,?|ZKx#|J/2');
define('LOGGED_IN_SALT',   '5-gB_0@sxfJ;OV=#B[QBzFhiE?Q q0u%1?]6uE NBghN!+d#coPyw zd{kLjGE0s');
define('NONCE_SALT',       '1Vc9nAU+NWP`6O!|*+Ya_zQ{R+x)3{qh<_.r|3iYCamr##ogI./6CZ-dV2G`3T5H');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
