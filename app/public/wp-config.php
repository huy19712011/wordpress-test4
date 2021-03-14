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
// define( 'DB_NAME', 'local' );
define( 'DB_NAME', 'h0ghce8zb6rw7rat' );

/** MySQL database username */
// define( 'DB_USER', 'root' );
define( 'DB_USER', 'r3x820rb2cyg7ehm' );

/** MySQL database password */
// define( 'DB_PASSWORD', 'root' );
define( 'DB_PASSWORD', 'bizwoy8optejsx14' );

/** MySQL hostname */
// define( 'DB_HOST', 'localhost' );
define( 'DB_HOST', 'pxukqohrckdfo4ty.cbetxkdyhwsb.us-east-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         'DAzLRVFbjj9QhrNRUURqyppwqDoFT1z6hPmAQGCsoLPU+PoNYnkFU2fF0+4DMt9vHOZY1RoR5sxUe5UzGZMjBA==');
define('SECURE_AUTH_KEY',  '1rE6BWh4W/vHzxzfbccxOajnkIFb4a4oq6XzbI7HHbiPfZHkJV9TVLmHN2r/pKaKBMrS7S95I+JRaVtyqcs0GA==');
define('LOGGED_IN_KEY',    'SrSwetYoiTHu9bShnm/tBEw/Uv3RMk8BS+T7rmibnv8S/gjye7yB0iojzW93VjzxkONyZDwfARacuIj6GBPdwQ==');
define('NONCE_KEY',        'zp1ZASn3nrcwc4WAOID27KqzcHQN9+eIjuqpc8Qs8HeSsU/7olOY1JOcwDv3KAu2YWxu+HjAmFjGmqbyg2h7Ig==');
define('AUTH_SALT',        'slu5zpRkuZDrqdRVBVWKZUHXxWv6OvWOi7X2I9vbcOWGw5gc7ZYTmjFZ14SB03DNPBgCGTommceFkLKQ5wQd6A==');
define('SECURE_AUTH_SALT', 'vDqU5lDewnDTWGVw1delsWAApb7OFAQqnMuTfrQZD6CtxGYGzwXcxIcQJqA9AGutqbbHKIIMqc32Jje6kCtQuQ==');
define('LOGGED_IN_SALT',   'mRbeeNkQg4FEbbCxj/36FybK3NcYm/bXrnmDI8UlhyfRyDsICOT4Q6qEOX540UXmva5u0XJeGSasAMYbyEmpdQ==');
define('NONCE_SALT',       'QQmxFGtEgnuWjxv96SuEa/iFLTjmrG3JrrCpaiSRnx+MAzws/lo0FW7iDItBIVam8OaGDd1ePMS3HHJaxnKQQg==');

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
