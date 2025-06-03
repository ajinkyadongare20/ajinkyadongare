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
define( 'DB_NAME', 'ajinkyadongare' );

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
define( 'AUTH_KEY',         'mB{YPKv0lN)9}97&1M|]&<c_Hz~w?1U|:76+x9jr2mMbJhR(pS5l^l}Cm.9R.;K4' );
define( 'SECURE_AUTH_KEY',  '))4Nz@!6ScYVYW>?Y>&j6jE{@|Za9O:`:!7*8?.DlTJ*:BL]l*(0F%dS37y5Lfbk' );
define( 'LOGGED_IN_KEY',    'VAW6P_k1&f`70.gNs9pVnD3am<puw+j-}{2d}ODT$2.=VIo )jm85TAWt@v3lQub' );
define( 'NONCE_KEY',        '/cQio*lS+AjwNgWYfcHg$0r=f&ZWjej#w)>t:CFC:?qR`NS&ZGU6^oDu8ElP}oCZ' );
define( 'AUTH_SALT',        '/Q_f@o9SZ1ug/qZ,nnY#|Z.Pm=H:Hv`[Gqb&TU/ZXf9Jo1!(TJ)PnoP0Nl9rHd72' );
define( 'SECURE_AUTH_SALT', ';E?E_{wl]>Y?T(FsE`D8*(?A=J,^lY^cVBO.qIrgOK`hZ`K>5[qcVUhUv{n)8zvg' );
define( 'LOGGED_IN_SALT',   ']vxk}+R5o=faSX47DTneT)g(D+Mf$aQ&sFlL)ik#;&?pmK&t+e:}Qd7WjU TrI43' );
define( 'NONCE_SALT',       'W`2=33Am=t!1A=KZvjOmXrD=S;9ffiOp*j<8y{Z6ihhbm{v&wn*]/TF|?q!Uk06[' );

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
