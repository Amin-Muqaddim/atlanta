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
define( 'DB_NAME', 'atlanta-live' );

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
define( 'AUTH_KEY',         ' 39UdeWs37u(~]{93j>1SwL<AKiSa1o%(-/kO@4[k&X_Q[W%[,BbiYymw5(@`VY)' );
define( 'SECURE_AUTH_KEY',  'pK`gs!mqa?#CM [j_}2y24,8W|UD>1OK-0rssC)IP9.8gB>2He~$bpG`gw4>`@y%' );
define( 'LOGGED_IN_KEY',    'AW5}qqIt/7gp~kpyY$&$^?^v_ 2(v/EK4#}$SzaQ]xE>,arg4.z$K|j._^l$9}e?' );
define( 'NONCE_KEY',        'F={ug0x[_:@(Mu.h1ya<b~OsSaos8@^U!A`}K=0Gc5R&Ou(cRWPBA_t$!+-Fl)F5' );
define( 'AUTH_SALT',        '}8Sd !9h #`2psjR^>RF a5Na)qXke%Lv:rC~0[UrJoQ:54ASRN|AFSCAEvY 3(y' );
define( 'SECURE_AUTH_SALT', ',E4HiB{w,:5DbTpHub ]2w 92.(9=N-7zmsTb%YHNZRy+HjEF.2y);El;6E|g+%J' );
define( 'LOGGED_IN_SALT',   'lbd~2P(B<u}.*.=Z[vXsf;/0kL~niW4g1Ev$X-C0Cy|XmQ.aZjDe$10O}Ms(*b=_' );
define( 'NONCE_SALT',       '};d#2.w8D$kt6$P&QAq*+hDsy?B>#{lzqBfnH5&W2D2Wo*ZA?;TEAx<Gj;J>2y30' );

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
