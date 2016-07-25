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
define('DB_NAME', 'pubenlinea_centralcoaching');

/** MySQL database username */
define('DB_USER', 'centralcoaching');

/** MySQL database password */
define('DB_PASSWORD', 'thewecR4XA');

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
define('AUTH_KEY',         'afa!H,X9z4X?,Af$hP}H#~E>{Y.Oa!]MbO|`u7-!GtSDOXd.l]!dUl1@X1xG-v@t');
define('SECURE_AUTH_KEY',  ';6^A-wlf(rE}RL>0,#/~4P_Jl6<dmHl_L^IbOMcDDs(:%2NN71inH2z<!*D{0$(e');
define('LOGGED_IN_KEY',    '+5o/,OdX|5n<G,T]f}SfACA+YShVV_q2`;uCJL1mmmCm?8;R0xNj{2JzIf?9E15~');
define('NONCE_KEY',        '%Ocak`c7rhoL~.](jh8^HV)czmy$Ut}y,<gk~>vB]GoD0WO=P_8JlgD+|JU$bEWb');
define('AUTH_SALT',        '/Zi7-hgio[lt-Oc.cPDDNH>QrBApusfk?oW.8OR8jH~/MnK#k({U6Fhz)&#[9fWh');
define('SECURE_AUTH_SALT', '=~p n iH{)`5xOe=-n1YI1zNiS7MwiJGHIPO>6b)>XB-BFxaWHO1xpg~Fn,nqv5;');
define('LOGGED_IN_SALT',   'inHg[d22#lGdwMO(2Ocnr<Nk*3Fuy<#pJ;}ljF,Mbht2i|;YNC?afnI}>3L)Gkwr');
define('NONCE_SALT',       'r~A+1@cc=I`AR?%hf@a+AL !P>TTG#<9*wKO2p3+Q+D^0=p$1YK*fvRU2lR>x(dZ');

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
