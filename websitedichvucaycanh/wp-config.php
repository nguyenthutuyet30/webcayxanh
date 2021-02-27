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
define( 'DB_NAME', 'dichvucaycanh' );

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
define( 'AUTH_KEY',         'c;YitkA3WBmt2:-m,-XdI;KB/C:Nng4E xwDgcS9omL8+1i?%Ru-szhT}DX|5iv7' );
define( 'SECURE_AUTH_KEY',  'G1HUeqOy}fzZ23Wh-HEXDj0oUfj>|GCp,J.CiojSG8S=:2kd4g L uV @%-MDo{%' );
define( 'LOGGED_IN_KEY',    '>`+K@>5 @oI:d XQmClWh5.hp(l/o-cu+TbBo.OCubjrAAUoOXbp+diOlya,36/B' );
define( 'NONCE_KEY',        'U>u4Xmv@]ThqTc{*U2|v9VSbHEs-EXFaS~=zh,WTNc0I-y%1yjF:$vKb@Sy-g~//' );
define( 'AUTH_SALT',        'W49L6NJYOIfkQYgq6+%NZ3.[|m&=[`e7OeKS_n_&RR>|9)Ud.R~L-}#rd`-~=>$$' );
define( 'SECURE_AUTH_SALT', 'GtzW=@U%5,xI2TVx5?<:tQ^Wf5P3FipQm>ClD/FsswHC_A?3a1JC#2Go@N.LHASD' );
define( 'LOGGED_IN_SALT',   'U|=quR+w/VI>olgRQ,fhIlh[ i7.e N~BwU@_-NqD/$cwrB[(zyXVRTTz:R8KGm~' );
define( 'NONCE_SALT',       'M*dSKf0wrI70c?-USt&F=v|&p<1uq.SC9|rykKrKm/Rvj2p_$!].1F0hSV_o0Y-c' );

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
