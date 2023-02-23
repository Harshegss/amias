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
define( 'DB_NAME', 'amias' );

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
define( 'AUTH_KEY',         '<Xtfu;Pg6Q(ZlM;~&C-eGZ5CxBS^o xE&6nuimaVbqq/p[xihiJ]:Kt K,.) oFi' );
define( 'SECURE_AUTH_KEY',  'xrE-<Q:p%j4uqHXru>2pfBYV^L2|cYAz{r!fx8~]7;u;u~TteU9FaLl^-{D{N0Y<' );
define( 'LOGGED_IN_KEY',    '&hoJH~G@1:O*NWF0yPZ qJ^!T4$Xi:2Z3k`A9$/zUw9!L6~}<GBH=1d^&-^s]1^s' );
define( 'NONCE_KEY',        'R{4Nyw:xJM4y|DVj*G3M,dq3Ch!F~Fx/eFhytFL/.rWf;=vl-auwQ.{BE;x3|T-,' );
define( 'AUTH_SALT',        'f|t/*<GvrHF(L;Uo[pp^dnW.b|=  Xb&_ISnsIPc fF-bH@CCuJD(`/nsKJXc9#I' );
define( 'SECURE_AUTH_SALT', 'hrfSB#YbLm3X4nHW,@0;#4EO{5KMd=9ypxubWPxP5+G:BtkQ:g~n}A{){rnOd1ZD' );
define( 'LOGGED_IN_SALT',   '}!DGU2;<w|A0SzI{si+vTh|*:?l[J,RMQ3XdN8JASFc1x>/xDO4A5z(KYb+Gi+^y' );
define( 'NONCE_SALT',       'U_.{~%i]fK/C Gal!,3o5s%s=_2{T=P$9#ERrc(M}U9~J@aUjg^ ,wH~Lte@Orn,' );

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
