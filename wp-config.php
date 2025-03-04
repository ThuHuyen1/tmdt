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
define( 'DB_NAME', 'tmdt' );

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
define( 'AUTH_KEY',         'rAN;3U~lq8g(%U k#Ep1b%8r%f1M}9ATot(Y]8!o--cKJ)6hOP^&5Z4fKPRlOBAk' );
define( 'SECURE_AUTH_KEY',  'rt*e*tkSe^MIoS5 <aT_|zghY(nR` _$lHMZ/9JV#KXG0kB(Su[(vZ#C%p_/T/L/' );
define( 'LOGGED_IN_KEY',    '- muiF!WA_f9q-S] +msarO@0~L m,?c$S?uG%fuK@2[bQ){4cjW,B&UJ=HT&Ifi' );
define( 'NONCE_KEY',        'd&,#F3dS.Wz)sYc5utNuZsx#2@AZjmVd9.J+9`JF8|D]No51<;5r]ar|#7SJ5S+7' );
define( 'AUTH_SALT',        'I*sq[3(e[UzPo-=L3x:=Npx?M@K;k??&iyJ7~:oKHh.4>ic$+LN[oXVVBHY]g89=' );
define( 'SECURE_AUTH_SALT', ':4Gve:g1xOk0nc{7*poQ8xTpW8Zl}rsGnz2d/.enYYvv[P-0k?asg}vG#fv5h1#m' );
define( 'LOGGED_IN_SALT',   '/[;/|k0S!@:5Bb`jIYx>s[`w;sIJ#PP?JYSX/27/{o@*C}OqSoVo&Ur*5c(]+cBG' );
define( 'NONCE_SALT',       'ygd+*SO|uV%wAD4$5qfbf,6q`5Z}a*V~7]1W,uU,v[~&M-_scdY7$RWH&)?Dvmrm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
