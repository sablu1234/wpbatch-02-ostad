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
define( 'DB_NAME', 'wpbatch-02-ostad' );

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
define( 'AUTH_KEY',         'Y4Decs%[8*yH:Pw]KGVM+X-$$;MK]rHB|TxY,eS#Qe~hd%81|9!8^mO!VZPVF<]&' );
define( 'SECURE_AUTH_KEY',  ';0sKzwZlKVqhch]v65Il,!;crbKE}}wU9w.tYt<3;/i9[+L6V`hLP]66#(?YrYf*' );
define( 'LOGGED_IN_KEY',    'h^7AUk941r!<Lura{T[~^;#5`~wn<2UpPgua)FBzXhZ1kD)_F)~d[wY!8ESWQBo?' );
define( 'NONCE_KEY',        '7GWm`H5]  ??U^v=asf,4h[K^;W@[Lg_A6|+R2EkRF(vy.ORJ@?)ZBj5p}X%8o$2' );
define( 'AUTH_SALT',        'f*~</1[7E!S~gb-Z$Qs@B:GN^f1#~R`oKvA5S6fgLd(]hWMMBB(4sAaaTUk>TA*u' );
define( 'SECURE_AUTH_SALT', 'z5x,Gp8S=0}}fgMM,V5tz3:5@s*l%24^H{@Ji4osSe 0#r%a?#P`hmaz#; =]LQk' );
define( 'LOGGED_IN_SALT',   '|9-,br!Li(~uq~l+L)>Z.rZ,W7ipN7*&K7 EgKUZ}(Q=pVeaA;UB.K9G@q-]iLZI' );
define( 'NONCE_SALT',       'a@hqk!GD**k3{:)OvfOVKx(mL>L?yq< wf1[K>@~H{!8:yUJ:jHyaape(F- G3^f' );

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
