<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'otopoint_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'B{W@W{GVB!d*wO&Pb)1,KX>xyu{NGa~3DG;~*KcmlYFkH2zk 3Dp7>K/toCZpF3>' );
define( 'SECURE_AUTH_KEY',  ' 4W%)@F[+$3wBy0MUy_;=|sL9:K~t#9P|r|M[CzyxXL huZQsti}wJ[_!NsOIb[1' );
define( 'LOGGED_IN_KEY',    'I1-?l<p]|5({d3t=_JQrEu[>mvQY&f TV!4{)HxJL!P,}:i2cO7i[1m5RR6y?,:l' );
define( 'NONCE_KEY',        'tu_p/-GyX>`6wXMM`O9?xu&~VG7Yt#+@R<fK`;>[lb`v;Ve>[iN]LhGyXTI%o1$%' );
define( 'AUTH_SALT',        '^1$.K$c/Q;E^/gNq0)CPC-hzJ8!RiT;DJ=OE>F.PE]C^K}ml*Q@[[usx)i)-x&X,' );
define( 'SECURE_AUTH_SALT', '0BMHQ*Lc F{J&=P`dj[l2[u:sTq:%N#$Vy^W7hINKzqqKEd=blX9Kbo*n1M{2fVC' );
define( 'LOGGED_IN_SALT',   '=?_GV*3 U< Vsyuh^%uR&IG$0=8?>E2/Z~OS(&<%KY^fLzzde|WajC+XjKK$*(1_' );
define( 'NONCE_SALT',       '*8>llc4nnoq3G7;x&:l50Ybgt&>7D^*J%3z9*kT:8E_gMdKU_X~HW%blt}qGt2s6' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
