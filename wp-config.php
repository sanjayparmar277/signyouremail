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
define( 'DB_NAME', 'signyouremail' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '0BMR8306O;K/^uw*Q*(y+eJ5Jyyf`+:K<I[&Hq>zZ2<Sadzdi.79sbeu:*=J%]6j' );
define( 'SECURE_AUTH_KEY',  'dp_3/F4 tg47+E>>udZGzqj>Q+xa}ZL;W4x7 A%%Qdjuqu{bC=4~ko),y9h2oq_<' );
define( 'LOGGED_IN_KEY',    'V5iCMlFTA~YEg$N`Ktz:skQku7D8553*rbFoEnTS0AX,a#rP|fy}WArr{.wPBG{I' );
define( 'NONCE_KEY',        'Fiu#P6QO=,Y(o<,KI`?I{cHl9 _FknyvPt~ciXYy<(`.fC7F4s|jPu*+=mQ:{#)_' );
define( 'AUTH_SALT',        '6&9x&.9D=O!A>c~mOSOCJ]d9vznWDlgCmN.L>6bLdOhKP/0J_UYlf&kqW*;Nic99' );
define( 'SECURE_AUTH_SALT', 'U4p6db6`[:g*/T/WeH$ril4yncgO2EelQ|77k+77k8Ak~#g`nqg&?XvPHZ 99=ST' );
define( 'LOGGED_IN_SALT',   'TO[rC#u|WF<:*0jE*i[~R3>^RPiizyARy}tOB:o3a$u8ZA;+KG4EvgZtJ8}%t}~h' );
define( 'NONCE_SALT',       'W8`1_RGSvBtsw_R$mjY^g{T]:Rp.1Tfxi19+E+*)5)})&^B&+/8Rl`Do,?HDpqY|' );

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
