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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '2ZZ:PJm3*Yo${T:J|>=AK.gFAreAv6.M,js~)m7)3_&nP,L`s2z!M|VV#xS?F8vV' );
define( 'SECURE_AUTH_KEY',   ':63kygw|413HgVT_LCHwcFYg0{>.$[IU}]iSw>z%#goc(4Q;tbUwjPS-:z^y0{Py' );
define( 'LOGGED_IN_KEY',     'celu~]`jfZ+4UL7@M*$}cP5Q:t7;MQ7=&WWh` H{~J5$KZ13w!;kd_,9,DrL:*3b' );
define( 'NONCE_KEY',         '@be)k:6Twb?/t7B-z%$},)oE_tsh=Zr]<iP@x,0[O*Iou:+e1}N2n7Xgo|hp|6(#' );
define( 'AUTH_SALT',         'p|7=TI]bmKV8Rh7}!.n2^+Pv<oGM~H,SaMG1Do4L(O,k``l}a%yF%Pf^+:N1J226' );
define( 'SECURE_AUTH_SALT',  'AK*JeJmxL)(f#F>m#-5r!9{{7 $*QPT(@7}2~@}H*3e:8-7B!biFE[uPzLly50?:' );
define( 'LOGGED_IN_SALT',    ':`~SH(_|g=HYnh2E2mbR5b1:so;B,w2]{:NO+I >yn4uIRvPmD#.we^?H5xN`2TC' );
define( 'NONCE_SALT',        'L.<^4,|y(^+OTc/NC5>[Ee^u,u+]T+OLF[.zHKw70OBSF8wSl<RzrwC&7x+:h<Xx' );
define( 'WP_CACHE_KEY_SALT', 'R8Ym]k*WYa3jYKIoSQ&nVF/+Q*5:gQrmKP!i65Ka:dan=_FnKLKrf6w1g~KlSM.<' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
