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
define('DB_NAME', 'wp_wikipoliticacdmx');

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
define('AUTH_KEY',         'HbT%aV_swtD$`Ef5]g=0;/#|*Enj8E7hwHa!b%|824Uvy%h^b(4hk9Q*<z,,BlL}');
define('SECURE_AUTH_KEY',  'jzo6i6pxq>bk,;75(Q$uL7C3W5yq,GAoD@W5Si|^:/.zN,-i.qYy<NEaC:0^**HS');
define('LOGGED_IN_KEY',    'v.;D*e9Ge(+o#0-t%Fffl!QO>SV9M*UH[@7ok(XK1Yp3gPi^AvLOEYJgikkG)*J(');
define('NONCE_KEY',        'i!;l01/SK=qpwKdHJR-<E=xOp,YC:?~?eZ#|%a%IQZ^fXCd&YPz)fuC`kO5zD9Eq');
define('AUTH_SALT',        'ec b$oxvVDU=:XDa8Pf8,A31wzuQ# ?.*!jS01]9,&iC|pyfqAUqTo][J#-?#6ki');
define('SECURE_AUTH_SALT', 'Keq+@4Lkih}&>uSa;U u4Uef.8f?]CMz%g0}6O;b)dCgS%r>YqX9*{+/t1,C#{[S');
define('LOGGED_IN_SALT',   'nZo9BQ}t%dX?+<0SQ$*XW*.7/+AJqgww.Z{%b&t544%-mt]Q6L96J8<ug(0Laak3');
define('NONCE_SALT',       '$T=cGn#*=tZ>W4uKx0bji365__/c@m;dwBO9Et/ QvWqkC](JSM#Zn]N}UC6Npi9');

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
