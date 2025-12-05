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

/** Database hostname — use Local app TCP host:port to connect reliably */
define( 'DB_HOST', '127.0.0.1:10007' );

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
define( 'AUTH_KEY',          ' icj%1.<q?Q*s!ujuvv~]rtm4r@e2L<j57!F/F!rdJ=>^ef#FO%L-$5j$:(JB49r' );
define( 'SECURE_AUTH_KEY',   '6w0YBW~hU!O-J*$J<`6Vc`i?GOz.0WPf#DSI!kJFRNquGP^`}8|+t;290f126]:n' );
define( 'LOGGED_IN_KEY',     ':gHUgp]9fEn1ag},p9:Y $y~4NcxL/uRa8CzqwVu4%/0e#Cl8iBxPv]zPd-@blQf' );
define( 'NONCE_KEY',         'cd3aO@{b Hb*]mb:bGv]]Ei}8U8<x%HZ8]p=knV(7:f7;|9OakQ_mNi!B1aLk[5d' );
define( 'AUTH_SALT',         'Pn]z#ZT^&%6nIGJ#U>>JP-8KLnQ%s{ kD/0IQiRcc(fL}m0?iua:IgbukAE|Z~(8' );
define( 'SECURE_AUTH_SALT',  '8b{{{23DYH}YB*Atj>)u+9gGmJ2iy~@,S-7fwrg%sYg4%W|t[PoM_f0)jX1^l+!O' );
define( 'LOGGED_IN_SALT',    '$oM787tztG_v3]cnbkqoDwkr.c$.l#ZtA=:jl7$8}PuI>L#2l_*=dp/aY}xc5K}a' );
define( 'NONCE_SALT',        'JE*3>uReUGef]>ydOcuKPA@6K(*KC90m1rGoxa7]jT5}w&0QJ,H@f&MGnkF.y,/x' );
define( 'WP_CACHE_KEY_SALT', '~nMKYL)J*aLlu%3as~Ts1aXF}Tbi=)L7r?PGiR)//|Q`{I>m)sHa=s^.0^<#]GGr' );


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

if ( ! defined( 'WP_DEBUG_LOG' ) ) {
	define( 'WP_DEBUG_LOG', false );
}

if ( ! defined( 'WP_DEBUG_DISPLAY' ) ) {
	define( 'WP_DEBUG_DISPLAY', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
