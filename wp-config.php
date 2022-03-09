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
define( 'DB_NAME', 'projeto-ga' );

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
define( 'AUTH_KEY',         '6l$|]L5.7+U-,5a)qn~xjy5g8#]w64r7D#]kb(+tTDW[L@}%3*3`w.5}==BbBgUP' );
define( 'SECURE_AUTH_KEY',  'W:Km[D|i>}7,:{(*LUpuJ((>pa?FH0vQdca##hqWzol?QhP96s*DOy|pz#Ghu}83' );
define( 'LOGGED_IN_KEY',    'lRySiGCX>{;(q/DGygd2m(g+X~^i8Toqb[D?J,9Rcg+S)7Ss]%mlGzhpW|5Zwjyx' );
define( 'NONCE_KEY',        'ZKx^8k3((uEBC*j{>JKf#qlTe)::;fZB{msRl<DMq,P/:@E@rRa~%25y,3=~xCN@' );
define( 'AUTH_SALT',        '7Rn+y*Vz$[7*O5v7+?@QMhpr472~z~couHQkuQkH`=CL})C%(Rx?X8yc0e~0?;Mf' );
define( 'SECURE_AUTH_SALT', 'UDJz$s75u|+=+7KY=MbD?~,e#%3eooUZ;z1?f3<W~6K15!$`Hd;~p!%cw*faK@$s' );
define( 'LOGGED_IN_SALT',   'Mm}O,ba7.64aB+!9[*fds;0}MIs_foth(n%2xMe3,[wu$OU<gz U2aUkCI]yX<x-' );
define( 'NONCE_SALT',       'vkHf]nP2Zz687b/NhnDD6wq:V_;7{wIO;6gmA.XhC`uXz.}`:Tr3C&K0_}zy|00H' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cev_';

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
