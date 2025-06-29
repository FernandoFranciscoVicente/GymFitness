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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         '8AX0_~9z`L2ohz%PGR-C*bQ`s$W(pSe7u}]/:D1mR=ce/vo~aEAqkM$_ZD1n+qZ4' );
define( 'SECURE_AUTH_KEY',  'o{vf). . tY<Z~QOPks&U0HP=KeRaM(*N6&N[v^Ok+U&=qrLz`FVLsPVwt#Lo.{t' );
define( 'LOGGED_IN_KEY',    'f?Vq%MG`(lL28o`a/h{?LB]a<0tB,d*u0A=5?u|Lg)A6>q0xV6a=Dc ~8z}6L##H' );
define( 'NONCE_KEY',        'A=vh9eYC/^a!nd,i[TT%.sU`X7{9.G|oA?^b&~43]Cw9i >OfTzyGZ~ <}~v_upQ' );
define( 'AUTH_SALT',        ' ;<jd%O2Nelfezx9^S9Q$*p;$7FCB3#piPLuI@L.t)=Y`S3u.L^E&DE[a*fr5?|;' );
define( 'SECURE_AUTH_SALT', 'Zg5JQ.LB3Zl6dE`rk<<9C)0F]$tR7|wmD?Rx|-T>UwPgR=%@AP(|A z#3!Agg>6^' );
define( 'LOGGED_IN_SALT',   '[RW>6yn.pG_9*k!5!)d0`.d#G4OM&XQt@sZQCCCY=&WH~Ue]$Vca7N/6*N67E5Kh' );
define( 'NONCE_SALT',       ';7tJ3AUh_4bSRh-1QCx`~BoK2fsu%xu}TVxQ6ZH<K;AJc:}@U3$S7fHWIqcR ]4%' );

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
