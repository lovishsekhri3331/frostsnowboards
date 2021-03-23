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
define('AUTH_KEY',         'UBeulzKET3lmTanqV5THBzYiI0OObX4dJlwCd7tGn3f3xTko1FYFtS0lv+cUzbWc6NDBuyMdFTMkLLcDOPjNzQ==');
define('SECURE_AUTH_KEY',  '8ODbyRBGoURhDYdGwt8mx1X42/2n1wz5k5T4ephKIFg4Aog1uCRnAf69BiF6TbnVIS49U5JD0j05VC0BchjkMQ==');
define('LOGGED_IN_KEY',    '+QLLZUt7dzwVOllX3VqnOTe51mYItKn18zAlyegZvG2lIeNmtjtkY3amOjl2Ke6W+dMs3K4/vJo6m4KW+wiOaQ==');
define('NONCE_KEY',        'TiS0JDtgE+Sd/v8InjRR2zwfC+B4+z3DgXHISkBKv9gwZb2EFxQMqo1KD1mgCh0bB4BZmcTCwgbQ+Y8gLGZrbg==');
define('AUTH_SALT',        'WnuVzGmYLTt6+FH8G3QCTzZhQeoqZOikxnqGOoMg/9yrYEvM/S//VTGR3jCs5iPwD2XigFZ2SKh176V+GVOEWA==');
define('SECURE_AUTH_SALT', '7LHSmnBue4bkwCt48Ui2uVX1QgGteDN3WWPApHq0t1iXZL0dbTY9Wxv6fmvZBCIEq+S324rBcJcMRLgIgtvHSA==');
define('LOGGED_IN_SALT',   'Xy2qMvlzcSXDU88Px1toV+wuD9ZAr/YraPet9s3W7OCrgMA7q3Eb3KnFFJxLdFRyDhc5eoK+07FLFKRejVj+7A==');
define('NONCE_SALT',       'P57iPKFQm0G2pbmAMihX7uvGouDXHZWH+LZDHbstLEQJPqWMD+CrrAiZ0uz7X3Seoo3VvT2xIDAHCVeLecY8FQ==');

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
