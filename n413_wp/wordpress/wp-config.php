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
define( 'DB_NAME', 'n413_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '^5pQtZ]^LkY^N?Aj=atl@fV>eN@I6Az-jeXs>CnbtZ(h&reDGRzgtt}pS<{mG%wQ' );
define( 'SECURE_AUTH_KEY',  'Z/kb^b!Ikn(CiC:1<1%^p7ubhw-2^8m@/fcJv78.7S>.KuYA%Ylc*rfD^BfAp@`Q' );
define( 'LOGGED_IN_KEY',    'rH8Hm7*rtip_3t-s-^GMwFNSM8Nr;b;:>4e]D9dv31z0LW,{Ak?nWym&ey7p4K0C' );
define( 'NONCE_KEY',        'i)@*kNIum2uN`;a-p$RopZ&g5.3]DwSAAfGCNfuBE}w?:o9:H+#iQ(2N#]@=a2jk' );
define( 'AUTH_SALT',        '}6?Xz7U^93OM})9Cs3:p_l_h3&Jh[LBjPyU<h?ZhHe`eF%S*[(<PWWQjEUziMUcV' );
define( 'SECURE_AUTH_SALT', '*DTQ)FZKEZ3kKlSsd<.w}SyvMh#B+Ul}j`yTC`24~4^y[ Dy/kI0H65tmD15M/Az' );
define( 'LOGGED_IN_SALT',   'qo1^27g7)cQF{, x`XC)3d)#hlH6$-KhO|&Cqc{Pkuz+;|W6i;%EcHZV%^qe}_0x' );
define( 'NONCE_SALT',       'YEV^;1T==[g2rY+0o{YSdzsF4T(b6]$nKV9hh8staX~gr{i-e[`[p+G5Y>vBGhN[' );

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
