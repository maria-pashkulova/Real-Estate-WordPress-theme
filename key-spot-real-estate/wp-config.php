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
define( 'DB_NAME', 'real-estate' );

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
define( 'AUTH_KEY',         '_JT&32en8_<z&~N!PCt7l*Qp )pBZzP{AD!?YIGPbCQQX(v,Gq^7#!cx>u=6~g@x' );
define( 'SECURE_AUTH_KEY',  'q@5&]!@o[#|}NZc|cEXS/AA5;lM5]7@~3=a2Pcsd,*n_!gzsls_%YXdn~UPna1=<' );
define( 'LOGGED_IN_KEY',    '=>M-f64N=Xd22lpQw/MF43g2@w /L:7at}n:iS!h*c17=ecH{p7QmD2],fwB{#K2' );
define( 'NONCE_KEY',        '0s%Vv6d1!@*~c82,!EQbuva|)0ouZAFm!kwLrvwx)RXP=9:uebRj|Lckge0a8E5+' );
define( 'AUTH_SALT',        '9*4EmCaB+!h$]6tg;L;7q U+*i)2Hk<;Pr$o/-V6Ye7G(E^hIJ0q*(5=i4je$plz' );
define( 'SECURE_AUTH_SALT', ',{~5h$M*Rx%&6H=Psd$&f>M*Yky7cmsD01xdc[*DNaTIoVI*y&-+d&e70}KBC*iP' );
define( 'LOGGED_IN_SALT',   '>)LcJW+ B^G94l@3~UH^otq4/TU0d|g+_pWIuV%Wbcl;4?^+pOGG_4!+RanU!F{w' );
define( 'NONCE_SALT',       'FaTclvKW1~2!CokgO V++d#mVZ]6&PK)21{63GuphdHm=zJ%^E$a<8vn>=n < !-' );

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
