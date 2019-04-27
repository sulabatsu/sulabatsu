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
define( 'DB_NAME', 'sb_data' );

/** MySQL database username */
define( 'DB_USER', 'sb_usr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lu$hRiver28' );

/** MySQL hostname */
define( 'DB_HOST', 'bfkdbstore.cqtp4gu7hdgf.us-west-2.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'g)W(Y`-q:??y^F?gyB?&U4#4k<|(EPed0XBvy]&I,Z{@(Q[Rp|0X,Mx=ya)d?s$t' );
define( 'SECURE_AUTH_KEY',  'yLFs,@iSm-u1$xWEmB)^KCWL!q:G}7aF!LHtu%#>]Ep@uC~7{djc^t6F(nw:b}x0' );
define( 'LOGGED_IN_KEY',    'O;V7$/Ez`i0BSg1Nb%3R_(#1x)OeVhPT9hI=n=pd]_H;D6r1B`(@{6.XE5:Ks^:x' );
define( 'NONCE_KEY',        'G{,0}@h3sSAq<+O,P%<Z1+<hx@+S $tjlbS;^.n_-gXck`?u<De[L<t`!(/DEkl^' );
define( 'AUTH_SALT',        '>1-CM!,(yL!64#7RM`LN%osXTE030P/]@B_%Cy$L3#0pYF!c~/yMg?nc,Oc SVdB' );
define( 'SECURE_AUTH_SALT', 'R~A!hl_KdAtSQe(yGh]np::TjMBkhhK8 6Ltkn]c{ZDXzTX1T[$a0UImQI!5%!ZD' );
define( 'LOGGED_IN_SALT',   'LMv6Ub_(v,`8=i.Xu4&=Y]N%%RN}IAy6O+Kk=mrg<Gd88TV-NWrxy)?la@]9npXD' );
define( 'NONCE_SALT',       '?rBo:I9M!Bo4%s+(h;3KR/$DRZ=a}bm2T.uvB.f-tX^LL^2tAm[B|oc,1Yt]1VKq' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
