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
define('DB_NAME', 'tonerchile');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '?lrj.3=IKD5Kf9b@B=dV=R{?aIFu($&srNN+dq?5dzJ_wKp[H)_-g8,ihl}ghQ)2');
define('SECURE_AUTH_KEY',  'K@{z:D;;-i,D[EI[Z%vbr9iKP|uSY_J>Z^8Cmm?86epzCLQ{-0mMuoXM>:a<Y9DB');
define('LOGGED_IN_KEY',    'mA#DH0[:i/M/fg4rDx9tR.} UDD%Yn*-t7Vuob6;{ZNPOKI]2!*Tw)aP(**noN9n');
define('NONCE_KEY',        '?!<`i)laGfH/mJ%Nk=ooFA/#5j=6d*3n%nXo&hhwrP#3_xP!!1U^>X4|UwA7Guy~');
define('AUTH_SALT',        'MwQoAmFy`b.6%zzRgU%yS^CZc7Xt$-WAsDV;yigVg.5F9:PHI^?hYs`j7Y7M&ybs');
define('SECURE_AUTH_SALT', '6HO}W]2m]g0!XZp%n`d}qnM1sQS8##@+[P8|ekH| b%Ue+U1i:V!S9moh0osQ+DD');
define('LOGGED_IN_SALT',   'PDk-:Tq]Eif1rlW2UnP3X,Duj`a{6b<UM|]5kq;?nz&`$zh`+EB[dXH22;9ApOyJ');
define('NONCE_SALT',       '_v27R1q#9BgY~SfQ:>ltla#,MC^>om9>[3^0`O9434kh1QuF=HI;5pdH.H~*xxe[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tc_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
