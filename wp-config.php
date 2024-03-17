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
define( 'AUTH_KEY',         ':+10X^9W5qV9bSZc1k-xs{{=S|71)RHVEz|0(&?b~o8p@})j51`x-hkAyA]7D&:4' );
define( 'SECURE_AUTH_KEY',  '&;<YjdJit)f08sC$J$k]Y>2hi;2pY`*rU{:J-uohqIQM(c3QhZ/hA@[*bPMP:Gm&' );
define( 'LOGGED_IN_KEY',    '2 HSw15_6l05EMY,3tO_BDjh:TZ00vg(r0K!TL KwgyW%,U:tO_gSTX836yC% ~u' );
define( 'NONCE_KEY',        'KuSL19_[z5L2a*3=D6:Tl^)lg<}YK6FA#Ujm{}bI ,;e}~hP>{6fl{Lv#xM=*|#`' );
define( 'AUTH_SALT',        '*n:zYqHOZ5uF>2_~5`E7pDzpjM1S(xb^IwpaS8xH1AfKJO>uWaMmb8U#AXUW~Qii' );
define( 'SECURE_AUTH_SALT', 'UDo?UdKljlK|!iY~Lb8QFm4G*PcK!QvVkzQ$ZJaS_.2N<z)i_E:m@$<FZqszoy*w' );
define( 'LOGGED_IN_SALT',   'C3)S ]5VyC2J(.XxA6ABnXUm5[s)bg;ADo+g [Q3o osk(rx2Vs0yjHu#4-8}fG@' );
define( 'NONCE_SALT',       'rcv))/iTX1+SIy<[Q]d2rd}Npj(_|[Zn|<A+d/Q+IPd9Vvj4lhT-QT7.%B*IH,/[' );

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
