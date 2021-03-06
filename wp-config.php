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
define( 'DB_NAME', 'dabazo_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '9l yal,0n$^,ISK4{k@`T!Hq`[M&>9xn(px?V>?*f93+bPE{&p;UZjdos*fqId4y' );
define( 'SECURE_AUTH_KEY',  'IaI]{8:>np::;:lRqnOc;jxDx7=4LqmhIQ^8H>#H5~afYf-el,-RLPI$5}jVi^?w' );
define( 'LOGGED_IN_KEY',    'm+D<lL$?7kCGJXG#r4(U3iv:9tnVjc]%!m|zJSSFb2HR#6eK]k<FX=G{IKh`mGMl' );
define( 'NONCE_KEY',        '2mLy6$^`n@GoAf^]<H[DQFs?2cW58>cr(Nf#akr_$c]o<<9n sv]{WLqq*Or%79H' );
define( 'AUTH_SALT',        'Xw_i&oY,o@88Q]8dY9MBwCXrVd9bds4x<+t`y`B?MkJF)F553%:.Y#IpGe5u7|0E' );
define( 'SECURE_AUTH_SALT', 'Orz/,sEV-#BG(aE?~cuY|*?.sf#d89|+x&rkjau91K:t;K9]v4R20dGbj|B6%}RL' );
define( 'LOGGED_IN_SALT',   'I53yW:w5Y8Plx&r{SwrU[m]a@Dt7PT!rik_y4 G|FMp#!JG;h~Inx5A8e^v]C9)d' );
define( 'NONCE_SALT',       '[t;-9g xs uHIN%jR*?V~SX;ONm@K/x+H*w^E.%BLR!:+iqd,NB,g8)Jj<@ocM4i' );

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
