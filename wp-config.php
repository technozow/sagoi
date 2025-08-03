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
define( 'DB_NAME', 'sagoi' );

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
define( 'AUTH_KEY',         '{pFn7=$ucBlPS>;Z?UU-2/3[l:}8sxKySJd%WNj(M@WQdOx118v8ha<]<ll3FkuO' );
define( 'SECURE_AUTH_KEY',  '(aoKCPce#Ei=r:mM5oq%uYH@FXT6-bUcLy$b{mC7J[Y5^6?qvGNq5+grU@Y[AWcj' );
define( 'LOGGED_IN_KEY',    '$6[Uq0E<T g*18TDBLfa=Tj+oAN>}<blL-}7t.kcrF{G@2, eZE#%xyb5B,#Vo1S' );
define( 'NONCE_KEY',        'o_~Zqdj1GT-^%fW1@L]x>wJT`etat`E[/YzosLIGC/dr[p=/t=`M|7%1-@a%_.Sd' );
define( 'AUTH_SALT',        'H5|Y{`+Ar_CzoOG:3~Te2ex,Z=c,>sMH+dd^sw7BS3ROs+gv;.YP~y])Av@rjr;i' );
define( 'SECURE_AUTH_SALT', 'v1U(?|p%rc 4_.d@K}[FO4)!e)5.Sd5NXj^Xi[U9Yaa*VJX#AoY.*xmk933a&q`4' );
define( 'LOGGED_IN_SALT',   'WIB+=UFl5$/K#<.e+@$vld&0{xuI|@HOD1(9})b6IQ,cN?r&=Dbf6T XuaKuwn/M' );
define( 'NONCE_SALT',       '4`)edqmT1 :*OFOr?oKV4:0}g H{.b5:.U@i8Fd!}!Gk5UJEXV^6BRAALda4C_<(' );

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
