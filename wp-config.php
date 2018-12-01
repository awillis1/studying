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
define('DB_NAME', 'studying');

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
define('AUTH_KEY',         'Iw]Z9;sTSor;HSDI_(i0=5$>u]*%>`AQ:{2C:k{zyqITy]^[kU|[Hc;/j@HKkPWR');
define('SECURE_AUTH_KEY',  ';d>1L<Ivbfl(5!4>K{>yy&I[zh>]Zw |RL}uOH(VrW)>??Cn]zD)R+n]5Z{oeWzN');
define('LOGGED_IN_KEY',    'M&{5CU[X~#XTy{*R<sjNoPTiF!dQBzG@!7ygCA-1=g5MVCo+L+2eS?YI*oM!|X8o');
define('NONCE_KEY',        '4P(L]G}1cD.0g5sHhBA~?Zc9_df:/@i3_XGy52@PEh^G?:==rHMf;!-6bYGT_zVU');
define('AUTH_SALT',        'y14*j?9F1)F-xt8,,cLM=]rVz$[x2`p,X3]<YwGMQ.kzEPK6!MRClmK}/PCPeQ6>');
define('SECURE_AUTH_SALT', 'hnV8!>s^+ax?=CJ2H~&v]2I~0tst 2Lze~,RhkQ#]6O>ynr*Tr4w`HVm=b{W]+We');
define('LOGGED_IN_SALT',   '<16!_8{4>XX70t{bE6bUf1)WU(Jy-fC[g0J/TQ`k3ygyfD@9t[DlL,Flujv*cH+I');
define('NONCE_SALT',       'yt4+Vq3/tCjZUb$V$&Yb3r{!}^6M5c +^cFEf#tq@GDI:VSmg%!~Ima~(wNd>F(b');

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
