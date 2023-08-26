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
define( 'DB_NAME', 'dat0309' );

/** Database username */
define( 'DB_USER', 'dat0309' );

/** Database password */
define( 'DB_PASSWORD', '123456@' );

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
define( 'AUTH_KEY',         '?7XAlDu|Yy&S^g*.&+C9W,K]BtxHuy1T9>kv$Z,3blNbO&Z^M6R(T J..!Vt+E-l' );
define( 'SECURE_AUTH_KEY',  '_^AF<43tDC0g)AXI4(i.,{b#7s fg01>gSLt.;biR0XfM:+eiCz$(=%!ztoK#J^:' );
define( 'LOGGED_IN_KEY',    'y]@~Z392|I[X|Vj;?:e<*&S|q/rU50FwzUvON+hMv@_NV(%0kN~5B>@!a59c4HDQ' );
define( 'NONCE_KEY',        'CB?e+-@7BgykdnXnQLn!NF0c4^ :DQ$5}5^9lGvmm1pk}tTMA6,Ll1;00/CV4one' );
define( 'AUTH_SALT',        '~1Png^p-^|3:-%tnS;<d<Lc+ 44hirGN@bt6m$?B48Z>!={xUn8&E_N;[{RtHpZ9' );
define( 'SECURE_AUTH_SALT', 'mXwDZ+.oqw~$0H-BOGCk_A]3cHwW].~xvW8(n9i1clGNB3M#=o[:(>R29Hjj@iO5' );
define( 'LOGGED_IN_SALT',   'vyp~v-#?FA<7dnT,8.Cy$Nh/.;iNt3X1=0i`31Jo%_zL:ndIkS]&fmCevkwfjS*I' );
define( 'NONCE_SALT',       'g8mh#yIYmn;QD8UA%?5+<8,_^CXL:u?cv^p4k<Jvl~Au%BiHN)Wo8d^{e<C@d`ak' );

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
