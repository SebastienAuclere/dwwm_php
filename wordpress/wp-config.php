<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'base_donnee_wp' );

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
define( 'AUTH_KEY',         'v?j&j:%)XJ#Z0mvYM`H2,/UH`O@2dQs5cb=A-7e-d5wW_wJ./GV6)qxbb!j!Ljt0' );
define( 'SECURE_AUTH_KEY',  'U?X<J6!(VlVl%]3F%VGKTW`[_s58|xX$tsGI%DSb]ZG+S8H#n~b[-R7B^AGOJEb.' );
define( 'LOGGED_IN_KEY',    'd)hT8q9e.;oRM#h02FlT>z1(g4v*u+|ZRhXP=C.[%:dgj/fyx1<Y:dR=&Q?EG0P+' );
define( 'NONCE_KEY',        'r>Ml1^CR4Ny4Kal)?FnwY_Glp>:5K;x:h}BRlufv<QZ7{BlDgx/9at9!aWP..dTN' );
define( 'AUTH_SALT',        'o#&)qfvT^0@6>[{og@ky;pMT]W4% QN@;[;OI91Idk4s@P7ZOy1JY %qN%;Sg{Tn' );
define( 'SECURE_AUTH_SALT', '}`cx|xvV(w3`SuA_QC;O~a@o,J99fsL9K-7z!gHd1s$gR|O;;r;FwywXuRI82;QI' );
define( 'LOGGED_IN_SALT',   '0]}oeLakpgb_v)lwb#U1nxtC[{co([aKe}k]~Xj/{7MCN1lu{8$]d.=M9f7,M)lL' );
define( 'NONCE_SALT',       '3siu*@(OJsm/S%t_@xCjz[11[laQF*?l22*Fp6OWo[Z!HUhxH?IvK-;@NnkpHbG^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
