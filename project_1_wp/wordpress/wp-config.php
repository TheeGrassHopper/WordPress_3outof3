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
define('DB_NAME', 'wp_projectone');

/** MySQL database username */
define('DB_USER', 'wp_projectone');

/** MySQL database password */
define('DB_PASSWORD', 'wp_projectone');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V(M&v%4CnYF|dZUoDH0[w-W#;8bP2Z:w:g)[Dq{h[8@O<B^N9X>l<WX&(G#%Qn:E');
define('SECURE_AUTH_KEY',  ';ls2` Lcn:-TGNqV2:*_OM5fM@lP.)e>*GM`fkC|=E<@3,c{)w/ZXK->_,M|WmCb');
define('LOGGED_IN_KEY',    'Jztfb2j8nE2L9U?O2sR<u#_8mrB|SK2>mc==p5r^n$fl#tXZl@o(r:KEh729=Dqn');
define('NONCE_KEY',        'X7?osA~D]`:wKzT^>1SRn0VEe3ji&u>=:J`]&|64bvOOUm$u#nnRkI)Ya1v)l-@U');
define('AUTH_SALT',        'Dl&Zs<pNO=0%$iD>Kg12v[^KsL]8RF;TI?3L?LYhwuj1Jii r}tK0.;jy?sU3C:k');
define('SECURE_AUTH_SALT', '{^43rp*k9{fpOA]gLJ{$CXs>zIl:0U+Foy-;q@i#%Y{2z C3t:Xll{+^p@1xf_za');
define('LOGGED_IN_SALT',   'MT^^w#Vx!z+*r)eR{V_Fy1}}k@@E6[J!CJw#Ox+^gi+Dn6Wm_W]%J^2eAp^krv{L');
define('NONCE_SALT',       'aRGub1Nj9Qe@]Vk2?E/7C`Z)o(?}/BT(mPjLBD#aKXw&-Bpv yLx?WWxk&+8e[s_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
