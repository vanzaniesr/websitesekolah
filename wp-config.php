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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'O|B;_X6Z,Qpy8DE}jEo|:t`1eFKQO.oUl0D:[$0`MD+ -f:b`jU%R`TKJ&81GS4P' );
define( 'SECURE_AUTH_KEY',  '?AX*2PVk*FV5Y$jg,pe<hJo|4g!Xk7:s:{Wc0Cts{8,wF_OCJUXD*(#&W]AJKZo;' );
define( 'LOGGED_IN_KEY',    'Z44.Of{?i(UUm**Ikg{5 =)#b$)+S?{~uh5kR-vya}vv].$ca{eu<i~U!SR*str>' );
define( 'NONCE_KEY',        '+?stY*{0ACgbmYi12^2B;7s}KFi)|=5:/;%w[H?Pb74[v,A;um((pQn,[GshP{uF' );
define( 'AUTH_SALT',        '5TbYZ*6P,VZ:6_p$L`RBgbOm4FJ3~y2x4PQ?%@N!A~5MD:`v~Mqr$V2{_x1=)k-K' );
define( 'SECURE_AUTH_SALT', 'bE)YqFK*Gcq>VGq^__2(8RaHl.=a;`U<C[A0pZY~2m:uxM5;#-B8;PXTMQe|M58I' );
define( 'LOGGED_IN_SALT',   'p^wQj`-7ZneIBg&0NyIPs(`D&oFImeN/5c&,7sSc~!2)t;<s6~u3:p=SF{B[%Z*%' );
define( 'NONCE_SALT',       '[n?A~$hPBjXoj~W=$>6A6EjQ):588oEAY8<NO>Mb)ObbQ^yl@smaEH1(dHz~SVQ3' );

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
