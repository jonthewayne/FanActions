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
define('DB_NAME', '763435_fanactions');

/** MySQL database username */
define('DB_USER', '763435_fanactio');

/** MySQL database password */
define('DB_PASSWORD', 'SLbX2AvM');

/** MySQL hostname */
define('DB_HOST', 'mysql51-016.wc1.ord1.stabletransit.com');

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
define('AUTH_KEY',         'C|^fCy_Km{bWM-l}sJ2DqjyW{[S*,-{XW2G#{u(Pww41lIgBu6FKhqA}c/yuTp%~');
define('SECURE_AUTH_KEY',  '1O%s~76EJ<([DiK%35iPZ!C4=37BYRNJydp0CS0CV &NU|)>!N/uf?KJtR*gHAkY');
define('LOGGED_IN_KEY',    'r|/+fzXt%&>.vW$w2A&WA@^]-3.S9X]6#:,262b*mrGAc)Csg*|]4]bVV6N3m$0`');
define('NONCE_KEY',        '[{Pl_+/+Qb-<!}39z!sQ4z&ryu+;/#$FW-kX3M}8uC@PKTZRadDYcX=L1El1dS/|');
define('AUTH_SALT',        '-wWPG!.`|2]`rK`$&1~Dv(C?L{4q&b+V3G~G/6%@>EcYmYY:ZGO7W1/@6daoS6xS');
define('SECURE_AUTH_SALT', '~C,+7B6i`F1/<G 2+_70A|]7[[Mjs,3Kqf|[TH:4a+]Ne~C3iZLnQ%[v x|^k[+*');
define('LOGGED_IN_SALT',   '7Bl<{IvnAwVav3xuPQ4VJ`zF{I_s.XZxS Q9-My!P)?QTAvdzFIt-:~.<RNn{t1y');
define('NONCE_SALT',       'hp.ENf>ga!B;B3d<iGSXq-K+)&?!Ny]/Y*(`kYX-+Urk2xV<4t-g>Hj}6!HK :>A');

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
