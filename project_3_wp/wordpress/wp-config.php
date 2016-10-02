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
define('DB_NAME', 'wp_projectthree');

/** MySQL database username */
define('DB_USER', 'wp_projectthree');

/** MySQL database password */
define('DB_PASSWORD', 'wp_projectthree');

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
define('AUTH_KEY',         'sE]Q[6y&;m,z:+:|6-wH[v&qLIzBg,(#Y1&W-m_^=t_Bskw),Y{Q$y[7P_$e}@%`');
define('SECURE_AUTH_KEY',  'Aqu?DdqrO7KT|3q}yQ]y!dM$=TMP9]-E[]iyeB85WL/`6S#Ga6{zKFx*zb5iWq$#');
define('LOGGED_IN_KEY',    '~Es>S}L+-WCzd#ipUreT{Pj$Jo|Jwd0W?JUxJ!IH2JxJB@zT9]%<t^z!2bi=%4p?');
define('NONCE_KEY',        '%ZM<Zf(O*Ub02e6FJ^(@Zo3D4-bnP7P17#8SHHrJgh8?3+,`}2{MhnQcK*/K(Z>n');
define('AUTH_SALT',        'Q-#.vi+%k8iE33&G]8~iLV`_fpEt<0b@[0?%3M+Y^[dVpvZ:TwbxWRG)WU]DV$.!');
define('SECURE_AUTH_SALT', 'kSp*+=4U%Dy0_5n9vH:{Vt~B,0IRQ%vy?;6{v},w: ay/8K#$kN/ Fa,$mR)~5 P');
define('LOGGED_IN_SALT',   ']{)0!T:10,1`0c((NucM^@S#K|h^;46_uWDSGR;Q&RWkd?(6V28.l0_Iryurg3{p');
define('NONCE_SALT',       'MRsDfz_ *d)lfH+kc3t1fVTx,2i5r{6d;6(-t-._eB{+y@h<Mo5vR$H$@S7^M,q{');

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