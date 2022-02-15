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
define( 'DB_NAME', '2022-4w4-3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '$hnG,hm97xo#34GZFm9oNf}uL}h+m/XwMO3*m<I6&iF0>AUprnrHpKbE$:id)8AA' );
define( 'SECURE_AUTH_KEY',  'F5y~wU,!/6bK{ul+>-q BiA7;`uEhtw#m=zAg(,>7T1{Wxdf!w,7F6:4FQiE1s)X' );
define( 'LOGGED_IN_KEY',    '0<~.2MA]2xNi/-XqRUTU9GL*,m#:<pGj&>]aO|c!a&L)9TL>0N:el;#[,$io0m) ' );
define( 'NONCE_KEY',        'BO<E~aaXAkb?sR$Uz(ow!9W{@ZD;zJP7^3RRf)HC.^nwlc4`6hl8/Bj$PeD;yE2w' );
define( 'AUTH_SALT',        '4P[2VAkPz7@eE+]xW:$T^3E/9D/spJ>eCd+Qa8[1rxmFqiUiL!4?*}XA[&j#({~$' );
define( 'SECURE_AUTH_SALT', ' NCKrQI.<Ama5j+gN-I|Du(F>Zf/+ri6R6K6Lc-1Z9pU2l)aJ``GmdKL<+qa[&Ei' );
define( 'LOGGED_IN_SALT',   '<CdJR8${Lm%2#6v[~*!!U,#S+e=IJeq}Dc*o[tO=<I~fcWa=D *fRY]S`aVv}RbZ' );
define( 'NONCE_SALT',       ':bR?zQ_|&tIu=FrPsQBnO>d3Kn4bVT6QrM<WqkcSqfLZ?|8?A$5{][|FQ=N*asNJ' );

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
