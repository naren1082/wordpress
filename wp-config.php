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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'R?Lc]C=LF2#O78(5&b)VcZ4*bP/gxnI`jZTdR<R0{z{5MefYEMS=>,SyAK.pcfNT');
define('SECURE_AUTH_KEY',  ',SRl`7(iZ&,+,Y45ePtCa4??o-8c7V4BF-&U_9x4zQ<)o)BLB0>prNO}m!NaPV*9');
define('LOGGED_IN_KEY',    ';iiZ5A)|):z2}89}Vni2KOV8}{$p1FG%QP2k7mkf0R6b0EHo%5k[t93]T+26U*]!');
define('NONCE_KEY',        'B%nvHLZzOR$Z8E:0BsS8a`A8NX^lp6Ao(oQ$rlWq9;|I851,ea{lNBI}tD@,Ud,F');
define('AUTH_SALT',        'PeU4gAFI>>EG8.7;7ql6xzDR5gg~dmQAU9pup5ND>nbjON`Rq7H.Hg_CA@gEV9/n');
define('SECURE_AUTH_SALT', 'Un:OH3)k?a~d4i|2=M82Ep^vv|FW2Xunai9mCW2BCa-{AYWRmrHVS{<heX;JD0GH');
define('LOGGED_IN_SALT',   '-;T6{hl]8bFKzm]mk&T^QZ=|kHY)4qjk]RqSd7%^aSA<9wCL@ZTTL|C.FQT$ZHhH');
define('NONCE_SALT',       'MkjveUikWom`5RT/<MMO0n0LW:uFs} mlTt(YjFfoiO4 S!Y**Lk2;M@c><82,-a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
