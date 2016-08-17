<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u795058150_vajyp');

/** MySQL database username */
define('DB_USER', 'u795058150_bamab');

/** MySQL database password */
define('DB_PASSWORD', 'jeSuJaBeda');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5LX8cPA9DLJGqCEj4Dm6ToSVzqPmz8blDDWtc7b2K4ZNNWiWq8Iu12iGsdxB6c4E');
define('SECURE_AUTH_KEY',  'aBGpxMtrkei5VrcejmJ3ziX7VdRYeTzRdUm0m3HVr9lCpm594ucUboteHxF2paHZ');
define('LOGGED_IN_KEY',    'VAGSzWAjw6tqmJKFFkn1vFGMA0NOxxgs6MEacVVBsymSMxNQ0OZESmsAi2G16UuX');
define('NONCE_KEY',        'iLci80zhfrVH7Z5Gr1kZW8bQWAloNrVXNJxQR2yOUTATbVHAugvjsr6HxPgZzYFQ');
define('AUTH_SALT',        'rvzGtyM2izVplv5X3io64VjAZO0qtHVOdMJQe0API74ETXspVt8eNv7YonrfUBmO');
define('SECURE_AUTH_SALT', 'BuaJJTCUKZ25iCZz0QRKCNvtrg4YFgmhCcB0HoXVRS5TPsJLK75NZEi1Wk85C8Nz');
define('LOGGED_IN_SALT',   'E6F9YhLIRHqAhGU6innVdKHwAaMtA2dep1jCwXtNPthmHxoDnMtwYHOQKfyHdn2x');
define('NONCE_SALT',       'LktqjJ4RdwH23kmUxvJP5lXgmWPkLOhMyBQPW2i47xzkhsfi5sLmIrFKcRbGn7yU');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gdtl_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
