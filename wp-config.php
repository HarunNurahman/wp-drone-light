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
define( 'DB_NAME', 'dronelight_db' );

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
define( 'AUTH_KEY',         '4z(S{jx ~@_yo@+Wp94.r.!J388lv!%[2iy|sTQjtBx>-1rGDaCSS%ur4AF,aJ#q' );
define( 'SECURE_AUTH_KEY',  'Zl1xA[757d~6^sh;IdHT2*E^d6)ng5P9GulV>ZGGdf,1U|I_ 1%qu1V~9O]( ihY' );
define( 'LOGGED_IN_KEY',    'PA|-Hm$Q7d}G.{ vM9}OmN80I5|dC$OH^RO36vh{vj&Cf]X&e7Q_=SQf]6gP<kXJ' );
define( 'NONCE_KEY',        'Sd@9IT.`4^]nTRT3+zJ.+tB$[j!{_L A^{IcVH/=,5CjX^Qh0!zc;h9CfTT_:5]+' );
define( 'AUTH_SALT',        'wn1<li>/njs`$z!_T|/~1p&c)8+=Wdos}X|I`,WJA2Jn=R4i`T<sM-K@Cs~#-qf:' );
define( 'SECURE_AUTH_SALT', 'L>!Kfai&qeJ[@A;9[dKyu8OK+GY;wS2QqDRJkIpII-!|%k1a}/f`;FA1){wKL[O2' );
define( 'LOGGED_IN_SALT',   'A;ThKjkC1=7j?}ehUC{kuyJ2gbxa2w_d1o#zPS|a2@iB84{ze-ymkfN_n%$}w^D0' );
define( 'NONCE_SALT',       'q(Q>*]4)9,&%o-c^hj*gnz%LGIfX3`o_euCU1EbAEIJdVBVWDv3iafRsO;sqYQW9' );

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
