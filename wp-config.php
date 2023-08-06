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
define( 'DB_NAME', 'agencywebsite' );

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
define( 'AUTH_KEY',         'meXHeF#PUK`bp/ZDQ|Ytvp pjSa[Y.lv=>G~vYnxCV{TKxr4A?;=_=ZuCYs~48Go' );
define( 'SECURE_AUTH_KEY',  'X<gKpH1}SYI%F^Q`#N?>;oa`+yK55<6[fxgAO#]J=#z`ZF8*Azxp|RR]Qr#gBi.8' );
define( 'LOGGED_IN_KEY',    'Do#VZHY^:%Ma1a9M5eJbbt$v4hIO>na$4IH]56W$&3S(C?ookSS)>ciHb|z/:d}G' );
define( 'NONCE_KEY',        ')HoP=B`KFebbxTz)dGiTxT~4YQk+hM;U=8+$,%,oWmpf&eHE <?;&M^J9`v{fOde' );
define( 'AUTH_SALT',        ';=&rb$^785!<Izd1)OgY#8;#n*T`+o=b?LM17x.WHlS=X?%3^LkF2rf3kyBB~ill' );
define( 'SECURE_AUTH_SALT', '0kg]Xo?Grnr5<5iY8R@F%g2GyXy305QSQb.R5R6gXH~Emr/S}X@o>A6WQ|DA&OH{' );
define( 'LOGGED_IN_SALT',   'qdr(=}3XnQD#ERy2&bjk3|7SrijkibHR#~k/m_4RU2BaHHkNqbk:uOe0m>ZfS$%Q' );
define( 'NONCE_SALT',       '!9Yc) gF(%`>Oa&HmfP[jaDJ?,!?=UqDu>V2C;z$qSoogpJLtubnS!-[&7GJW#O7' );

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
