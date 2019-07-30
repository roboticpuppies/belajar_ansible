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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Password123!@#' );

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
define( 'AUTH_KEY',         'vx4<a~dn+XUcn`knYSiJms0q8!~+),% f3o1_6mWqI)ZGmBk5>HX;}D)!_pnjTGI' );
define( 'SECURE_AUTH_KEY',  'r?x=|lheyI)8g)BB H43zP;J qL.X+~`}^Qmf@m-TXTpe,1(XxF`g%KCqI{8=FB!' );
define( 'LOGGED_IN_KEY',    '6e$TYBB?nT;3YPVwuR[[%Di72]N s4y]cKbX$bM<YOzGEd?dD}#Ooy,LwRXnx{a=' );
define( 'NONCE_KEY',        '<*5X)hXVaE=8?uZ8&T=)}aUbn}u CiN>*Fa, v~q32O=KCNi2BGV&E/J;/.%A!5A' );
define( 'AUTH_SALT',        'g)v+ BJo+1`OoEsDIP`:OdF-XMH3yoseV}bKm]gZoW*I8;odW?99f.iImSRz~T,,' );
define( 'SECURE_AUTH_SALT', '&fjWvUn#(N@4!gGVZcS.y~7Ab|/yIrxC|vOeY)*ci2}.#2~^=d|H:YNm7ur~lPIZ' );
define( 'LOGGED_IN_SALT',   'abLAK}F<4OoyH C9hC>,F _LewpL.~m:{ g{]-Sb& -AH>=!sPc:5&7O@]1e=!XC' );
define( 'NONCE_SALT',       '>=Bsx8i7}$Mh92x(<Qaxg*tM0EnKM?fNI%6/G@1v!2jl%ax@gU3DjE~nHy<7YU^`' );

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