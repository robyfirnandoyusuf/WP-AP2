<?php
define('FS_METHOD', 'direct');

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ap2' );

/** MySQL database username */
define( 'DB_USER', 'neet' );

/** MySQL database password */
define( 'DB_PASSWORD', 'toor123!' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '@3lPJ*oryzI3S1>oZ,IjK:N^|Kp]]_]e`M53[)!78Y>6|$3w]7$0Chk(Pn0S-*( ' );
define( 'SECURE_AUTH_KEY',  'f&f6^ctx>fAAHHvQy@]pJcGTk;.<Gc#TB8DD$PUoy_>?B>EhV)$Kc %)8ZGXiPLB' );
define( 'LOGGED_IN_KEY',    '(Ce8Ha+X15WVg6y!fmlR~E(h{q Z@jW@;ffGY!v=^`#]Ai!N`AYY1daCwFs4DEQf' );
define( 'NONCE_KEY',        'bI!~2=T9G9pIi[mU@FScfj)wf0u!TgGv1~Uq_^B6st#1~s)@72cN}<<r3&Wt>n.C' );
define( 'AUTH_SALT',        '8*wWr)Rv WT@Cffa7+U%-}gvH{+R}/kHHkC2|av(!Iu< ohE=uyD}3UwPmdIEwfp' );
define( 'SECURE_AUTH_SALT', 'w5[jiq_ji379sLwVRc(4k[~W03?y5+Sh9Y~Qag0:T1bFA9CX g84k?/[eM?+G7jJ' );
define( 'LOGGED_IN_SALT',   'Gvy1M>5n!`TkmPg8QSW1l2L0fSw8PxjNRsgLg!c0Vhy3R&;e)D^27vErhL_{LdqC' );
define( 'NONCE_SALT',       '*.%2f%Jp}5*e86}cu;VC.$2R:QJikz2/;pk{c?XTwSp(z|7i(8XYfMcHQ>=la3{0' );

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
