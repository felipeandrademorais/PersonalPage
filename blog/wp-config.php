<?php
define( 'WP_CACHE', true );
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u932578620_i6gPE' );

/** MySQL database username */
define( 'DB_USER', 'u932578620_Hx6eY' );

/** MySQL database password */
define( 'DB_PASSWORD', 'u1eeTzXurH' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '*K*b>&PqS.*GG;1Jy4rC<5;c.y~9&Hu@2uHV<dLI3};S[gyU! b3c;|pm$Xq.)r8' );
define( 'SECURE_AUTH_KEY',   ')Q].BGL36&gaKGUqONrs*$Q1|G2./o2qQ)bM6X#~%#}CT6RH@33V~O+Ebwb,ziEj' );
define( 'LOGGED_IN_KEY',     'ihW^avgl)dZ@hGSdFrnP2_I5lxa*|mF7sE8mc4z]N1Q2qQFI%j)4Yn0Fj#<mddO+' );
define( 'NONCE_KEY',         '1mP`diKQ.eu>A6/]TKFY,Q}+tYMPS7%XT@C7MjNXQ5HDD}oq]^<m]5Mw$]#gi4!}' );
define( 'AUTH_SALT',         'wTLpHhg84~3PiUG<nJ<u<q9<lm6or7EwzRM5bWtL%xM#]uq|!U1^zz@A<O{Bw<%y' );
define( 'SECURE_AUTH_SALT',  '<6Lz0#&QS5gn4s6&,w~Nlc]`@o E7$ri`}qNaWbnI^L&-o.p&$3mp~]uOj`5G_j&' );
define( 'LOGGED_IN_SALT',    'LediCW^Mut:G/sU^}KT;<}yr|QdTvKbgT7 R*Qr~T0Z7&sg#Dr{j~KaH*gn ib.]' );
define( 'NONCE_SALT',        '_9N%7N|97!oChH`/M~,cbPPjX,pTA,yGNaaQKpd`/)RL84)2[S~^NtiV!R#kjwqR' );
define( 'WP_CACHE_KEY_SALT', 'm_>5v{J7yz O0IUIUA7zB8Ic:{i$ak~PO{G4uBn3f`:-To9aW1i e=)L#/20Gm(x' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
