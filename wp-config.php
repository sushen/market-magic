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
define('DB_NAME', 'themetester');

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
define('AUTH_KEY',         ',miJq#URe^$~Y] ^p-|VI c^g)~k*TT!U+xO5Kn@fz(b`|M{i_,CD6G-.sI?+aOX');
define('SECURE_AUTH_KEY',  'qu.bfZ5S[HdzXl/Ksc4vmSe-+`664V3leq.F|n7jU%1?`V;!=I>{sl-`M+:c{%D|');
define('LOGGED_IN_KEY',    'c6(7{@r@O9fs-c0xbnt?Ly-OKS7b0D{*Diz$wkGzW3Tu;|l{4lz+^Q2gNzM&|~^#');
define('NONCE_KEY',        '+(Y%Gab`I+5tI+axweZ_/Ka5?Ru31/+lOCl-|b+C!$E|xBdu2(G#{RnJcPO4b.&+');
define('AUTH_SALT',        '--P*3hfr>}6W6q`n!*]J<#(_SZRk},&SHC|+M`RFqcbOWE#zFi2OAU|tdOQ7GSdG');
define('SECURE_AUTH_SALT', ',&+}(*PVV82w6WB-mMBx<~RFJQS7d]XV*tf<lk&dfNfEkZmZS(M^17sIvKtDGTY+');
define('LOGGED_IN_SALT',   '+d^UR2L=1?W0/^R|23 3:c_]|C)|XP.jEN0w0LxeMqms#6XBH8%+fBF4+-4[Aw%$');
define('NONCE_SALT',       'v_,F6`/%AvgR)kV/6eKqT&k#sl<s-+q|[dTa]W]> Zn%Oh(o^J+(Er-`2Q}O2J3?');

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
