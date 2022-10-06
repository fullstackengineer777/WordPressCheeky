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
define( 'DB_NAME', 'cheeky' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'QkM3E |e{=*dbZ!M^cqAs1M,g[K:(}LzmfpOkZa>G$LZwYx)NYaI@?EMHiS}EQ*Q' );
define( 'SECURE_AUTH_KEY',  'cY,FEu6/s<V(qcyB E.+=UR@a>eCX7l&G O7uR|/,jc<,#,v~Nw[0>?7gX`/W}-]' );
define( 'LOGGED_IN_KEY',    'cwZ>x}~5,`s;x2Ezia|~Vh=V% 0`_Q3cRt`TjM9yB%I/yo&s_%IQL9#b<5|4R^I1' );
define( 'NONCE_KEY',        ',$R,`he7tTywY|Z_41j*sTM-OL}n,I#`Mwe>0%84ta{4Vl3cR%5RYm~!htGv+KJ_' );
define( 'AUTH_SALT',        '$x_F3yK$U/dEUXGeUnp$!-6 mUyd9N-uW}#+e7vwXbUBLG{GkvN#XLF!>m2Y-/A6' );
define( 'SECURE_AUTH_SALT', 'ROSpb}H[IIW@JQcla[ -{[FesYhKgm8!|I}Y5pY,5zQmVYjYS:aKgJ]Ng%bkIm[!' );
define( 'LOGGED_IN_SALT',   '?D^z<VCC0({VL<+/ELJN&au$7!al*t^^!FZMeQg[BM2:LD3BB}aWJI/?{OV&.}sg' );
define( 'NONCE_SALT',       'hWn-XVnGCLxT>KEs=kW=p]$3y#Juz^[NZt7/6b=nPbkk;5+oT0!lJf*Y`c`Z9gk`' );

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
