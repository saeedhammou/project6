<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'djz{G[CdKsVSx$[ vZ`}Rm3N(wL1&ub~&p;xjgW(VA}|WJvz:U8iFh.^^ `NZs8^' );
define( 'SECURE_AUTH_KEY',   '@&`@$NOesRMzn_r NDwuB`PH|`PWWx:Ttp,u5`u*wjx+7=. ]q>Uv#Z^`l4#eAQm' );
define( 'LOGGED_IN_KEY',     '`q%|U|Y?t!C.SD1#?@9(Q`ZjjRlOYKbg86nk{6Ul:q?C*da{|4lkGZwS!L0K%bVF' );
define( 'NONCE_KEY',         '^Q$Tn!&;jTV0*ubo1i4q>gjoj)b)RG1icDW*c5!{gg!UZO&8(2UHBg* fXr4GbZM' );
define( 'AUTH_SALT',         'Li#1||}sUo5<~Z{@Dr%.9nns_rNmP0J~4F&5Qv8_5U:(e7(+|^h|)o?x&JYdDGP7' );
define( 'SECURE_AUTH_SALT',  'f5[ e.?ngn:h,SLW0KVgvH,pLmp7MI!d+#kC`,0mBt`q} *h,pUYx~ &kTD1sr{_' );
define( 'LOGGED_IN_SALT',    'ix[2On|ex-|-,j64O3xIqBO8}TZ}OO%t9Ia%~ ES30o%Eu;j7=LtL%hVKXD%i.<W' );
define( 'NONCE_SALT',        '/ccL-p&}lFUp.3}grHR~O({6UmUfpv!._nI-5wsHg8`^t5u9&ZaUS?gPMQMH@m_;' );
define( 'WP_CACHE_KEY_SALT', ';qKu^d~V-]OM7~4e9SK7kxcA=Csic+z?gF?QOmwy%RlgOY<$OJjae0]!A,GeHRt#' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
