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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'freshveghgt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4:8GD>^LGe>`iz|0jF$+B6Al.R28!h1t=:Ek=qld;?@P&xsy-fHE:mn6{hBnyY46' );
define( 'SECURE_AUTH_KEY',  'Gu,7#v;QQj#tQ&u#hKVL?z!{&RU}!oMb.o3]kg+&ER$)$~z5&_5Pbp.up|WFp[%E' );
define( 'LOGGED_IN_KEY',    '@</KpA;{WEcC7IX8?Jvm`5@#yy>7w@=n!V9a;c^f8Xz5nU+T9 @CrD2UC:|bYqUt' );
define( 'NONCE_KEY',        'jE|${h]lAvJ!{A*4&]%&L!z2VE?hW1EaQX44XmwdlFo(nI|R5dS)9rm:<QdLnGc ' );
define( 'AUTH_SALT',        'VxwDJ!U%y98FQ%%U;_s@B7xd4Z_#URPd!0*03YKNxTxJa_]pNX^-^2!Z9G)Fb;xr' );
define( 'SECURE_AUTH_SALT', '!._A^Q 9mk/~jk7:;ty_(M /6Ua5v!vzGr?bNQh#1]nCj[mK){4nk%(FMg:k>&p?' );
define( 'LOGGED_IN_SALT',   'Lz?+kIjhz=]e$tkPU*l0nNSk#n7(hHKjAGGJz&NXQ{f424I0L4g|Fx~t`#&OAgEM' );
define( 'NONCE_SALT',       'SKgzzh8?)p#F:%BIeSIO>x?SH~4{uiF^*W.jcij,nYR%I |qYFdeYK91gXz(e64^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hg_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
