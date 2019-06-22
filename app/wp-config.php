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
define( 'DB_NAME', 'wp_burgershop' );

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
define( 'AUTH_KEY',         'ff=I^pCTpyuU:nl@i9(ho=L35([$w`LS{5 EO1_i_oy1saE,^j2Avvz|!C%~=H1#' );
define( 'SECURE_AUTH_KEY',  ':h,J.CP;NrOwnJyE($r92~0k$q-jG8hFK3$3!hh)?iN;U(HV]@uc4!jrd^A[4]!X' );
define( 'LOGGED_IN_KEY',    '9A2EFrJu1Cap:!yrz/zn=#wg[bF6wu}c~Q*]4,;AN8aX=GXQeCJj`+q13]M1$g1x' );
define( 'NONCE_KEY',        'FMX>T;G?tRTTJIIR5J81%8pr%h>k}EX*Wt$<[xbkt^XG.J S_2!P]ast^|7OebN+' );
define( 'AUTH_SALT',        '#m5_$q2K0vkM[qJ0*+NnlV`G0[4G?|?WMRC UnLtv;DRHN=xN{99PR_Tyu/e3Mb!' );
define( 'SECURE_AUTH_SALT', '0#=1aWe37l*K-1_PVI>j*K}4((58U6s~x,;y`sgkW@QVrLy a*v94h6,AhH`,Yj>' );
define( 'LOGGED_IN_SALT',   '/bMN}IlD`h3zmE5Tviy8<Hle=4#?E%Htl0p tb;4E{DsWsVGj4R{Q_]B~ 8,^4jE' );
define( 'NONCE_SALT',       '8,Q:zuM(tFmXJK@pLx^pE^d2Dy|oh{#zK%*giBAPlKwC1%X,*(ExZ9B<5RoT/zA6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'burg_';

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
