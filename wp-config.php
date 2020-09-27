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
define( 'DB_NAME', 'tiendaOnline' );

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
define( 'AUTH_KEY',         'n9R]9,>{!IaVy/0Zf|apZ/tEsxJZO[u$E;m7V?y1*%F2e}FT`^~gfy;%km:f6)_!' );
define( 'SECURE_AUTH_KEY',  'NI|P;wFdG| )WFs}UUc)P_mdrdz!><{B<-uwP}kLK~2TohS7)lfy%U2R ccH4`S[' );
define( 'LOGGED_IN_KEY',    '>Vr%jU%DlTx21^{xaBT%<E1xS+jibE/[o=!F%7tSZ?]vOq*uf<ORCIXQ{yWfAPIZ' );
define( 'NONCE_KEY',        '17q=Be[I6~{~L:.gLSq-0cxP$Jj*bdogd-`4svJC,5m7an~O%-FY:T/:3Y2yQ57<' );
define( 'AUTH_SALT',        'Wo$YNa&TXGk626U|>QK)-&0Qeo|&MermL;=I?> ~fa*wb/g>uK3*>LA2P4!q/#Aa' );
define( 'SECURE_AUTH_SALT', 'hi-`OS&#2aD57#q_4:h1tkeOM|3P>[[(K-F>hR5v7q9`},]oB[4P>-Q+47*1Q0c3' );
define( 'LOGGED_IN_SALT',   '^<2aGYDY-;`;oPujV+qHJ?F8%() ;J>,APaC*bu~|!_d(l&lo|1LLQf g*7 y(`Q' );
define( 'NONCE_SALT',       '|c^P!_fY2QrvuS6g|@|=gpx+xnYi]u/!0(kn5yeqIrNocHL:OB$$+U/u66`M 6=,' );

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
