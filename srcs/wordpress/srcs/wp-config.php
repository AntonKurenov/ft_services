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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'elovegoo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Xv6RK/qzYja/&dfIS{JB]!g<@3I<VM04gT|kp_#ak+pXl!FYU:h`;_[qgrBt5r|J');
define('SECURE_AUTH_KEY',  'j*N,/a_lX/^v|<n{>4,7#sl@~b@Jip:U_:CtT)YZ,%lEk{L12.nKoQTUDPWrH<,Z');
define('LOGGED_IN_KEY',    'dP-sVGMS. o_Fwx+;!^Kc^*|q*!;?X6A^|:J0F>s8VloJhm[Xqud&LB(+H&<v V5');
define('NONCE_KEY',        'GNoer;S]+X6}Eaz$wolD#x7A7h^C-h3IpBalp?Pa#W(5_.=I*g-y`::Db~+u]2I9');
define('AUTH_SALT',        ' 0r%cMu1_S+D|Hok-e*;VA!B1d; QH3A[&/i|,z+{?lC3>iEq)Zw(!_nhnc]Y:@)');
define('SECURE_AUTH_SALT', '#LkhXXu!=z/E|eWE^nxYkn;::}(ni32~)fWHlW@|~0mW)`~z=yZ|#e&R1K@QGvkP');
define('LOGGED_IN_SALT',   'D8Q7U?2xCL]6{ZM+|Gf&lhy~g2}N+OSgYlVFeWQ_ho:P q-0>n&S9O{?pyG%q5BF');
define('NONCE_SALT',       'Hp8!4UCS<vUMjM|.--lJg52FvJ|{+xQzseOSV|eDq]7jH2C0Q~IsJo}-e+xI,01 ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
