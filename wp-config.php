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
define( 'DB_NAME', 'curso286_wp547' );

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

define('WP_ALLOW_REPAIR', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v9axhpieedsfnngtugk4xxeggh64e71uef4pqyhhftkkrg4co33lj7yuiwkhdkfb' );
define( 'SECURE_AUTH_KEY',  'vybpm2g8b16bcmuhiyjn5fdsszl8x1tuqpxlymknqwyw3xsmkt6uosiwiory9qes' );
define( 'LOGGED_IN_KEY',    'rbacmchf7asniwlugp9enrhyvjtxectdjw0kej0bwwxk7gkjyyticpng9xmmdbgd' );
define( 'NONCE_KEY',        'h0f2cnf1hcxmudgqjl4rmdbo67qa3ukgrtxifmopzgwjb8e0rpmisaqhh8mwnpsa' );
define( 'AUTH_SALT',        'pddfcpfbe6zyvatszrsnmvgqzpklzhe1h8pjsfaaq1cfwgnk9oskzekgwuaojwpk' );
define( 'SECURE_AUTH_SALT', '6w8lpmlynv7x1vy3zdvmclakoy2i60ympscoylqps4ashj9ndc3pjhax3lorecpm' );
define( 'LOGGED_IN_SALT',   'tpgcfnnazmj6u3helkqsgi83rkcqaw9omeocfaewbbgtpedi7at9bx78argcfebs' );
define( 'NONCE_SALT',       '4x0lu6nkitm44inmko50p7riumnqhy89h8cqlmr9csrpjkr6zh8iq7whwuwo7u9k' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpb9_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
