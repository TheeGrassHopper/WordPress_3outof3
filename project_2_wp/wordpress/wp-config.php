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
define('DB_NAME', 'wp_projecttwo');

/** MySQL database username */
define('DB_USER', 'wp_projecttwo');

/** MySQL database password */
define('DB_PASSWORD', 'wp_projecttwo');

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
define('AUTH_KEY',         'I$6{e#-87$M =yioxwKt%W%t@8&6bd#qlQP.tjn~-5wu8DnUo=N%{_?2y&A<KU#]');
define('SECURE_AUTH_KEY',  'd^> -SGCrB!.Ant>/~}Yl;/uxe1/++O^T|/`TRAjk?,His~=H}3M9=T:I4Pt7rd6');
define('LOGGED_IN_KEY',    'C)J$ a+|s+WZqaaOex#U/1G^$8`ofFFP`OW6]Lm9:2ZN]1oO^9}Nr&P?_+; m`>)');
define('NONCE_KEY',        '`b3YX!? {x/m?&(7uri}1aw5fgK@;r*K%CPi0Em_n[~[[Ai2B%1kDa@#N@ITUYTP');
define('AUTH_SALT',        'qKjcP%S@{[3_7p+1Hrs_)]:(`~c rWjbq>xur~h&QhwETZDVGDOX5AW!xPiC[l!O');
define('SECURE_AUTH_SALT', 'kpeRd:/XSVcXh-N+E9#p5|d`W`qcC{iA|z*xB`]P! q8}o2F_d;QHA>64cqC_GNZ');
define('LOGGED_IN_SALT',   'RZ&S_UXmOO d ~>h]s4W;b.g(bN.:un9K^:13a& <B-=#-+wNbmDBsn*OP`&s+<?');
define('NONCE_SALT',       ')2csC^_2cM&?ih){=+c?G1-u@dhF%WIU-5_yE+Cl/{kL&h6pZ3mP_gytfTZt xag');

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
