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
define( 'DB_NAME', 'latihan' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'x2Wt1?<l^k3tNhP@:9?kt~<=CF#H>wVvpy)p[vVaJRW%|Vj&QcZe~rmzuUaQp4.@' );
define( 'SECURE_AUTH_KEY',  'ENG}{Uvk^}l#;Q6pso>$aM_x%@v/e$K7RK9ilzJ#m G%ZYAY[4;/0#NmQ!nL-K,`' );
define( 'LOGGED_IN_KEY',    'LI#wgQ(~8(dV!S$4yn1>>FT&%naP~+vNVW&B.?{hrWX/MEG! 8Ye=1x>+vBN:>.6' );
define( 'NONCE_KEY',        ':BXY0=/o/nSW0WoZ.,NYqKBnavcSH4mbJEh(+$aMFU?89m^O&WPta<)R-VWrX0nc' );
define( 'AUTH_SALT',        'U&+a#(bgMvuKYH7nqknvtKM/v*|9ald|OraRn9u{8~*l5/UuX?dar87kH al&5F4' );
define( 'SECURE_AUTH_SALT', 'd8o[t>i;HcV;?km2q6Q~C`%x+24y3E-AUWwu@+JXB3ZYlsfrFa{O1{;l_ZQ#[*8J' );
define( 'LOGGED_IN_SALT',   'vC9q#~IQ{#&` tQi>4a@h?>SZ,xIkcKuK,9=)#9:5|VWoj67>{Q[i!Fu04T:9l.S' );
define( 'NONCE_SALT',       'lxw,FR=@sW-G!2Dq[x}o 1cA{zv M,(>MQJ(K-~C`A-tty@dKG@W+1_OAZAtG4O:' );

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
