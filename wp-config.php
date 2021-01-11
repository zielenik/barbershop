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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'barberstudio_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'mW^uN,P,S$X[9ABA$<9ORQ[AtbbJP~X_rcFT{BqEe?0M70=a>,Ue8eV;FP%.g3C6' );
define( 'SECURE_AUTH_KEY',  's;*fZg) U7$Nt;Q9&51=IjfRCbx|]SF4X!+}QMU5_z@ZVZWjvz6HxI%!q~N1>3J+' );
define( 'LOGGED_IN_KEY',    ':|HP oa&kZTL?t71A*E-OL%pw~%oAWGbDlU8Z#t9e3]bjwZrTz&:M<7e:ZPG?s^k' );
define( 'NONCE_KEY',        'xv%ZidC+GAfM.lT&$>]C_|$qk/vY.sNa|idC)NN8Lru[cA-z)dLNgB~,a={BA7F9' );
define( 'AUTH_SALT',        'i*$s}cmV7zFd@rMll@;E|Ng>GG 8q=XjI-P@do=?5`gj<q[>/[/uL1rbBl4MNom ' );
define( 'SECURE_AUTH_SALT', '^^%px3HA_xgo}&2gvij.QyR/R^%|#-.a:MLJ|iYt:o6;U#giYWM!O^:oA*upS{t_' );
define( 'LOGGED_IN_SALT',   '|3|ebU}Ykrq~.xQm3U5j9K?nC2(.S;CTx4rrh,sgUsagG2@YV#[b?|&O8JY)sJ81' );
define( 'NONCE_SALT',       'Kgr(:>c3brpgFW?KH9cU$3>}DiF>BQ?%^0bivtIe%&`30*|BOrna;AGmp[c3xCY:' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
