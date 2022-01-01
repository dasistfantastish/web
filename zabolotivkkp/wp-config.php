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
define( 'DB_NAME', 'zabolotivkkpdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'z7abV`qnts-,k^UO OU=P&/!mIr #&46?b$v{1%<vyON.a67Kht(*-&,nML{Puj4' );
define( 'SECURE_AUTH_KEY',  'tq)t(%kKM@+Cm%7!()&0J[dHT@;hyusq}m9<d2X@5r{ z){Ln82c~(/JY7dk68gZ' );
define( 'LOGGED_IN_KEY',    'u/;aV,/t*@y[:mfKYHNh.}TCV>g$SjdjofG|@D%^K7d+u6f4qQ$<)T#*04~|^3q|' );
define( 'NONCE_KEY',        '|Y?wv!L;sNx$GA/Uxp|*x B|tQ[_pYj}#.Pa]MP5c=rKq.DH(ugR4{^+dh-5kci#' );
define( 'AUTH_SALT',        'st)x.y2cfRB[R,O)%O$!fGxC>>z-_7aAz~a(/>divR>;my4wqhb20)?f)z ^Mim?' );
define( 'SECURE_AUTH_SALT', 'p9 )?n7K^bTt:v`(^;<iUd*N8xkj-$e1%y$f_:>mstZzGD[V;$+/UUi)WMk>K9AY' );
define( 'LOGGED_IN_SALT',   'qA6gqbARO%5,>VpQ5VjMkKHxv7wvHZQgow_#V3K7p)}h`Q}./~np^,<t1J;LU= @' );
define( 'NONCE_SALT',       '.U98rb8Snss]Q%k7h]n=?Y!TbL*>p9O]7bipdK2Q -K)Uft<f)O#gp{BIFJXb:=^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zbl';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
