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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'etcetera_test' );

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
define( 'AUTH_KEY',         'GR~?`|Ur@dh4G$4CPU=M?avyX(?tuyrgkpj5>^m[j>B&L%w8T1>k9O4L::OUN?6/' );
define( 'SECURE_AUTH_KEY',  'PduP.D=Z~((q<9r50IL&Vv{!.<XtD)&Lj4x50mj=v<<?sz$-^B6@$*>a<%e4WHoo' );
define( 'LOGGED_IN_KEY',    'XBVBkX_y_Mo/1m*V[b,Q#d*kvvf~AFOh.n3~#LUx6E3Kat*}}Zp1TSeXfo5n_?N@' );
define( 'NONCE_KEY',        '[NR7#:[7S%gdQNT`t$2Gf_PFPCt0woA*bRM2<v`J?zidA32s`L(9W8j{6cemW) W' );
define( 'AUTH_SALT',        '9K~-Q{Ccea+Fjs=%%t`yxO4=@hSq)v-zdD6RqZ(V{p=&]9o_>$hWM_b2[43.edR)' );
define( 'SECURE_AUTH_SALT', 'P$Q{jsXA=xsTXfuTJ)PvDXishw``xMB@(]Tn~]AC%:n5.u@kVl:`~:@O.b*is9,T' );
define( 'LOGGED_IN_SALT',   '+}-aAkz.u=,ScC<q4OKBni.(zO>eey9X>|;eqw4>_.u{wpQCQi65=6XZ#M~+Oo`K' );
define( 'NONCE_SALT',       'm|NQav9?~bx01:TX<DAuTQ3&YFZ(+ D$jg7Ga!z;1p`Qp{U<yrgHoS*nlHh?`Jqm' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
