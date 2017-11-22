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
define('DB_NAME', 'desafio_wp');

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
define('AUTH_KEY',         '@FAr>dp>u h6|6{UG5AU$4[R*MlCW*mlVs+` 4g,U{=9)m18;$y}j5_p[y(ErJ?K');
define('SECURE_AUTH_KEY',  'c*X<eA{4!-F`cmzTo`&K(Rvp;>_@NNo<FjEW_TH1<0k}_ZA4hu.mn3+DLE!JfXQX');
define('LOGGED_IN_KEY',    '$QR~u-U<# TdM6G`^{1;Fh{Q[s3,#yJhcaGnq({-X3/a.q^C;7._?BKT3M f]128');
define('NONCE_KEY',        '#W]>~9D=gR3[h/W/nvqMQn4#y36~%wO5bNO-Q(nzmAp47xJkz[#-*eaS3< |/>?C');
define('AUTH_SALT',        ' `loI>IZG IPZN|U*iUMT%s.m<K3<`mC. -vic%m7Jb(/+ON4O6GySfB./2PB.AC');
define('SECURE_AUTH_SALT', '00C=-+eX^z/G2EfA/%**g-@jjjx6cz|pYt`q&TTD}+vFX75}iDgY1v7<#ts0kZL ');
define('LOGGED_IN_SALT',   '{8rQqT0K?>k<5-Iy K3Gf/8IB=/6uuX0G?y8Md.p2X=U%Lv9}S:Ax2s+Of]=D2,X');
define('NONCE_SALT',       'L/@9}D:1VgN4ZZc?zYE7=!x%s%O8TH&4Wyer6*n9n.8INk*V^F|UzF+MziI[QmDe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
