<?php
//define('FORCE_SSL_ADMIN', true);
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
define('DB_NAME', 'pwbevent_scom');

/** MySQL database username */
define('DB_USER', 'pwbevent_scom');

/** MySQL database password */
define('DB_PASSWORD', 'Noida@1234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'mpwl5pzdzeh5biyqnv4qkgzimw8jzd7npqcwup8vbjvndxojtmohztd9grc6ix0h');
define('SECURE_AUTH_KEY',  'rcaga4mxvkxwlyjun5kemgzuwg3duop8nd1phaebifo82drrs9iyou9v7a7wushu');
define('LOGGED_IN_KEY',    'uos4rqq3wglgmkeokmv5guqnrmon3q22gidqxqiynfnm34bxbxdtti8s65lbieqx');
define('NONCE_KEY',        'my8bo7kl9c0pe8rzsggepez1koh4tiixurdu70crj54ovtnwlnslriss5jxe7ezq');
define('AUTH_SALT',        'zbhvuw4yjfqtagxmhtgsmu5f3tb8u8rljkd2eswbramz2pvs9c3xvi61ife4qip4');
define('SECURE_AUTH_SALT', 'o3thnjyemrdwxegoxdgo8pv0zkgjfi2zfcgrqgpooue9j4stg3vo0yxhxaxacier');
define('LOGGED_IN_SALT',   'epjk6v7mltywzm1or2kvitzuu1nyzljbeyrygqohejhvdrkluggatqyi5ctylnmp');
define('NONCE_SALT',       '7ar34xk6dfwdgbfnzt6oeg9okwxskvtlgsk2dy3csuhjdzr8elzciqijegp34tkc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp8a_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
