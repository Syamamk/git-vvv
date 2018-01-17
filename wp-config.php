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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vvvtest' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'FCYWP_4dp*}n?(|s&eGAx*}Lx@,Bk!S0n|La` h87QGI(68SLcsV&7Rj~@T5}mgi' );
define( 'SECURE_AUTH_KEY',  'ZvgUSZCF#U1ED-[lA:]#~#pu3b~sjOWqP;1401b0d@{J@lwLE2j-&}WxGnZ$k09!' );
define( 'LOGGED_IN_KEY',    'Y@E#9x]=-#,d}JbA&khhJKg_##?o,KJ1$%PDE .Xwq+Ky.EX^[qq]gBjSL6Mk&n^' );
define( 'NONCE_KEY',        's+`^r/YSw.#Oe(e<A,|_ph26<tR!7@l@1dQBFW<DJ};fOwUX2&=|@q}@t)7os`X$' );
define( 'AUTH_SALT',        'O4l5G&G7ZM{n1fp~hkS-43${YHBzh)[Sj2V`n9Mf.+.9.#olxd=d)-|%FsA8(J}m' );
define( 'SECURE_AUTH_SALT', '_Fr^Agr^ ldA.@8-RfxQF}hVyiIlG8Cr7W54LLbx#v#ADAlF@Q/`|M/JC83,OGL8' );
define( 'LOGGED_IN_SALT',   '!YU,ADr=ck4PI_OTOWI>-<a1|k;#!/7,zPWguh`iO$#q=.g+$L-Ll$Oy4`PcCkKN' );
define( 'NONCE_SALT',       'TFJPsxOBTuH1Q.Yv1m&uJ`zA{C=lq+*;Oer]@72C]4~6&+.?TcdD+.@o>gTb[U0{' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';






define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'vvvtest.test' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
