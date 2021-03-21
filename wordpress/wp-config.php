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
define( 'DB_NAME', 'sport' );

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
define( 'AUTH_KEY',         '8Un#>jT^29i&Go-r6J8dv7J<Q<A.5@Kltp?H%[snBc)o2aKvS@qwkjf449RC&_N0' );
define( 'SECURE_AUTH_KEY',  '^.V:vw6lo%[=.b~-UH1|,wZvAe1zEYNiLD]EJ/:FiZPXcr~WbQla3i$9swK^1[L^' );
define( 'LOGGED_IN_KEY',    'zSpF_%&4CJo_iO`laANlw2zTmtim8e(8t48Fqzb;r%uOw$?r}~*?o43J}R&FQ>xM' );
define( 'NONCE_KEY',        ',[hj5uC,^;<V+|%y11Rabb`S`;Jdu[{Vf_n|z^ur/.{_kzR#zrim:GkP Mr7wKKf' );
define( 'AUTH_SALT',        'UIqcSihh9Jax!no~jiG47cJ3a*!6l=%C$@ ? J]V;HC2@g/lghP<.F&?:;lC>@.k' );
define( 'SECURE_AUTH_SALT', '<`5lo<Jc+L0UNW)ca)p;RuB.CG]H%[O n(:.qY9JUFW2%*qn^T/qf@,}EB @0#0.' );
define( 'LOGGED_IN_SALT',   'QpXXO7G=}vW3T9&ic.%kO5Ns5P/4-<eaHo#e|&1vi&X-l/8Fqp)LZn]/f=TsLiMo' );
define( 'NONCE_SALT',       '6W=PLsDx%3_p#*r(Lk<>.v_1dxP8Fhg3f{N&a5.xnUSBj%+7Gfbj!:bDIi>PSNHF' );

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
define( 'FS_METHOD', 'direct' );
