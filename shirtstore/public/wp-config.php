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
define('AUTH_KEY',         '3f4jEhVEB0mQH6mjgI3gwmm1b9VmOOtN7YtL0dzMS3/xsXUbfp+oeNNzbQoBU5EaFXrii9Fb0lFbSisgbqEhfw==');
define('SECURE_AUTH_KEY',  'lULoBDymxyEMxhopUleA/D9ULnIaTZK6wSB9f7uO0vOKxTgkB46HaMfoTK8IM5mIZ2x6Ehj9e+tLqgqnDFLQ1Q==');
define('LOGGED_IN_KEY',    'CAjMinA1rkTTG+dvyVUltTuPVTEaMUGtaq8iLoBAtvHsIryidNpqdfFcCxSc/QNY9SBt8GdZ2hy2t1Gbb/RjTQ==');
define('NONCE_KEY',        '3UeZP/Q2ItJnawnEPODfSPQGzhy7Hu54HuRhHUUTGj+qiw6NkhjfoZ/581C21pNRvXonKDRTMWuimxy22IGHJw==');
define('AUTH_SALT',        'ywWYukWAGrvOSWGKFLqvIHQz3UGXzU5cfIxsOX6O4KRWHdAtqkM3yXk4wlBw0w1msZAOBBs3Ommk22XQRVSDWw==');
define('SECURE_AUTH_SALT', '4vf+f0AAfdGFoGOGZvaG5Mo8x9q6l9zphee+oVO+IcEVnibxkHc9DJV2uF/591ABckVR8z1vdfXB5kPQVW1C0Q==');
define('LOGGED_IN_SALT',   'zxSor5f9uaWGwZxI6P8JKop3Z5k20T85+Mj6zzPcq1sHmx557AabC5phSTM+Sn1RN9r34B5DVU5/dfVSkGqaow==');
define('NONCE_SALT',       'mm3wiKNrqeC2coW0Nh1eHsOgoBb95VMtaJtoNYKNr7d7biFU6H3IHla+mv0nTG2woJjXaTy/BFVia7G8ZhxQgA==');

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
