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
/*define( 'DB_NAME', 'db_peruh' );*/
define( 'DB_NAME', 'w272371_db-webph' );

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
define( 'AUTH_KEY',         'dh;CfzCaf,Zw_-2gh/:H`rR.jp$,OYe.^P3Zt+2_f8%AYXO&n}{{RC1Atl%uMp>N' );
define( 'SECURE_AUTH_KEY',  '%*eHKN~x&(Kox{o,jMfVNb7(ln]9GH>/:rf@kN=bb{9<y7@*}$(LUPa(3?3uau0W' );
define( 'LOGGED_IN_KEY',    'P(sWEHq`e{T.M{uSyC0+(PXh!,]kf@k)Wvr@=[G|^.0I%>/*w.>Tt#Mcn{~$v~Nx' );
define( 'NONCE_KEY',        'p:1m2^Csal+g]u+r;6Ouz=r#Qic[aRbY(~?j[7=I&nY .*6(.iY In;66ZJUXLvj' );
define( 'AUTH_SALT',        'k3:L@AsBv6=quWN`e`7d&wB;*i<zV>+Mp(T=u:*.d(|,b65A(A,^RC(`I?GGXrMb' );
define( 'SECURE_AUTH_SALT', ':wII9!kwAkI(u3:KyM:M{YAK`Y&u?2r>Jz-Nvs[v,Om6c=n},ewUy(?{B8VTwqp5' );
define( 'LOGGED_IN_SALT',   'Z6`F%AZ9ix!HU*L)2L9l0E~{`~Hud?e*$A<f50IL+zMPq[z/B$~;H*x~fyHH,Tpe' );
define( 'NONCE_SALT',       '(Ld&Az^pi_gZh$cyt;KnHnNClqxsSS9_OsDBm1lx?M,3,/(WA2epncCBJ$LX~J;(' );

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
