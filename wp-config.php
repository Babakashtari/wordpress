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
define( 'DB_NAME', 'my_first_wordpress_database' );

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
define( 'AUTH_KEY',         'DJ_OvO+N5zzULv9kF9*fj+<,|( T37!k<=>m<Lh.5SqLQSzU(S=WRfOAM/=82wW1' );
define( 'SECURE_AUTH_KEY',  'c_GuNMs.O5k.`B7Jr~t#b.0F2((_Vtv)*DqB[fwh_/K,uzP-~)4<_;q8+rE. paL' );
define( 'LOGGED_IN_KEY',    'g+&Ee%_#p8{p-=ab.tCE{rNeuw*V}kA;:HjWI*)6lS6(x=@yi+|=UuZiE06hEiG ' );
define( 'NONCE_KEY',        '#:}ti7G/.Uj%WfOk@dYQ6Q}b(jj4pP&]BRo|fI*k.X+$k+>eO$O>?$@tcZu6<S{i' );
define( 'AUTH_SALT',        '``$<QhkqlSXlNKn/@.,d#B[Ko9IY2{a3iBzhc+@=F-=`UN^9ozw/{F|F?|v30,gf' );
define( 'SECURE_AUTH_SALT', 'W?i< YXGz1O+i1^:?M9KEA+Ho/j@A02l@Bd,p-PhP}(c{&b7pz(,#<e5_HPWxKs~' );
define( 'LOGGED_IN_SALT',   '>S{G8ud&k5nb-<|{X5,me*O8NgLs;Bo}/n;zEE:8CZ4ds/_l!^_%V7XRHRn<~R;9' );
define( 'NONCE_SALT',       ';z/hm3]HYt%ms;ka%cvu!4Hk$W6+RC7l2U;IV|;QFmzi~y8k;b^=gB QQb4@~md-' );

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
