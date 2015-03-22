<?php
/**
 * WP Config Sample
 *
 * according to new composer workflow
 *
 * TODO:
 * - database name
 * - mysql user and passwd
 * - hostname
 * - add salt
 * - define wp-content directory
 *
 * author: zachfedor
 * url: zachfedor.com
 * license: MIT
 *
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database_name');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'KYZDe?G&UG.ieho:V.lnkDsZ@+*z:-C@[mA}f?IMeo}u(/-24MRVOd`y4A2GaFyX');
define('SECURE_AUTH_KEY',  '6msnF2r@PKhAlL^}[bTqq_tvHT@Q_,_-!~2);1|W2Y(q30f{ ->xfa/VVcS_8G:i');
define('LOGGED_IN_KEY',    '<^kqn/42*-#)+p|:<RGHL-%jj!wvj3(hvnrs;F+7G};[CKQ}fCNEA4Y&BK2|My:`');
define('NONCE_KEY',        'DzDGf`&o*!CC(ec(|;~yHzmTaS{ez9FUih.6DNy1?yTr;V@} bdi]A8xMDld1yS[');
define('AUTH_SALT',        'Mvsw*H>4cJgjO-dW$7JP]h9:}WMu/~4j@oUtQ(:|@FCztymSh0uPhfYvP(My^w7!');
define('SECURE_AUTH_SALT', 'X[%p:m^t8+k`W7jysmCB+#KRS8G5<BU0P(k(vp,9W/ToAm-a2uQz0Yr=Q$d;c-$7');
define('LOGGED_IN_SALT',   'f+E!H0A& KBJ)k+pE`?ypJiFU:qX7FVsq@-v.rK+!+8W9FIG0F|Z|XP3GpL{=Ky3');
define('NONCE_SALT',       '$2n*|lA`+34 o94x`!r5jYBbwg|]QXuu.BZ)r|L[cr145AIv$JQ-mVx`F^*^xY/p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Defines path to new wp-content dir outside wp root */
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://site-name.dev/wp-content' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
