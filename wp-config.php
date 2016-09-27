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
define('DB_NAME', 'db_aodai');

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
define('AUTH_KEY',         '7u}wo1}OQ7[p2wlq|QB?-2r3v^(ykIpgsglK~s(_4@ga?M}@^RB}>ySZhxv|qTtM');
define('SECURE_AUTH_KEY',  'Q&zpnq~?FXf$!7cRdD~Ku8BMR=HK9t/f4lPQhs/$$K|/6^xfCU>-)FW-&oSRlErA');
define('LOGGED_IN_KEY',    '~dUX5MYm8kK.~3a}T*WS@j1,&T!}wp}xJ+%hf;/}G%n(<r`}R19RN[FubeG}y`F[');
define('NONCE_KEY',        '`:CGu8Y1-YbI4LzP%[z>K,/]5z$Lm#XJb?Qu]@^Ccmpm3[%L;%.iaLX3?qcOcS!y');
define('AUTH_SALT',        '%taoSqJ_7}?GP4,:[Cvjzu|{Muj[w8xzDF<*c?F%DMB-KC<VMkW$+`Q,iP;[r#Qf');
define('SECURE_AUTH_SALT', 'FxesMEJ&wL 7?rsUjBe5j{bbN$u1z,P^%6MufR6WoftS&B%g8GEHf&$m_6eTau2E');
define('LOGGED_IN_SALT',   '^Wy!B!4kiUB`g,^piGBUsKo=?8w!d!x[ZC<qLca/+ce(}V` Sy*ig<T[-|pMeZac');
define('NONCE_SALT',       'L+4D=Fvt ~c!Z%}_qPtT-Y/?};zztg.lz<XRE<XJz>j;:JfyXEV(+UAdW7i/c_}H');

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
