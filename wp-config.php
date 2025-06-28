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
define( 'DB_NAME', 'rodrisauto' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9K3V:~kVhz)]?b6*]$jV@Y@J>myo3)+6*.C&>D}`ZPD)Zsl/k!1U[xn,CeZ&^^>d' );
define( 'SECURE_AUTH_KEY',  'vMjs_`du.$8Bu2+JaCk4hCjB1m3(gzE>xw4{nI}@;MWUO6T(A3WVF.zAb7ApANcU' );
define( 'LOGGED_IN_KEY',    '1W6W-u`?ei}?8WzW@f^,~{ARQ}L(b9P//t%f;(h-!%Ce*ZXZeK(s[Cs*CP(F}%6F' );
define( 'NONCE_KEY',        ' _Cb&+WoIvQ/FeKC4WB`M&97({=gPd;Rh{e=O_jNa/{h9e.Tx N4z/BohW;`{@{}' );
define( 'AUTH_SALT',        'U`(4%F9DQNaeYhnHm)*S)K!)(<u+lw>VUCel>ftvi~M5%qd=_{dN+cNdP9VC4bT)' );
define( 'SECURE_AUTH_SALT', 'P0vb%:~!K3~m0$%L;W1D}C10[pfA}eG;vdywSedN!|8=sYQk&KdDUQg.d@KvS}@P' );
define( 'LOGGED_IN_SALT',   'zW*0^Vbz)PY>DHL?KJIlzfF[we!sT-.FNdZmTD7<LRI0Rw4Rm(>`9]$ $)^:aRQw' );
define( 'NONCE_SALT',       '(^:Z1r+8Ba tLS`RJOzi.Jy,(>Xb=Ai:=tF&9kXMXI%T lYZ[~/oe$&U_b,{NML{' );

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
