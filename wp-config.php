<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'zveHtF=le#@wwFv~YaqikN|!hA<SbBzU Pfg<y/!Q`K7>~dQ01[h49/Nz&)bMn+.' );
define( 'SECURE_AUTH_KEY',   'MJyuhhDTdD<}UU?;4[Zkr}_D1hBIsafTs;:rl*PzznCXzxuWLATHtBtfQ=eoo)&X' );
define( 'LOGGED_IN_KEY',     'S%0haC#2uIp:aO7.9,OP4[Fkrk.h3=QL&M;l-?CM#lRw)fkBhEKJyV+]salRIY}N' );
define( 'NONCE_KEY',         '~fQMI6^#RjH>mK]G12zNxN-K<)42S/@nO;<vaLAZJRa66Al%T;_lmlE,yVT(EdvP' );
define( 'AUTH_SALT',         '+PdhHXmN85oNn52j/2?8e{#e.&6G}m[zc*0$((nj#$A9WDY3wm+wxufliWBqiaU6' );
define( 'SECURE_AUTH_SALT',  ':jHZX)t_)aX88F*5eemA7eQ_DOin@(Zzq~_Y&#8=.,oqj:mf&7^!^J{V)UKjsorK' );
define( 'LOGGED_IN_SALT',    'udb`I0?IttDrb_BjQLII; j!8ggb1F7t5HFdZGht/f3Q9= Op[%79T2io7Q9Voad' );
define( 'NONCE_SALT',        'ajEbf*qenK J39NrK:,tOBY:l!=*sD@o1Aj(nO-Ee58H3sL8w46q{8NJ[C_UV1qb' );
define( 'WP_CACHE_KEY_SALT', '{`oO4-VY80c;Q@?.*-6xAp//H_JN-B/6]ugAsb?M(FObK(&<h~E3kG*vo?cFP[KD' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
