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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_gericht' );

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
define( 'AUTH_KEY',         'HeUlHX)jF@-i/v.U~Z~]+f+b-G6I7++?1;q-xk9v9u9AfiQYDX,.U0,F#$&X=8-`' );
define( 'SECURE_AUTH_KEY',  'yAd`2JsEkgvPzWgtMNUc#WzHbi>S!8/,}WiJE3*b9oT_-qyye:3z_<Nqm;O<7!,*' );
define( 'LOGGED_IN_KEY',    'wt0;PwCfzx={Sx,3;lT]7=k?mq.3u>:jDBPvX_OmS*?1$j?.G8!!kF~QS(^^LPz,' );
define( 'NONCE_KEY',        '6$=YQ]Y4-OYkew>[`Tl*_?a2i_55UM+`}*DJUy3|nV.5aHa-WckK^M0u~vETm3zY' );
define( 'AUTH_SALT',        '@[BA#Uo<:]0@FA(MUO/I~v*]~RboF]x8&d18N=i,@y|Em| ,~P*`qkc/&LlMcY;{' );
define( 'SECURE_AUTH_SALT', '1DjvdqN-yY&6)yH3$U7nYYh+kBNL]m~N5/%M|/lxI !izv:5ENEjwO1rK8bUu]T8' );
define( 'LOGGED_IN_SALT',   'aI-[+j,ejP#SHF=nxmCF]BeimY7/#ub!yG2~5fUBbs1?|T;Hq^J,WqzYz0htb.}U' );
define( 'NONCE_SALT',       '[,.~nH[imYoSZc5eT4*-dN4maP7p<.amxpqga#1#K&d57wl#:1GFv.Hs+RoQV24s' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
