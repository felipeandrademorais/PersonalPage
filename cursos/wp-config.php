<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'u435078806_6T0rb' );

/** MySQL database username */
define( 'DB_USER', 'u435078806_RGsaK' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zQK60PXqJH' );

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
define( 'AUTH_KEY',          '](l>[mgTS!4Q*hE=+F}jev}vWwrvj5Pre=`fu[_05$A6H,ey~1mn@l,C3B<7vZA?' );
define( 'SECURE_AUTH_KEY',   '4I;jba!#|5t~Y~qW3wRT8#Guz{Q9B*nro3BW!|GUO4KG;X-2_tB!t;y4fs*RwUsJ' );
define( 'LOGGED_IN_KEY',     'N8?S<c!]ni^cC&S>7wjT,IM;z10p3`H3(Kz.y5v]im7tHU2R?iBnA|^|X;*-eo<g' );
define( 'NONCE_KEY',         'HHjTP7_8>?bSe}5%M}32F+3l2!KS6[&,11].&gjHkLN#3#5!:N~5yl45Eyg*SHT>' );
define( 'AUTH_SALT',         '9N}9%E}I6g%vUE7cGff)EzL(^FBjPT<(vT;PGA,g>+3{Ron=Z12&Lyt|!,SAUnqX' );
define( 'SECURE_AUTH_SALT',  'ra2Do&BOX4Yo~Y*m0%te_fxMm]W3b.eZzI)*#9y%Z][W_[GPH(NefogMwB%3eg}b' );
define( 'LOGGED_IN_SALT',    '(FsOY+!)q|%~#L W:<ZG-+2,WFCS=@WQfd_r?5sFArp6r)bj?x*!q|f$W,N%W0$W' );
define( 'NONCE_SALT',        'Z1a*wuGUT,1#:GFv(lb,j&gvA,S>+w*PBf-<(|Ri}%.pq1+]x%*^k6v:{oohRi_{' );
define( 'WP_CACHE_KEY_SALT', 'jw&~5Pr_#iU2#%#rAi=ttia@8yj!L*2w6i?5tUFV7Tf-NX#gGTveTB=0rQbm1Y)5' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
