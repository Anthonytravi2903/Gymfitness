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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5ziwrnm1egGkCgieX5axrZNESMKilg9PnAgRyBJSOQDIqWeVotNWBRO+GrV/fFXd/YnDk0wTdMfXMeNPVCl0Dw==');
define('SECURE_AUTH_KEY',  'WhFRRdQNb0f+5+Lq66sqHMDlfNn459JAM0cNmF70IwYnCcrw2z3Gzd5y5djHJXwcnH46GL5NBgYNARgNKVwQ4g==');
define('LOGGED_IN_KEY',    'ZLY1xkxg7h6Ak31a2dBvJMqcjZq9VI7cPAZq6IsXXx80psUmf3E4uF/QLrJym4kTVyUIc2OUCZ1qyzCGFfjDOg==');
define('NONCE_KEY',        '5TmputYJ5aYksE2gewitBwTrG0Hw6VL/6+okbm4a0jTvI6vqGmKYZfc3mcP2UmeJTBJ9qki3r+uuEueEgJF+Bw==');
define('AUTH_SALT',        '/R8SGfzk8vuz+bNCZFSeuv6G+b39k3yx81EPI6scmOOG8fFW6pvhH4yxZXJYnOR4rue3El2yp0yp//tWp4U7Cw==');
define('SECURE_AUTH_SALT', 'myHmNFb0WpGFUEtnr4/QXHVRWMZfBO96P2CkrK6sTG2uGJCQIWopZTWTpUrclfeCKP6TNr322GvEWpwpq4ViZQ==');
define('LOGGED_IN_SALT',   'YOEGrOgvTvjsPPUZENy4k9kseFghhR26idOmn5UMvy8oi8v5yDz0vMd8wDf3rdcczybBw8cYmhuInoHYhuk00A==');
define('NONCE_SALT',       'wjyX9lATaqWsUuq0HuwXLBTGhZYldjnwlYwrBWbnYcI5loT3sCCi8JAeinWOaMCnQ7lGIJZOLjx1YvimwWpGOw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
