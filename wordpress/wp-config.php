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
define('DB_NAME', 'ride2work');

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
define('AUTH_KEY',         's &$]qY4Nz6,n6R#mjdzU|QyB~=7u%Rgs4b {=3)QT;%|RwX6QHCr1Q>c4jPD6:-');
define('SECURE_AUTH_KEY',  'YQURpQ`#YE)~dE*{qw|0J>?{~X:al*t|(2{*nK=$_N}<&)gn-j=@Fsd)JXuD6Avu');
define('LOGGED_IN_KEY',    's3eqF}!9T+yBWa3ZxQ0C|M]D3[32L65N#(ARC!?dF`=QpCJVl}n{V7`=l4@:L)jL');
define('NONCE_KEY',        '+)R/GZ8DZ&eVha<+1Oho4d#_c2xC4@l-B%v18ic2sK>-rQje>tGs&xV8Q4<s}16f');
define('AUTH_SALT',        '4J2H1:&@C@%#,_bnl@S5+oh[Tm[v.(};zYU; G{nwk#B_PEiOt1!*~4Cq$#;#6t ');
define('SECURE_AUTH_SALT', '+1#S6=Q_VPkvIcfI#c<&!.E t_N5a-?nIik:HWl-=rK:imoF:9t]vP`|x G|>NCn');
define('LOGGED_IN_SALT',   '!?AD,TgP:ulSOGT;+<7E83x@J?*]UM9gK9,nk02bWC%h:I`6U8{3-Ig$uRl/6%.%');
define('NONCE_SALT',       '-+<*b,O.NzJanPcpbD7`Z-^vo&6ZxOB.?c,3h|XXQaMA1q6])92 )(i~|T)4*koa');

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
