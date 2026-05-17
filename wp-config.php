<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pchwirc921' );

/** Database username */
define( 'DB_USER', 'pchwirc921' );

/** Database password */
define( 'DB_PASSWORD', 'qg8CQBdK9NRP' );

/** Database hostname */
define( 'DB_HOST', 'pchwirc921.mysql.db:3306' );

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
define( 'AUTH_KEY',         'D2cE4LCqVjyI/S0j4+R2m0vhHzZaweaSJHUWi2vaD9RPf5jHu1k7FNx36Vml' );
define( 'SECURE_AUTH_KEY',  'vsatAHX8QPZFhSEIDOPpwtElUb+g1Wtrr8+zW/HY0NZqALAw0w+cA3WjZy+r' );
define( 'LOGGED_IN_KEY',    '3WBAzsFUmvTQ6dBb+pj+kwhoczArZb/UxWwh3JNmHWE6gYBbOUZalL59XheG' );
define( 'NONCE_KEY',        'BVCJMzGetpfaKznb7eROi3qSkK/lZN9euC09CYtZEUPqUrQnS+wQYODjzKgk' );
define( 'AUTH_SALT',        'H7OtLlPdjbx4Pjpy62hMTS1NLxfkdqGBTNxUkiBYV9IXZ3S8sD1IsbKYPEk9' );
define( 'SECURE_AUTH_SALT', 'qhZCgO3Jk6+jieUyu5OaFsHBtPl5wMKAZ2LCpuQ1IGhT4C4YjG5wrZWUzk8B' );
define( 'LOGGED_IN_SALT',   'fzf4X+o1Gfmts4VJ9RkYDe1/4CoFqft+Tm86D4R1bpr1WeFMLbAdVi6G570C' );
define( 'NONCE_SALT',       '9Kl69p/CDE6Vj1hBjeMmaabryzmDWRSL+O3DJ2gUe6NgIzTuwxJFA8CPivpM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'mod384_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
