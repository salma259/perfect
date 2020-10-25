<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'perfect' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~ )ETh:GO=efpipU|vf0~C}x}*(VXbfg%V;@!M0L?Wk=RWi[JRf%!C<Os7sn[@^;' );
define( 'SECURE_AUTH_KEY',  'LU+aW<^^ }9$rhw3OYpu_osr>h@`]Ven6O<$R7oGWcDrWLum]Gwwgv$.|>D!?A8X' );
define( 'LOGGED_IN_KEY',    'S,nhWZ7p+:E4tIf3VoX+>v?Q({,cFba4GW4]T:Y,JeBg3D!f;v$$qo-QHxhoXd]Q' );
define( 'NONCE_KEY',        'eIaQQYB~O*~%J tU2|1O9w1:Z:^;_y$r*<++0Ec(N?:.8it|O.@2T24K&#E^r04N' );
define( 'AUTH_SALT',        'AlTl_J] w,Dl[<U;_v~X%)ftqKx,zsn=qNOB_RWBlWOs*6Y5E7*Vllr[#.x]WOv/' );
define( 'SECURE_AUTH_SALT', '?9UEW;JK|0IKxAjK^d;S;B16DLxyWGy3v4:ifulad;Q`ou+8>tx<!MfcT&JvAc&/' );
define( 'LOGGED_IN_SALT',   '<^To]-*(6;<0S:(`tI0hhnAWO8htjy*o,RNeP MbfnY-3u#Rq&F#}r94m >nq.h}' );
define( 'NONCE_SALT',       'H$SOC%7z&q& n!d+mY|]oCBKN3#8^uQBhc{_d3s##fK_<zFDXp8>|%~>ap=g^lp$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
