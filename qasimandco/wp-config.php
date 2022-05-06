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
define( 'DB_NAME', 'qasimandco' );

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
define( 'AUTH_KEY',         '6pmJ;xH)mPbl7<^VrCt&g{>D;{pn>;m5~eQyoGZ5O=V(,(1)7.L>Cu(,WC%s!:qQ' );
define( 'SECURE_AUTH_KEY',  'L]v{4vYs[l$%2rximZuOFTMt29%S.}2A<9S<m/Qx5ypxlWT=]XxyP 1FT!=e>3=n' );
define( 'LOGGED_IN_KEY',    'DZ1N>>gaZh6xy#7#31;>GZ^%~&KD1CA0Q6v{hl{DS]YYmnL*]LW#U{b6r0|k/!K:' );
define( 'NONCE_KEY',        ';2!v(Xx*G8!@(g&qMM4/zpQ?t3eTAy$!l`PDu[7DhfFY(H $5AG/`}a& eAfY8Qs' );
define( 'AUTH_SALT',        'eBV4c8|D6vOZIb@5sZrR`WJ eSLeow$CH1Dnd)rGnehBu[>BWtcR<5lL!6R`> B~' );
define( 'SECURE_AUTH_SALT', '~SF~x*b$Ig3ep2V.3A?KgC ?/r)kH+inE9!Gim}VHuy^K%c0?LdncwBjuz0f^y:E' );
define( 'LOGGED_IN_SALT',   '4kdfQT(PfZ01X=ry!)tz]+~TJ-7B$?B l;1i=!}?JSvD7)uTiPj^SXBG4OWbSVkU' );
define( 'NONCE_SALT',       '!Z-K[whe<En+[SR-h4}iz6xq2Rs4g^/m>2AC*eE?[5fBY~a,-0{LO$C.%H un8-~' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
