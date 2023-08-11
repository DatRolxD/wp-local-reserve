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


define('AUTH_KEY',         'o1XiX0z8cZP4O0de5dhrpMUb8qF9F9IdB2ZWZwCAwSh3jpOqyvd6MLYXoy65iYI9X9lClf/HyPtcCl4IouEzXQ==');
define('SECURE_AUTH_KEY',  'LeEqaSVEtx6wpbxsM5Rtdt6/GDHSrkwRuJoMJTmDeTcTqoQ507/DA3hFCLHLphhl538F9Bi4cHuALwmR+HM3MQ==');
define('LOGGED_IN_KEY',    'cqWGR6sP7dW/HBvnKRUa2MewNVA3M6iwrg2OYSXWpzxpR1Zx6Vt6Yd1GtVK3ML2eQq+yexQ5ocwoz/F0uEQouw==');
define('NONCE_KEY',        'rPCT6e1ngWhxy96RZEMaIhTFmJZtLc3ddg7wil34T5QVM0Ap1u+AaoT25NXjWoHROwi7JjKzRpL3nmQtGp6MdA==');
define('AUTH_SALT',        '7TvQMEKj9OG7YD1B1XnF4qy9H/pXQPsiJ1YsAU+Ja1TwG/EfVyW2Oblj7CcQWgBCymOGez4CC8Kvu79KT2WS6g==');
define('SECURE_AUTH_SALT', 'LQoDDOnEPy6KuptAWQGqRAB+EPCgK34sWvee5p2GO7QtKFLqT6w+SwqQSxVCy4XPQCemuQValVprHlpQOr6XUA==');
define('LOGGED_IN_SALT',   'MLKtok4Lv99HQoGbciK2NYG/6JD807GBVZLI+zp7oNeqL8Ay+JQGNKLqBozJL7j1qB78+f72wnHE+V8KqPmTiw==');
define('NONCE_SALT',       'agp2bB/L7y4Up5Kk8qILlh7tg4RCBEl0tYQmS0XjFwRtAUazcxTtn2bLUpMr9wnZ8NTtUakFZAUigyxU1NVhwQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
