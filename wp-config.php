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
define( 'DB_NAME', 'wordpress_plugin_development' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '4CI#2$=7ZRl:yZrebKM$]LRiw+7>DuTkI [SBx<H|N#Q{V8WR%xZ.Dh0|T;l:w7F' );
define( 'SECURE_AUTH_KEY',  'f)$b8#vw9?`vc.]=b39SGFyA;aiEFY`(D7@,H4&n)}K](cE{$Ul-k[$^ZmF-9IQO' );
define( 'LOGGED_IN_KEY',    ']PTPCL$+>odAn3TIK]Q&{(h`n7$o C5_|mF[SU:t]_;{qO.kDZ;nI3UQZ2/~r]!J' );
define( 'NONCE_KEY',        'UP4OuToP/fOG0)dm1fHHq}^iIEt4@O%V?ILG4cywzx:)J]ol9^Fs*j2*.Qh >[lf' );
define( 'AUTH_SALT',        '#04<djQ]!0.UOeA)<`X[|?_>|$tZ^|4>PM9CG$Mv?DPi^OA^*6di!a`[SV_i3U>K' );
define( 'SECURE_AUTH_SALT', 'C!:KVp~wV=%@jC|;xa^</V[Et.c*2Ff(S/axINOd%=el8PqSG!VEs^[sC;zFmdrw' );
define( 'LOGGED_IN_SALT',   '/j !-K~])EdtiQbv>p:.0bOc)Y|+jQOs%N?#:A|61FU_H`^#>bG19LVOn[*g]s.c' );
define( 'NONCE_SALT',       'K%BP_c1tukP!$y$Hh*VVi|&@64bP 8[>wbm|BNfsU4TFNB5*#%VD9RBmzTG/9gN{' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
