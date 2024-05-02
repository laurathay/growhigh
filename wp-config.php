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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'growhigh' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'W}HKn^S=%6QepOReQ)-6r]u022MG^{8cpaQ&2M$uH*XX+hAgfWZ7y8+(qL|9nj>%' );
define( 'SECURE_AUTH_KEY',  '& {Bm<+o @_OX(1x85@D!o@_/nf{*@T$.__Mx-MDTrP.M@QQ-)Q*eRl]W&%xsa.p' );
define( 'LOGGED_IN_KEY',    'g;Ms!>U$.-h:`k5PV&lLMa-d[D}zOZDdcazlTT%IDJd)Nvp|#.G6q=6dDMP-?`;~' );
define( 'NONCE_KEY',        '6J @#A]WaMOJe99wpPX3.u/i(Wbo@8D^7QoyS( UEdTx|)_{_/S!3nI+&-9dI,b0' );
define( 'AUTH_SALT',        'dcrr|xSl,W*vy%BmS4?#+_a.bQ*BEw;TvNAhv388IMz#q-y@/,pQc%!PwdA0[0$:' );
define( 'SECURE_AUTH_SALT', '*3ij/T6X>(@,[j<zu>e-:Ziqc~jS2!Sv3SD~3lkYN?ORIXZ=d$0fQ1f^rn(AWbYb' );
define( 'LOGGED_IN_SALT',   '8^x<DVFVfps,Z3kUGZ<?1JPo0|E!xmj07k2it=r3ItPCG//&HW(2n*/V>XUH+]^H' );
define( 'NONCE_SALT',       'A5P(=Z~8!|BVVO^GQtvf97U^b>[96#5Asl1#BCLx{J&+F_2}EC{YqeM@ic+d8mm6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gh_';

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
