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
define( 'DB_NAME', 'afs' );

/** Database username */
define( 'DB_USER', 'phpmyadmin' );

/** Database password */
define( 'DB_PASSWORD', 'Rdi@1234' );

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
define( 'AUTH_KEY',         '5Ds$lrx7`/hU9D,h1D9QV@;W=WlxneS|q?b&=Sba3y:<V`gy=eYSSV>q)W tZJjU' );
define( 'SECURE_AUTH_KEY',  '~=YO)5mX ]^!Q^=%mfi,7 N1KMZ.OP]k;RO;fF/r$aBZC*Xq]]w`-)pI+n<C+AX/' );
define( 'LOGGED_IN_KEY',    '.y>Ls0|3IV~%r+:2zF-PQ2Y`dgMGr6(I-$X^]JDQg`|6(n C_)=g~naJzRcHE{g?' );
define( 'NONCE_KEY',        'NZzcO3}^qChrg40UIfD@R$HNla)5Ldn2i5&7LuZ,OZz1SQ&unJTu3n7{CqJpwg/+' );
define( 'AUTH_SALT',        'N~SJH~)fj[LC{Mf$*0n:0Z)pDDQ2VOYQK}C;< R0)+hj8W[f1~L+sXTZ_-Ae~5U@' );
define( 'SECURE_AUTH_SALT', 'H0PK{UFo-C:+HKOp=PB>r*6}2A2n|(%Ay^^oWXSpB;2kZ_if}y2xY(M7:H-d+}yN' );
define( 'LOGGED_IN_SALT',   '03Gmp^n*L^zxrl;;TR/E/WCC.-Y3YKDM_$E.ziX4@sUDD1Z+bUZS2xJkI2G@#$nR' );
define( 'NONCE_SALT',       'J~rC~&tKjQ4_dJ:d0{I2b;V`VQOR;K`HU$(g?J46-V@K68M1;Z/HPati!L2NV`JA' );

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
