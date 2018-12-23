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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '48e08dc62fea4933fd3209c0772f17d873fd859742be688d');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '_1:9QZx_p+5$XN/G7!8{>Cj1=i[zYgRNE(CnJUXWC8}b}|{zxb2<FDZ&%V<WWUHz');
define('SECURE_AUTH_KEY',  'ZCNm0mwxb#WiMDLFq^M>]itb3aM+W,xH9P0[R^W 5>5^kRI_){MAt%b(9GuCdo$A');
define('LOGGED_IN_KEY',    '(hZ}Fc-~~x:1d@N~@4,cYN@mb_F|J4iPGv.1v@i].Sct?ULy4C{t9,2]jFW+K[er');
define('NONCE_KEY',        '{S={%eTmGk}PT#V[gx>rare*c~;3b}y!-I, fQ=9n{u${?j+Bup49x(H%7DqO?<S');
define('AUTH_SALT',        'Q&.m~RLUD_:no2K8tk*FI8OR3#q/+BYZa4BZ+r9>F$<&QI5*^ yzE,VT`SQ:/=YF');
define('SECURE_AUTH_SALT', 'il)JOLt?6FL+G,gg5k*Y0[B5jKj28PPBZj0]%v6[~hiPC!5n-aRTPlg(^ q9WY6W');
define('LOGGED_IN_SALT',   'zBTh%OM95h$K/G44>[25@<TD,`$o]{b11DEpn9>ZC[/4B%@S|r{G494=/1hm>t[^');
define('NONCE_SALT',       ':41S[%wf.A9+.nh@K^f5[Bi[B40up@| 0nK-<Rp~v)KBCD:0PZxsUH,ED{Vdp@E[');

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
