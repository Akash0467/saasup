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
define( 'DB_NAME', 'saasups' );

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
define( 'AUTH_KEY',         '51u|-x,Fa(<Z3?NVK<jCXNLU?!c_@47yLF1H|&1=a9J?^{k*7os&wU!Maqeq^scG' );
define( 'SECURE_AUTH_KEY',  '#T~2x.%7.-1}h|r91M 9T!C#_%m_y-BP.o{9*Og4TFx7WUMF|88vQ]~}@=w2Rj7X' );
define( 'LOGGED_IN_KEY',    'trwKF&b@dAOL*Z{})_=+;GA7m>~QNTdt;8`rtO*M=j:JBNklHL)}aKX|U?-pL$x1' );
define( 'NONCE_KEY',        'Bn@r@2]W<!XOCIdP![r3D.h[ o:{YzMUDj].G}^}#Ks0ux1Si#]RFAz<?xp7R1P}' );
define( 'AUTH_SALT',        '#&{4:)}+%P{Ls[8_G&C}kZnkuDSqFM]-<_?=mv493$=:FOG3PX*zjs]{^L01[w5P' );
define( 'SECURE_AUTH_SALT', 'x[|=/dew:-m$`mJ;;?y7]ZEnzJ$OqiT8u0gJ#zO+wquN0uMU`$srFK>HW`JD^/WE' );
define( 'LOGGED_IN_SALT',   '=H0~HaC#USI*&+/Y4[5{0kvm 8-}zeo 7vSTOG-m]sNb&=dvOj<EJ?-F,3e@]16_' );
define( 'NONCE_SALT',       '>A3Q!(q4w(UJa9m7Z_Fr-@L.9.Yc7_CkQS$25-~imGI>*^M XB) 83Bt$eohOda_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sp_';

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
