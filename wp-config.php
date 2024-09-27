<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nanosoft' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         't-Xwin:12(87Ne>)Y7Q_dP*s,w?GZ`Bm$(/BQOhPjdKM{2/!5_[o;9un^S7|[nHC' );
define( 'SECURE_AUTH_KEY',  'q}&vTO7Z_xdilN|Dk46YlB(G`3mn+kZ7i0]jW(%>IN9H@2Fz0iQg?^LLB&;cy9:1' );
define( 'LOGGED_IN_KEY',    'p1Ok9y[>60bF_exSbF2:eF@a~{H)6j`|AKP`a}/~vZ=kj5nnPhCH*v0N-[;1]xJK' );
define( 'NONCE_KEY',        't}yF@-A(^eF[-n6$fa]P!1sg_!Zi&^pAb]]>_B&9d4Ej)|+%<#+B>wmV*miVyYj9' );
define( 'AUTH_SALT',        '7]z4Im&(CB7P~!X ]wMwV/%(aS~DW9.b0(M]{!s/l7?NLSg#)fGpZ2-=&+=JnO9K' );
define( 'SECURE_AUTH_SALT', '@#@5{S4>3iW0Dq7_~AqRX<uey H!Cm31Jf-wM[S_tn< ,Z 1{lBlY8o0&JCM/7f/' );
define( 'LOGGED_IN_SALT',   'lzC6(Av!KR2x.Rc<f[&zlY@AT>J^CEV{Cu-Mf5t!&@Vmr]8}A_`9d}}DZoCKW#~w' );
define( 'NONCE_SALT',       '.6J:;?(#L|s;=)#IuB7RI)lIf=> SQR#)6lfR4,|p`SQD lt>]]CYx%49ekY}ndG' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
