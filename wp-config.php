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
define( 'AUTH_KEY',         '-|52tDl0K.t{qY6J?<}gL]zAa k;VFY966=WFX;AzK|)>#Ii6H;E*5%~^[f&x%P@' );
define( 'SECURE_AUTH_KEY',  'P:`;|WNp,#4mYFJ@wY%BNu=?I4K%5g+e9<L$|tgmp4+.]xTo*db !Y1-!Bm}}/!6' );
define( 'LOGGED_IN_KEY',    'E#|*.7wl,)hAbyKM~#hS(ku`p9.=C={x@`Em1MhJ=#8@t e/Zb#)ZSz[V44w&tg(' );
define( 'NONCE_KEY',        'Wl7e=}asxY}w{:?1id=*br{bi}`2.Fh5}mMcE3rFMYm*vDt9A<APv!ywy]TRTthl' );
define( 'AUTH_SALT',        'N@Z>8}|ss[!fMqs`A7s}:X70w_[!^MlYpUMfmh?cvvoqAU[$eEeB/f}JDD{sY2}A' );
define( 'SECURE_AUTH_SALT', '*6t g|RT-5]<?o-O#UW+6;p3TBlyG,DbM0OO=a =I/):YdJ:6x}sM =5eAsEX)@}' );
define( 'LOGGED_IN_SALT',   'UZ4mCMnPG7a@kW3DftB%ybr62/xT0iEh6C=my[%ISVaHi6L>@6}hE467QguS%sUc' );
define( 'NONCE_SALT',       'GDPp&s)O=0L}`qmONp.pF)::)&Sr(^@}1Op43w5!-(<[T-hQv0MeG]-$hl*`Vs-y' );

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
