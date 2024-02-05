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
define( 'DB_NAME', 'petgifts' );

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
define( 'AUTH_KEY',         'u7%a%$:b/_{5oG3NT;vERr/T3b:_6}iw=UPv$KA^Pry_|o_NPy*&]5oAi56. c;`' );
define( 'SECURE_AUTH_KEY',  '$8%x,$u*)_%0F}N^6e)!#a8Z3+e@n`y0jV_D)ZdLPC-C7Wg,m.{u2I}/D[yI@}3q' );
define( 'LOGGED_IN_KEY',    'JBr%gPEYeX~wmvRN`;-&G$}~C5|4G.C-TK!E6RYvHS;Wmgu/+%);ylK`UXwmEiN|' );
define( 'NONCE_KEY',        'GF34RA#;dQhZZ~T (=p@K8L.Zi;Pkh{k<7;V02Cq&A?s.z_)p1M4o:J<?G_2Ex@J' );
define( 'AUTH_SALT',        '^Nibk$M:&FDW8XSU`d:6Pg:w{)s )$+x0,z(CdzmBc63Ii!hz H==b<nc>K/]0u{' );
define( 'SECURE_AUTH_SALT', 'gt+R9kFWu`(K_N1@0UR6%Ir<g&V*.J{LpN7^WTf<4}8EWPg6M:?)cTu O<0El)?;' );
define( 'LOGGED_IN_SALT',   'LdEG7i4%p`pVtfeDz@s&>yP:M0#xKa u_CtX3guL iYAt|lh/zV,5q<M~:$^^w]}' );
define( 'NONCE_SALT',       'zz?tGm+x/-n%k[R-UrxD*(p%~i`%+>s>[D ]KO!SZiK!V6S%6@8FGYte;!wU;toh' );

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
