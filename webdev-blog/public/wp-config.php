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
define('AUTH_KEY',         '/OtZK98uGbh6/V2I7w3d4oWKb7gaLo4vuHzEFWC+m/aRFQ6AktyBnyZKIVIiCfM2t7tTX/RWc0vPbl3Qu3+f+Q==');
define('SECURE_AUTH_KEY',  'CjSswnDYf6kClNOS+F+KON3Bs956OemX7xxiYHRaN8CiiekgjYXvL5OCYhkH87um48Yh6Clt8zWIt8fCYwC3Lw==');
define('LOGGED_IN_KEY',    'AQRz+h6N5gJZzSpegtXCnzXdzy51O9osVb8KH3L1HPj3Yzj8/bSuhfD3ptXw9YBXbuYHCa3rEL2T7EK3Z3z+ZQ==');
define('NONCE_KEY',        'Wuer9IkDeZAASQbC+1+7mEtIkcOIiaxCnV69M9B5oC7wiUe8xkwNXiM4pEXGGz030o9Hn2JqlLdGb5sFczJHdQ==');
define('AUTH_SALT',        'bbvpAlDme9p8nFV3K3gKWBt0+rhvd+yo8Q0+9+PlKsb/5pOrbdr8o8+JJacU5MGIoyxot6KgjVO0MK9zDZTzng==');
define('SECURE_AUTH_SALT', 'Gz+AyLZn+Gi/bz/SYx22BFrD1ClUqJqsOgRtuGowMjG9EuzVXlgasevxxqmw7quxP5RUa1K/puNx0uEyR502Cw==');
define('LOGGED_IN_SALT',   '4jmbrylGCNN2sQX3/NQdbY/Yo7PzF4stV1niXIHwtFSCONrn53IOIkkVyCprU6xesPHnUjxHgu6tAzjHeFv/TQ==');
define('NONCE_SALT',       'UzrbEZNOVBzL4jupqDXrerz4DZm5aooafMK9vfvE3RoOYnZBL8jC+TX5E1+tCMjpse0aNnpU9ANA5E8BV34LfQ==');

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
