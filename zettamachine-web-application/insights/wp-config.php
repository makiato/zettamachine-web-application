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
define('DB_NAME', 'zettamac_wp914');

/** MySQL database username */
define('DB_USER', 'zettamac_wp914');

/** MySQL database password */
define('DB_PASSWORD', 'eP.[2SDi84');

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
define('AUTH_KEY',         '7hutjrv3o0foqj6nplqxfz270jbdr3dyp9t0ahztxziim2qufjdjz3xcckklvrle');
define('SECURE_AUTH_KEY',  'ugvbuwc6jcu67tabyrdawyg3cxzw9qeniqt0pfrxkepxrxormojempjvh7jbzbky');
define('LOGGED_IN_KEY',    'qzo88ta3epzrbvql9sd6umueaifmtdmsue6ppdtgcbteopqxdugww6cc10xahnxg');
define('NONCE_KEY',        'm8hho9kay3iwwhknan87czlg8rcadglfkwbylfbkl1ojcttufjmczrflzsexayv9');
define('AUTH_SALT',        'mw5za59yul2ksk62uszdk8paz0wkz7alhuonl9zfwjg5x78x6fgdkorcs8awsf1f');
define('SECURE_AUTH_SALT', '5ita7a4c9e4n8x2nib1t8ygv8ftt34e5fzgnrlmnjchswwhvk28osr6mrxuwkylh');
define('LOGGED_IN_SALT',   'bieopuvxehvioqkb5xwbm9ucsoldrzcvqasu8izopyteguvnrgx6pkmbuhdtrxd6');
define('NONCE_SALT',       's9htmrz8zpryclfxp0gr6wm2coyihpibifj7szfnnxufau37ogqlacrkcaexdizs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpgi_';

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
define( 'WP_MEMORY_LIMIT', '128M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
