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
define('AUTH_KEY',         'Ajzw8MDJDbSpvoTQRF0WJSpkjaOg2JkluOqusC+Xncunb4WlVX+94wj8kZxzMrdXZgE5tq49MWWZuJysRQlVxg==');
define('SECURE_AUTH_KEY',  'PjScrxC4gdqAjOKv2mYP0RyWEeKbuxavcX4aKhxufH1mcNGuaxolpfVsvhmkIGTkul5x/dd3mzkZCI42Vu4ToQ==');
define('LOGGED_IN_KEY',    'f4ne2Ir0y2uAHXjBgqM0NQgGp03AESZEyKaN3Gg1sRRXNTMeTOyJfeUW/3YTELS/tAsK3eWexTZHnnigYnipzA==');
define('NONCE_KEY',        'awoOkSj2yQFFDt4NoLBOVafzyiv8npoOfpLv+weo4JwbjaQQFFO0Lvwjkb1MxepKWEtkm/4J5UUajx6zGmEbeA==');
define('AUTH_SALT',        'UT7/GeSajw+FhtkckPj+SgTYYvtdRsCFYCIUC0CyxqK/6bDB6wm5/hHkXGMAYIOONG7ZxT8sGyFc8VwIrNR9FA==');
define('SECURE_AUTH_SALT', 'yivk+OFTkE9PiC9N5RMAMXonw5qHDT4/+aE4fiOdnHScCSvIQAcNOeS/wCBhwYqkYSmmZuue9TZel0BodVe30A==');
define('LOGGED_IN_SALT',   'J51AyUnx4eNerQLZFzMPDWVOBC7PzXPVY0RwW/sMUJqORlALVcDR+X6JHepFivlCxm8avPIo9kW0E46wc8/c8Q==');
define('NONCE_SALT',       'T5dhLVFIfBxnWtEXYMggsrWjk6tDQE2TgTQpVC3WEX9wEXbmLtoj6TKY9udvBQSSKtmGjR2dVpZFOpRb4LW4PQ==');

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
