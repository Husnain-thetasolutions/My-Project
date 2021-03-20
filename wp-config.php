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
define( 'DB_NAME', 'second db' );

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
define( 'AUTH_KEY',         'l]fxK!!egt;)={z1+Vf|pUT!cjd?(/+hPN78jU1p $y_I8>?w7]%[t19qrMBCYeX' );
define( 'SECURE_AUTH_KEY',  'P;cznr=35fBNq&,01P1BlkF)`kVj942g~Cd4VG{NcT&3F1EN2oEQkUIW2YL(BH3C' );
define( 'LOGGED_IN_KEY',    'e1A,RMjL-8Ss1eG)Hv_TL5Rs0a&i>UEf^0?8qW(2^-S*4M>1>(K+iS1{d!xokK1!' );
define( 'NONCE_KEY',        'aq#=QhNR/t=9(H`]ohAyQbq8exNG)+VCD]zuk}0]<WD4_2|l^&sg(T9^*`}`^Ix{' );
define( 'AUTH_SALT',        'Na=W`Un}GS5V`(|&E;:0ue)Br@tv^AmNV7psck}bLs,^guHz&.4rV#L&F#|qVD?y' );
define( 'SECURE_AUTH_SALT', 'oV>~:2> m[CfX~u<H^2iF=K.q.u$:l(y_N4BX ><T0y;J`E3XikAY?7]&PR#/IL.' );
define( 'LOGGED_IN_SALT',   '#m680rW8Eqj3jC+o&3>~@F[X#j0W=Jd+!T&DhQEgEN(94 H=D<iTQyoV6D`0^nu>' );
define( 'NONCE_SALT',       'EmyM;}1hBqVX$TT3{OpX)},gh<%0EA{i>b^ncH,Xs(R!O!p!6r0JGPr/=lw=JU4t' );

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
