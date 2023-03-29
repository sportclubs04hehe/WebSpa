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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'spa' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         't-!>&dR~pNDqcR|tpe>-I8^J0j] g`x8,98}_{AQ.)Me`E{<CKI-Q8k~R</Rz6U>' );
define( 'SECURE_AUTH_KEY',  'TdFn~u%g~ijY(9GgXWG0,=yH{&o]PeAIA{$4En;ZT-X7))]}yY{#cEU`I(hQ?Am?' );
define( 'LOGGED_IN_KEY',    '00-3?KRLa[`hik_tV`9_I***odB!.Y$kXuKRo}-fd/^wwvN!tr,%oS8w]W`V#vA]' );
define( 'NONCE_KEY',        'K`!fJf7b~NW`TH7r;FDWrvhR*cfurkOgzne7sj)sJcvPnrb0!-P*pUD:RS3mgJNh' );
define( 'AUTH_SALT',        'vS69s`g<$E<^t;r-&iC($#;&0=DLzTyC9[728Ktx79<9Pq%V3hg%?2H Lv(h1*]?' );
define( 'SECURE_AUTH_SALT', '`Asd+BEUlwPE/:#|<B&u>B+?=);:M*[GQBVET7j2mTM%U}h>,B2:I]]RlVdlgPya' );
define( 'LOGGED_IN_SALT',   'V|fHvg.rq03Di}!a[Mbm9KBsw(E@-F<71WRaDYA_R!:4 V(m3RK4:QR/#uDdb-R:' );
define( 'NONCE_SALT',       '#)fo,jYWCS9=q{@k[BH?$19b|^fELIq{QkS~Y2zt(ys8nHZU6k4yjTHC~q7,B,}R' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
