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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',         '-k}EU,9fG4z8;`LudeBMhAB-z^V:t<FWwqwXwMyRA{gMd9KU_W[rN:(&>qW#MOca' );
define( 'SECURE_AUTH_KEY',  '2,bR@n;O0eQ-L_|.& i,D%:vSdu{UVn!i;kdW;>gXWRY!=R|XT`+xN:^qdBGVAb=' );
define( 'LOGGED_IN_KEY',    '^-?:&Kd$V]RuU5vjBt-gC( !hIZMd&TF6Dp~u0(v4V{>9wi=iUM77Oq*AYtILJEi' );
define( 'NONCE_KEY',        'f@tfw<r?S T1*`6[/O3nbRyQh7z3KLyRMdZ.!l6b8XA84z+!2(V!b,08j0=q^&,A' );
define( 'AUTH_SALT',        '[C{o(GQ^_.|V)2t?J(();Y#OFnM=mN%p}TK+F_uJr+ mTWO]GqKNi.tiP1]H*Qr;' );
define( 'SECURE_AUTH_SALT', ')wLj.WUNsE3J>2Gy,6I{,6sI:n}&.n~Bx(|1^1/|$R 8>CP#lCE>zv]kMfsq5%z5' );
define( 'LOGGED_IN_SALT',   'Nd;!u@{j>FEy_.95k{MCD~f.uwE}b3O|Mi!0(d{f>q1PTn-]/uncGzvJd<QSwZ&k' );
define( 'NONCE_SALT',       '5r(0w:Q/FkK]1,=30+eNl_OG}0y{/.:~_Fl6CvkBj[R2[m1ljlXXs3!o`i_wo=s*' );

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
