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
define( 'DB_NAME', 'my-portfolio' );

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
define( 'AUTH_KEY',         '}KCX_(.<6Rv_]#+yde^*Mo`]J~T,%yr+WX4yp<*.cFm4k-_8,55[A]&EXT7(X $H' );
define( 'SECURE_AUTH_KEY',  'gqMT.p>9BdY$scs=d%q~?{/QL@<lH0u|-zPA^?J^Mz{DED[8Qu6Lr_*Qr9Q$9xtJ' );
define( 'LOGGED_IN_KEY',    '^:1N6~|^biy;NKu@e7f1~8GGctH(^! mE&:pPv}+>Mm!,Mi!1_l</u@}vFHz,B!p' );
define( 'NONCE_KEY',        '7mGf<80,0ahuocd+)1.c!hmSpCKuRxPv-p8z,u`.kgjI;T0|{*pC__s~N3np]JBi' );
define( 'AUTH_SALT',        'GGNCl;c&@CL~KM7K*MfN0**ORG*fDa3@BCc?57cGZR9/LYb2}Wgo hKz$22@cO&+' );
define( 'SECURE_AUTH_SALT', 'm-F7zR .s~yZj^9h=TLcyFw3xsU.Gf3]W)gdId&iO3zCayD*;fn2I7jOo^[Fb,l?' );
define( 'LOGGED_IN_SALT',   '`CACBfmnaXV*Hro~%Vr$os:vtEC]O0:}`<5}fo?8#q]n5C]3!!2k[XS7oz*2(GWD' );
define( 'NONCE_SALT',       '+zrEP>,|f0,XC[g+548%MnWEG{E[|{[wA^L6xPND|Z%gqO*E4ryt8v<y.m.R@fu,' );

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
