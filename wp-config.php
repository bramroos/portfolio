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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '!I$IaNcL+d%-e L#-.2QlLTs;6Zh;BAet/D;{.P2n4#)Z4aE6kWFqvm>%;zx*v[]' );
define( 'SECURE_AUTH_KEY',  '<=qS[Xcz/VCt:b`0N<lF<^b8y&_p)g#y7ob[rq-[^y@QYMDWRa_[e>J&8jG8U`1H' );
define( 'LOGGED_IN_KEY',    ']fsBE!aIa%C]rBE<tJhF;&HfA=)d7ttdr{#!.;^?KK/ZBZoj)IYFc%(h#(^zEz=L' );
define( 'NONCE_KEY',        'L;`#^A(;)+gS,L-Rr1[ K_W#y0=T@6W2$oWXtd$p(,(*fO0/j!)aQj5Q~G9JysZq' );
define( 'AUTH_SALT',        'B?p2Xz[Ex=}h79;|P re8!|>q165BR>~@(qD&Mm[hr^!uiV)$mq:dnYJ obbCq{U' );
define( 'SECURE_AUTH_SALT', 'uYSfP?m;STJLD>8vU{8Gl8Lxd#W)4.4~I]1gzTL+4U~gKg1O>$i.=m_-8iJ+D 3=' );
define( 'LOGGED_IN_SALT',   'Xo}f}[|YrWl/KRr:54c-VR=hnk.KiPCQtHqSnf)PpbQ5tOKuWyw!!9I@1!.CJ/mm' );
define( 'NONCE_SALT',       'Zy_pnm`_V=xzo+_WVorhx+{;N<VYFJ`MtZb5!+ZKt#1q]?>4Q1Z*nm+d:TlNL3o~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
