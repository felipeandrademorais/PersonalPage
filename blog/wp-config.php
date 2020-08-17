<?php
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
define( 'DB_NAME', 'u435078806_denuj' );

/** MySQL database username */
define( 'DB_USER', 'u435078806_gavyz' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mudaLaSaDe' );

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
define( 'AUTH_KEY',          '<E}JWw27 a),:au<[L9t+GKO%Y]~Pp(lLk$Zq= N0p`dm#Y/sSSp/~N;wW2Tv`x+' );
define( 'SECURE_AUTH_KEY',   '.+u~EN)SDGOS2fujSw_[W3%L%ab7XfBcdkU/-.r;Nu/$cJnsE&#0)1HfitXtD2^r' );
define( 'LOGGED_IN_KEY',     'q^$czZ):pRLY#0%XQth~Pb~I8oJPN8~g7K,+:`m(-Zd|-PeR+}o9IRnfHDHW!.s(' );
define( 'NONCE_KEY',         'WQkl+CkHW&!c=VAI8QC{#H-9fU].4@kXi4<!YD@y b<X+{$#B>VQNi5OX9Jz]$]v' );
define( 'AUTH_SALT',         'z0?{^W 5;&mLbO`ra5.cwM`2&0_&wJG1_ }r`IyA,H1^z58ey(?Cttv6~P`Nc!Hh' );
define( 'SECURE_AUTH_SALT',  'Lv|!{hiJZ_DLsGClo{zh9!KB JImtC;{6[1?Zul|zriN+lbPu.>R75pXOWGP =R%' );
define( 'LOGGED_IN_SALT',    '|daVBJiIBYtMz5)vwx#,eLGAxhn5&Y@]<7x<DiB,%.Di;mN1|{jPb,FaN7Ha|)Ll' );
define( 'NONCE_SALT',        '/9rnvHjyp/hnAmDhwdi~o<ZApr4QM/%mmF%RXtN!vdm=F/(N|1kR-WrA#b*AQ2wx' );
define( 'WP_CACHE_KEY_SALT', 'CDZza`[e[(?yQG16en ?1edBfn]cnrcG(,CM6-)t3a-&V&K $?z[/uJDO/fQ8tf}' );

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
