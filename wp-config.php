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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/content/45/12225345/html/teamcalbaseball/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', '***');

/** MySQL database username */
define('DB_USER', '***');

/** MySQL database password */
define('DB_PASSWORD', '***!');

/** MySQL hostname */
define('DB_HOST', '***');

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
define('AUTH_KEY',         'L$~h>VE#DY+svtCIqPe(CE$u-34eTUG2_~A?Vk/Lwo@Af+dz|=@b-,0IC`M LtRE');
define('SECURE_AUTH_KEY',  'xHr9?t*SL@|sZL9-++{<J6,5t6Sva-S(EPE`(#/!V,8-`c.^]P+o3g=(2+<e1%]B');
define('LOGGED_IN_KEY',    '+5n|o4]*w0w:1x@JR^a{?0v&(n!RC@@4kamTYE7whf]l-C!f)=tcjzqp/d6B H|A');
define('NONCE_KEY',        'i=Sf|bKzu*}7I5<|l?/#+@d`ex|7SFyAo>G&+nb1>-tw1sRQh_%vc.*md;8B[?Q^');
define('AUTH_SALT',        'fQtUHZk9[|JF2#x#nhQ$7GAXk>ZTS,:qL@R):.r>~8<TmG~u+HR/Dm{G3=b?3*#-');
define('SECURE_AUTH_SALT', '&zJV[nN.5F*2<W*+YYIT%&~?jE[R*h1o|Z+ZH,YeK%Ya-88C@|I%=VOm8q@Q}h~i');
define('LOGGED_IN_SALT',   'mMd5v&VC/6~6`OwUFJB*X={@y,h-]E[i9n*3hU7NX]1~(cV02Y6n:@n`f!(4tm,^');
define('NONCE_SALT',       'KJjzfjECeAF%`E4.qKnBavsT3HSLQ?sOZ!ca>*_ZN[JXnlNFMvU9fMB%l%hZ8Jn8');

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
