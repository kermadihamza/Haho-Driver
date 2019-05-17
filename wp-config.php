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
define( 'DB_NAME', 'HahoDB' );

/** MySQL database username */
define( 'DB_USER', 'hahodriver' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hahodriver' );

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
define( 'AUTH_KEY',         'Z#jS1nr6AK/~>YuO]CK6%(DHS:0bDt+fo<C9,xK3xKV,&/`l,[nR9o&O`b9CZfq#' );
define( 'SECURE_AUTH_KEY',  'WpcyV1h>tk#{@z~}lQ3R?rGjPf$>m5!}@kGEa4rU,!b=puN(]GhDKi,R:/C9pqyx' );
define( 'LOGGED_IN_KEY',    'b=}M:SN.`h<F&M`L-`Q]FRrXXJOVp-B5HWY,@Zko6TL}E|LKV7qIFdt?tryR$7q%' );
define( 'NONCE_KEY',        'SwgRQI^LR$#+AO[ex<yK[]1>vHBhsKevq;:!=MswIFR)#YmLDv@W09Fg0oHi{<3)' );
define( 'AUTH_SALT',        '6C2:qG;L<OT.Z__h A@:c/|:?*TM!,DySTDM-2n`!i;D+,^p7CHNEvLzh/abR)C_' );
define( 'SECURE_AUTH_SALT', 'e3y(d0|H?^>CTPQ@-ntw:,t^O<$rS|%;}hWUq#]+-;D}&PRdo_.rW2OSI<k*/*>B' );
define( 'LOGGED_IN_SALT',   '%Wv~jN<TT.>B,qQ9vl.V@C ZAF:y1G8Fs)OyFw1uEoz5+utO*aL`@!5?dd3n$!%6' );
define( 'NONCE_SALT',       '}KRU~|}c0/}NT|hhzlye2L:D--AzX!QqqEC{Q4e<shZz!h*Kq>,>3^*>}ao4!jlo' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mg_';

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
