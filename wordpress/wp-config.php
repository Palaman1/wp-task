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
define( 'DB_NAME', 'workflow_palamaniuk' );

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
define( 'AUTH_KEY',         'xa%#y{,UoXf|ap,M2^=-Cs{/5?C;H#qWzT)2.!#E)xkkl1d^?;OfHN8<dj<svw6r' );
define( 'SECURE_AUTH_KEY',  '?y3&fzzva%:h*E:cwv+9 X/6WgoY{0 qOQ{Ko5Vt1n(Wf;mkJg4.Q,Vu[:Kuy>rN' );
define( 'LOGGED_IN_KEY',    'uDWZ#uES7Kv_4xugZIx-Sy .C0YtLF;Ovl4h&`o~:hbkn=R^*z 3JO$X%4p[;5jZ' );
define( 'NONCE_KEY',        '5#o/&~1_8mxRx-H;6v(g#@+YXM}=$cE5ALA?]{ML2AK@r`ONF~OA7yWSus(tN*];' );
define( 'AUTH_SALT',        'h$y|%IFek0=Uj3,Z-zd$7JLm9vfLe*61-4h*fc<XH^,>c<Wh8!A5iL|NE{<Le;g?' );
define( 'SECURE_AUTH_SALT', 'TFA/%@0FSAMe8-[y+ZwQKR:`quh4t91loXju#|[l%.l{?f-Y6d{BdjGK+$JiGIg{' );
define( 'LOGGED_IN_SALT',   'g+&*v}%b&bzIlu<2a66ju2eb|tVLm/^hK&*w/MlihRm1)bk+F6<WKh/.[0R;v/8T' );
define( 'NONCE_SALT',       '-gq}0]l5uGj{_IK|=$d=T[~S//PdQ6(!1c_nT1;~QK~yPV/#4^MeLa=Xx;+:]yPg' );

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
