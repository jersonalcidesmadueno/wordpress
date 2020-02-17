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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jerson123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KQ|nybrjL_aD=B(9.2Qz<4aiknPGVJ>tMC>,S#)2>]kDp@h}O;2 F$8=X@k*drKW' );
define( 'SECURE_AUTH_KEY',  'zNC_SN$wWnd.x,G4v`JOW /$xOEu4C&@p>7>_UZ%9k /l:*Rj=VafhGP;Uzmf#|b' );
define( 'LOGGED_IN_KEY',    'Kp>XUe#PP|ysHZIEjn-(m_)~a$=6CEzQ~bJV5rZ E,+AOCgCk:5YfKfPY4Rag`@:' );
define( 'NONCE_KEY',        'O~xavtOqX&~+2k1f*z1jB|PV8BpywPb%HSnN]]q&=KINz%8HWgIqO9SnUWlBie6^' );
define( 'AUTH_SALT',        'u*S^bwzUSMQ7FTB_4k2pf*}My-!Pq8)3Q|5n+3)-MQ^]j8zB0*V+!niBSV(%h52#' );
define( 'SECURE_AUTH_SALT', '_*[WxNfs<TQlxi4+;rm?Y<WI5wTRVCGp1>z.=MrcNi|WdRh;]lb<}J{y*@kpAk8j' );
define( 'LOGGED_IN_SALT',   'eY9t7Pd;e`a(Z?*|)7B5d;=E8|%aM^J~tX1,Ztmm%+{tLR9l#^,;dh#a8,;8+ ^>' );
define( 'NONCE_SALT',       'X&B`/9GeOGYIW_Kcbf] X>HNl?&;r!Ue6,,{4+7.SZ.oo{tE7u(kjcWaE>>u;!G{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
