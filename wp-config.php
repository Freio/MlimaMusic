<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'WPCACHEHOME', '/home3/mlima/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'mlima_wrdp1');

/** MySQL database username */
define('DB_USER', 'mlima_wrdp1');

/** MySQL database password */
define('DB_PASSWORD', 'ajdKq1aHtyA6WPrV');

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
define('AUTH_KEY',         'duH9lxE1C?;mUjnEB!JURK!v?CxIm*F_TKOb>d#:GFXtMK@s0!BbvnNpp_E>0ww>Xzs<9?UzJy0rv/');
define('SECURE_AUTH_KEY',  'xEz@dCyOQT~U8!cByo15$>Uxm\`TX0;YPR/Uudh3omASaEH\`qwKqndKs52b(*6E700!w82g31?');
define('LOGGED_IN_KEY',    'kTRjHm:|KGqC-OcpL0r9sSSkPE8;7IeFR(O_$WByt~?-B(3GN?uBw8fT6CUCsGMV8j9u#|yNqlZ3');
define('NONCE_KEY',        'd*5mR<_;D1*>Q;2I?M57BwKc8Kx@SYb(:B/T-36U(w0VT1w_V<O3\`V24nYg?jvR(>4HIa~ond;');
define('AUTH_SALT',        'L|eK9gOw^Cn?G-3ZSZeV?ToseccNpm_jbiFYu6YNH*#WyI^oj>8YSj_a*G;AM=w');
define('SECURE_AUTH_SALT', 'h<TC$TLyx^nBL45><)>0*=JVsb0\`!WcM8nENkhtFZEvmhOX50u(lpa<g>mL_:)-h>TLQS?S$1*f?(nKg6uURcx');
define('LOGGED_IN_SALT',   'i)RB||E$uUKB$ECf8\`~1u;r$9EC1=wQJ(nxG^75WqpKC>^9s-N2w-6MOTmB;ez');
define('NONCE_SALT',       '4aN\`^RS|*3>>p7^F?2<E!cQ!g!e6d:\`kyUTm6=tHmPOH1#U~TVLH=Fb>i2Pza;E<:t(3/<?QCWP!!ofZK');

/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
