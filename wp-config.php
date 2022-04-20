<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_F2.UM},#uIfX3p<v&;&Y0x!md,LN$}{S]T~J[t_B<uZ$ Je3mF8p@m_$__90zTt' );
define( 'SECURE_AUTH_KEY',  'YxnO04bLo]k`*s5#6{O:G.~V*,lp#=:=XDU hBU$-or0wA]P@<.SMRk ZgX1B^x~' );
define( 'LOGGED_IN_KEY',    'o#R^_Lo*/.@CV?(sm<}|tqQWH-CK!)=hLhmH1c1v]!@pZ]p:L,gm<}hoz|f^ssbr' );
define( 'NONCE_KEY',        '.Vcnzl+ut_%MG/LOd>aU0V2y$c3G!ub!iJ(nQptQUW+M|FV1xohq:eL=-o}4<~+L' );
define( 'AUTH_SALT',        '9+h+/ ]8@EM%bNB~_e|Uk$AKk!r!R6[sr.Yj8)H^NaN198~n9uU2<)>!KG?wvtsJ' );
define( 'SECURE_AUTH_SALT', '%6kV&Mxv.k8|kxE*bA25p1B4F#uS2bb3VX=Yg}nrmxw$~rtAK|[y73Tt|0aK9xm~' );
define( 'LOGGED_IN_SALT',   '-vDOW8jZSiPf<Q9FuZs0-DhLxtC5?oDP2S:36d|on9)WrIe[j?[Zwml(FnhI_{&V' );
define( 'NONCE_SALT',       '`xYYX0LXY-4S$bb+ESP($2?.PRC,,ylEJieC+Y^VS{FZ=N>HLa2xe+>eHlhCE4Cg' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
