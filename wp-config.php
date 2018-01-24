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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpquatre' );

/** MySQL database username */
define( 'DB_USER', 'quatre' );

/** MySQL database password */
define( 'DB_PASSWORD', '0000' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U7.R-W=mRw7t2f)Ig&<Xsl~VK=XHcq-f-]XT$tTz3J4mxdtc{D)4yLRy}Y?1PJ_v' );
define( 'SECURE_AUTH_KEY',  '+Cs8IEU9TKiSQtjC{DK;>H[JyP^@Qm$4g9r0j]YYgRSRy n+3:$Wp,#}DcNt]k(;' );
define( 'LOGGED_IN_KEY',    '=bGY#:G47Q}{t.+;rzFKZNHpnAV?_*8afIh2lY#+,c|Wz+wrVSSgVO+ 6l3-;3gi' );
define( 'NONCE_KEY',        '_HzZ4H73}<sK_21KjWHoU2AY7X;gf9$SFYpTf=R|$j$5Wx{:9/h.^#C]~6@o+_xy' );
define( 'AUTH_SALT',        '-x5~v6y iBe}DY_i aLZBJlpb%^:.rA6$TFLIeE?pBD yZ_?BjR&GjGRBVA456HN' );
define( 'SECURE_AUTH_SALT', 'VK3dT02^{ZbrKk-Ej|DpQQWAwOgX8s,-=i;WTF,%^q??xYEz& .lpP%nvY(YR&lE' );
define( 'LOGGED_IN_SALT',   'YaE=&D$^.O7kUkmJ?gy6%ypVo6K9k.7_qY1,,d3clo<Os=]xJg)8W7LsV$FH?@^K' );
define( 'NONCE_SALT',       'jJm_ F=<r=xh2M4c*_SWAxp%]ZFpxsu-2G:( BP/^WzKqU*exsXG7xt$F(vq+fCJ' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
