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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'qnIgwCIQFYkZ05eAKyPNy3uis4vTwLIrqLz6lDQtkGMw7DBKf9ml8xqnil7voeXLJ6g9GQxbebHEvCnLoQwJAw==');
define('SECURE_AUTH_KEY',  'G4xajBdOHQ11W8NZNKtpIaGdvAIFLxJF+sFDMAW1vvNOdq3bnqmsprtV9RR03vBIfVEby8jIOyQ+56eLoaiuBA==');
define('LOGGED_IN_KEY',    '4vsA+ocQ3R82nfZqfc2yk5AUJMBBWVSpRDRgW4tMH9tQcTSXK/tCh6Er1Q8Hz/qXbGYerHhL7lbpnLOWS4mr6A==');
define('NONCE_KEY',        'OT/ht6MFPQ933b2FRUe5L+iWEYtgB1bCYI2bowDJfgTIrsTnZlMTH02juQD7Tj657XIKPKaybA3xa15IHttGmw==');
define('AUTH_SALT',        'AV7gzQGsVgrXHhW3Dh/Yjog0UAt36udqc8bNQ8rAobjSUiYJYCcTd+K/dHHnUQ1t9AM624kzWLqH6cG2VXT6Bw==');
define('SECURE_AUTH_SALT', 'TvB+G8n2kyJxi528ew/IpkeGARLJLNCQfW1Gb9MXCkwOpyjU+mrnApQTD/krq+4OBIblhRQOhmUyDnz3dtHHNg==');
define('LOGGED_IN_SALT',   'Z4MnRKBKk21p9zM2mWp3ffaEcoZjOUfkhcmGU15Zy3BiPzOa8JTHpR3hnhHsjnilw5a8OXqL/19O/GTIoBNuDg==');
define('NONCE_SALT',       'zmSkM0J0jAWHb41YR9//CztKj9K5dxz2DhdMjDHBcftmwP8ZqjJUQji4FNFVVu+Z+Ieu6jlCdR+RtSygfO7cYw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
