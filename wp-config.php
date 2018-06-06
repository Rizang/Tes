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
define('DB_NAME', 'dokter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '|s>K6>@FgQH]~X7RQR6}p;eTrD,tq*!W`U2m<1a[7xsqUjfkJZ<LsGV!&3fTlG&L');
define('SECURE_AUTH_KEY',  'p3!Ai?DXHw9nYfJkcU+`upe-mf*>)bkQ<|{0B?j4#yksqf-$8av *+Q}) Uk>)^u');
define('LOGGED_IN_KEY',    'U6a[&IoB9|7%u7Rip+=EQ~7?Y:zR,kwJ2,x7g>,>$MC=@~j$ZH~a[t,]/NZd:k3v');
define('NONCE_KEY',        'EECjalnu@Y~$-e3 dHKTNP=^5`eD]Y6#gs(S!J?~mhro=W48mh~_;(G:*I1)vfb<');
define('AUTH_SALT',        'hLT4FeeU|=~IcKi%vn-[K/OQ<sz2sE)o~M_4=-V+GkOtEON~2MP![ymz%sW|N#]S');
define('SECURE_AUTH_SALT', 'A}E[m-}i;L9+:kOk*+/)42(-KD[s@r~@P*`<=6|B[#,5a4NidC;]<U*J!TYSmrJ7');
define('LOGGED_IN_SALT',   '%g5l<AjO:wb]4aIN)bC}A}gWkzVY,HTlPFTz.Bhy+tzi;r8X-?N$5%!iN9?5,5xn');
define('NONCE_SALT',       'i4>OVT7gI7#PCuzob*Z3}03Q2DDKe!{x.ZV=|0cv~Lf7>5Em:cBc9m=muMj{sxn>');

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
