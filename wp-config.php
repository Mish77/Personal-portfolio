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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'personal_portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '2K+!AiLJUZ]@aX5H3Jp`GZkk6DH,]uk#=@$XSk}E7gW>a.wGLDQ8yDCUHO|p{<5R' );
define( 'SECURE_AUTH_KEY',  '|&#6q^BF0G]Mti!=lF:!@:&!G:!pBptbmFu98=$OL;vC@ArIzUgol%?J.{Cha<;R' );
define( 'LOGGED_IN_KEY',    '{cb2Q; %j0a@oq)N+S[GZpq8ls1C9goY[Ho3.J$j|BmDx%;3%LUB0bt+cB}Sxf]%' );
define( 'NONCE_KEY',        '6?cw67wN$=9sGQ-4/5BC&kyZuHuB,@bPJJVo|mo;J>#6Z93P?0*Vmj(_?x9Vv?a1' );
define( 'AUTH_SALT',        '%us0(F|dNv1TRqTr]^ba=U8q|/l!,e!*,FjZXph=!f{()+9 5BgcDi7-|}b+J}>1' );
define( 'SECURE_AUTH_SALT', 'O)5Cjq^|2-WN[8V#%u({-(}IPy+;UEur/_b5-N4??q8*RSVV/oHgL>$#`;[`2J0%' );
define( 'LOGGED_IN_SALT',   'tk:{8STR{|<L=T@,DjZTOn}Ixu?!->H+gFpU3XWSVDlz-+a^1`aAD^WH:hwp~.yg' );
define( 'NONCE_SALT',       'CE5k>JlUe- tKBqP7Uj`4YI#~`#6>7K.;>><[TKa/%%hU8oN4J8QJ||sJpfP7t#U' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
