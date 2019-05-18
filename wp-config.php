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

$url = parse_url(getenv('DATABASE_URL') ? getenv('DATABASE_URL') : getenv('CLEARDB_DATABASE_URL'));

/** The name of the database for WordPress */
define('DB_NAME', trim($url['path'], '/'));

/** MySQL database username */
define('DB_USER', $url['user']);

/** MySQL database password */
define('DB_PASSWORD', $url['pass']);

/** MySQL hostname */
define('DB_HOST', $url['host']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

// /** The name of the database for WordPress */
// define( 'DB_NAME', 'wordpressportfolio' );

// /** MySQL database username */
// define( 'DB_USER', 'wproot' );

// /** MySQL database password */
// define( 'DB_PASSWORD', 'root' );

// /** MySQL hostname */
// define( 'DB_HOST', 'localhost' );

// /** Database Charset to use in creating database tables. */
// define( 'DB_CHARSET', 'utf8mb4' );

// /** The Database Collate type. Don't change this if in doubt. */
// define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY'));
define('NONCE_KEY',        getenv('NONCE_KEY'));
define('AUTH_SALT',        getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT'));
define('NONCE_SALT',       getenv('NONCE_SALT'));

 // define( 'AUTH_KEY',         'S)tv-Q3uL~1iSlLixmkOE4^oX,iT!MPI:m!md|P*2BCA-_M}{/q%N8&0CJTo`RYw' );
// define( 'SECURE_AUTH_KEY',  'D*2F9n`k$fEDhaHy<%a.[m!_QW1fu<R`HD<ouo$@,/)fK =NL,:s})`S@RFz4pE`' );
// define( 'LOGGED_IN_KEY',    'X1nYG?u-:+U/FKsp8XWa4RmP4OsIblTUzTs IxKY>vYhy&+?7^2ao~HjVte)!by8' );
// define( 'NONCE_KEY',        'NHHt4>MK`hl>nvZ?GT,x~`k>?7{B0&s?#Tg.[y:Dd,U>ow$JhS{}:[93lM4=J ;*' );
// define( 'AUTH_SALT',        'm49gF%;72Hv=6.v2>PT[QnGpL?FkC-77z0G&jxqsy1dj(*;UZZw[47mbLW##umdq' );
// define( 'SECURE_AUTH_SALT', 'evA6/]{r?7Y.Qi?B~*y/q3YDyKTtv@We/JMSULt&/c>%{a,EOIytqCDAYZk6Yx%O' );
// define( 'LOGGED_IN_SALT',   '0=6oEI`vg&s7ABR.woa:mkpsvBx&6xcCAY7J=N$FkQ=XElh[_r-1_nK.6($N1 /1' );
// define( 'NONCE_SALT',       '2 s%P6EV`!v],(HmoQ5zyT8KCbbX7o)7#B|$%#w=1udd=F$8kh>DGVfCqRK>e+Y:' );

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
