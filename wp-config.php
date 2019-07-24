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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '.&qCv[%n7Sh tv}|Q(F6ljKJT)hgZd^{6gc!x>([T3![ytO$`_Wr^%Xm!#BE?G1j' );
define( 'SECURE_AUTH_KEY',  'X]f1,`jb%F)_5Ri1pek{9z cx@:%!l)l%eU|PYBF=zF[2f=lh|@_q[c6otnib=B-' );
define( 'LOGGED_IN_KEY',    '<#VshN|^-H!Lp8Qscw=qX?q_t>l0~oCVDwn~2x*Oj6no2inO/YA@yTuk##(?Tv7{' );
define( 'NONCE_KEY',        '1<,Ihk${IJ%qtU:UNE$*)hL[gLxpa^(-MN4ID` zbu;VDGc^b=JFK;,*s^6)%b`X' );
define( 'AUTH_SALT',        '!mGDbbZ`ugcCABG%AY^~2%z!U2@4O1rUKJ-?]:myvzY}=u>3{<t;Zw6a~)2IM-r;' );
define( 'SECURE_AUTH_SALT', 'yqztJ752V/Uf{im.>IQLfmX`tPX+_&Y@|`_o^i?B)#G]gg<?5=^M?3XVPI%lCdSH' );
define( 'LOGGED_IN_SALT',   '7.89v^Y4z?1aac*{b/ED(i<?kRG*~h+%)Cjt?#E*mN?Yqw!)h<ZK_?_kN!ixv#pW' );
define( 'NONCE_SALT',       'DH5SJ^Tq>pC_=E$g(8?a>sN&3$Y2H)>2(.` 5.]r6V1@fDh+h#Qy]/AS2(`i.+|C' );

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
