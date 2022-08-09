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
define( 'DB_NAME', 'wpelviajero' );

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
define( 'AUTH_KEY',         'M!>hV>6VAJ)>1wHB,X4q[%(n7x5ra-IaxCC:ukF,|0SgsQ/?mcPXPQ*!}hO3];!:' );
define( 'SECURE_AUTH_KEY',  '+(xCa&~+W)M: YQI&jKf`N?)D;/vr%wvs$N5(AWt4RRTR>%6J2^:|2!o#zzP 9SH' );
define( 'LOGGED_IN_KEY',    '7]8&5O ]iiX=c*b=PJ~bw=U/#=Em*Q{ 91Aq?E~Uh;BU!vzCY<0:vJXn2%X&~F)Y' );
define( 'NONCE_KEY',        'RHQe2rum/!/Y$YmS6s:$dreuKN9hr-r5nx#*v9 eyW?{rX{L0@2cRInsP?mmx{<[' );
define( 'AUTH_SALT',        '8Ogr$yUx-OQ<`JSw]=ltsVG9.01)Py,U0_K3`=fiG$S.|c05[&aT<&>j42(KIs%,' );
define( 'SECURE_AUTH_SALT', 'MNT4)*eJ$FZ]=)y+yq67p_!2]i89v? ^yKf12b8g2=<V1rG5aM8twUu)lypVOh6Y' );
define( 'LOGGED_IN_SALT',   'Q|Gr[aZ)s8f}2q?-MR--V{za=SHY|n2gn:_&V]y<CeF+E$aWxN5}uiHf%0Ecx)#r' );
define( 'NONCE_SALT',       '94YcB`bKnF_-=0Mm=y@hxwu-PmM1m,Y/U`h25L(9^f%YZ}BtaS;$Ib-)O~%}XfB;' );

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
