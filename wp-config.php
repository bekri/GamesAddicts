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
define( 'DB_NAME', 'gamesaddicts_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'd68Gv94PucZycgSy' );

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
define( 'AUTH_KEY',         ';j23V@PUDvj(!a|i5p^d%,W_O% ORq tR LJ*4?A+E~s4n0~}tgej!J.>]Kq1E0}' );
define( 'SECURE_AUTH_KEY',  'pWkZBz8VVd5+E[;mgMu`)E=Zy2X]N$Y{Js:0F<;;bjv*}`{bk48yid0SFKTVRiUr' );
define( 'LOGGED_IN_KEY',    'y {72`}5ZSe$-L)JL5xXQXjvO-4ejR/>Qz>m4&,^u[0yF6.X,`FXR@A06>~p@b_G' );
define( 'NONCE_KEY',        ' yP2(T`mloq|S<si?cEmGW:_8>3)Y5h~d}{OJx{BUZ7|dICH]XC<PZ)L];;5dv+x' );
define( 'AUTH_SALT',        'vbpmHflPWu^y$$&J]P;_3530}D|Y_VE:sr^f>%$RopYPWhnS&SOx%Fqf$te29o90' );
define( 'SECURE_AUTH_SALT', '4dPC{24Qcu}vj8yY[g:mgD#!.;eXz3gWrPFd]*1Cbwky! +cEc;&+`%C(+wV;U@X' );
define( 'LOGGED_IN_SALT',   '1Wmf?,kdJXeKcs&pxlWvI)N&_hv0FW^4&6,eu<:.]}Y! L(m-J3>6Iz#+l375,P|' );
define( 'NONCE_SALT',       '7sH3~YU:{_E?{/h.!8RbUlbSNgH,NgT5o>yZUd!ugNk+jo]3y>YBttAIE-7t={W)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ga_';

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
