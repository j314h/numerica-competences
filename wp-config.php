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
define( 'DB_NAME', 'basehorloge' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '1~xOa*^&;4r5S3RX]bGy<umM5#azNya1N@V@((=7!Oqp8p,/+@/F:`$KbA;dx)_^' );
define( 'SECURE_AUTH_KEY',  '.|y2=0yK}Mc/]HYT<RYb[ece5g4.FF;GKsDh&u`sHO(hy0VJG+NaL=7YL`1!7cnd' );
define( 'LOGGED_IN_KEY',    '$xoh7;z1^!mDvCxy$9bXejq-?Ie<Rnw&i/1DXDfs![Lrmlk.gh7:b*F]~qEqeWEW' );
define( 'NONCE_KEY',        'C#7)~S_B%/C/VulVrGG~ZZEvz9YLz9VG;rwlpg_2NcO<)z3z5:?6i1pIUt%bY7Dj' );
define( 'AUTH_SALT',        '7H%;%V z)uzQmAEF|[.$hoE)lvp{`zYC-1U4awxD?PK0/b1_t8XRI*OgCC{;8{A.' );
define( 'SECURE_AUTH_SALT', 'X*u-rOjwmZ4m6}x{!j* >&]>F39#c6X0|x>!#U0nu1E.2[5hmi!/KRhF4GU%m9Cy' );
define( 'LOGGED_IN_SALT',   'jZlsoS4 <cD8yYQYV.rj}>9)/+~;<2m4/o[3vU9Ec#Wz/pHc$cGrjfxfu:gX%dtb' );
define( 'NONCE_SALT',       'bS5V $7f[ R:K(!UUjU0]v5s#iF%$Xt^pyJY1chldAv=O.Yj{.td+Ts]W S43T/%' );

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
