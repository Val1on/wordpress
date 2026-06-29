<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'IJfP|y>5KmQJfwYLrBQxVROYOLSsG+Ar{k)tb-6055FCcX.oW,]MXD4sqjXYc<78' );
define( 'SECURE_AUTH_KEY',  'z;Og~7mwc}HQ<C>;waxC><RHJkf?6c~<>eXZ5^HdlYg&YS.cKl^{q!I%/-M]s{@J' );
define( 'LOGGED_IN_KEY',    '|icM.$qLMv,90pahxC(0>rn!p`QGT8o;=D_iNfJR(H+9Z%{kC z<MHx$fO;>dd.Y' );
define( 'NONCE_KEY',        '.F<sbOC?|<ql%,T3M_>pW!^ekb~ vH*iCc]JJPR/M;!qI5_bmz/dhbCK|WGc8Zbq' );
define( 'AUTH_SALT',        ']zP=/LyE6ZJPY@!gK?ik T|suw-DTn338i;sGlLh|_+&(?7CKa4rs@]*^RC)tCu-' );
define( 'SECURE_AUTH_SALT', '8k$Gy>%7:&1jEF[x&Z,;XRN_1A@bNKt,E`NULcn>ooCL{Yl`-CgM;HcR%%&PRX-L' );
define( 'LOGGED_IN_SALT',   '?|3 W))}D;uV0zd$ p4Df<aE!xSGNF0Fbpwss.F]6$qz{;0S)PxxH2!7;2s@ZC/a' );
define( 'NONCE_SALT',       '5VhGplC);|3%I96=E-XOPD$+T[uIfrVhI[6=Sb{Jk,0^vb?8QwuK=*[4N_JHcd-Y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
