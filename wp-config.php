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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'worktest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wtM{h7Nw>-BE<kf0(]*n>9!(/l3u#@R$,FT;Fau]%QtA5e;^/3;+akYwNa<TPGEN' );
define( 'SECURE_AUTH_KEY',  'YHwUIM5is==#wu-yKuo*M*%){0BdW#,b`CEV-KYn28a`3Ot.1}oggbu${?hD5uw[' );
define( 'LOGGED_IN_KEY',    '(5QSAag)C48)[(H!fVYKR]bHUb3?EdAqn_nFV%E<}e-*bM`Lr>smG0uj],~)mcw;' );
define( 'NONCE_KEY',        '&wLUNk/>mkkkgqfPu[Qh]j(_~2dF|mg3_EVUWo}bwNMA;3|@[k#.Z%a]*@W}5$HE' );
define( 'AUTH_SALT',        'qsHJ#I*y6~u@7gT#PhemtPzHlK1y#vM53p.4Xqad]Fyfew==+$T#MMz2b|_1<?7P' );
define( 'SECURE_AUTH_SALT', '72]!)q%VPbW9x#R7pv10*C6ftFcYt2^koo|,{vx2)DYR}5./d^EfogqoO=5qOkWl' );
define( 'LOGGED_IN_SALT',   ',t=z`?h,d%,5NCx5Gc.T>{iZaBGaGSf#=t{cS=(+?}XtrO@3A4h.J.)p@b#JN[..' );
define( 'NONCE_SALT',       'n6%`HP6%RUXWP!+6@$:dhSWONg@QCK?x3iY^1G4]pr<v=VH,rjnFM3~2a?j)dm2v' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
