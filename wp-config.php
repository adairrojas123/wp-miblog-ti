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
define( 'DB_NAME', 'wp-miblog-ti' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '27f3953d92ee388d16c6cf9c22b9cab476e86cc3ab398f06' );

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
define( 'AUTH_KEY',         'I[(DAOav7oDg~$BUL{T+q4UE`zF-,jS]`K/M$X];_X|v4^-iux6.Q}L3]LANv= x' );
define( 'SECURE_AUTH_KEY',  'ot{n^^b?%=1!^~_Q+.or6=Vo9LS@BMAI^_pBwjECW-?|h>~Jbvfuj5O2/;DgjE^(' );
define( 'LOGGED_IN_KEY',    'Mz[W<rc>{@dSG7-&*@M`M@Gy]II{9z33|sp}n634@}{5`;uvWJoRPxT6Nzoj0-,q' );
define( 'NONCE_KEY',        'bMePolzg rr==PcE,9/(#m9?ao~y@/ka@^NLBS!}Zrq[TPF;Zbz iGyZcJ>`?kdH' );
define( 'AUTH_SALT',        ')jmRvUQn/:r~MQrdo]yE@Bo)OHx1]jk=JfHz*(PRC5Q#[nmDY8~{,w!47]S]3hnC' );
define( 'SECURE_AUTH_SALT', '>/!RI(a5>FXwP03?v}!~Fpx:t;dYPHcmj]Fno7lo{:*Y%+pdh!Z|o%3.p$0c7aBF' );
define( 'LOGGED_IN_SALT',   '1!TY<mCsxuI[dCr`aWjPo]dU: bM`R:*$| 2MU4vI*sn1WF$:PM4r]r<!8{8<n+4' );
define( 'NONCE_SALT',       'YziP3G]>-h|=(e.|I4^-V%L$ji;C,o[;3!bc%euK#@8:~mSlcIr=p!ixR(fRa-bA' );

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
