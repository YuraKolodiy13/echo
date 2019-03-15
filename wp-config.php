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
define( 'DB_NAME', 'echo' );

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

define( 'FS_METHOD', 'direct' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-_7A!H1Ry]t*{*;B|a2O4;<xTy$p[,[CgG{*]+B>^i;Sm ?+oVQ2n*k4q)Kh1vJ ' );
define( 'SECURE_AUTH_KEY',  '3HQIT#^ IWj~_Hl%6BkZ+h3Er WWx)L6xS^7^pW}FW.`Fl9uFlZ{Us}1HP(0V#7d' );
define( 'LOGGED_IN_KEY',    'mCH?n2z,->?Ec4g:38t4_bzShyUxYv]yjaoHxVc?Yfx/UMkz))t)8}~d|guW0EF=' );
define( 'NONCE_KEY',        'd;fow0{8xI8ze=,EI4f6l2,_( 8a5YC@MQr-qC(NjhNH^yUBpuk00qE}o,t6 Y-E' );
define( 'AUTH_SALT',        '=?O4A_Zxi}C DQ-:)U!F&W[6CHVtQq/{2Ym]Cf%2j+Iv:a5D=4D:|#R#-hClMN]}' );
define( 'SECURE_AUTH_SALT', 'ZA[0E;|MK}&O2YjnmWBvlO0H0Q.>o<wjhCrE(cOw=..|*+z,eTSM^YE0APdsO$Qd' );
define( 'LOGGED_IN_SALT',   '4D8C<X#Jr(WNqn/A+U)t48>$s%62~!R=wlZ3vM<k[ScJftO?c8O}V|QDRfRpSkaI' );
define( 'NONCE_SALT',       'xuZR,j9WV$zGC{0l]-4o-cNGV|dEVy09e7JV=AwrN2B%<5:0Q/qJUo!q&u>2xx>=' );

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
