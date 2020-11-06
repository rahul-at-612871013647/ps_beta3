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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "ps_beta3" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "root" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'VA!Kk~xz};XFqV;w=[nWI$LW(WO*USgXe%s<%NrOd_L_3f shTLK,[t0cq0hSge$' );

define( 'SECURE_AUTH_KEY',  '^_DSkiqea2/`vxQk~[GW0;y1.yT^lpQeC)O2eeh=;MaNl(o(;f;:.ymv4%ZV1HwB' );

define( 'LOGGED_IN_KEY',    '@4*WR_n.~?np4pnPP(_j?.zSb{`6&~VaE9i%rhln>Ev|eHZZTu)8hk*R3:IW8I`#' );

define( 'NONCE_KEY',        'zwvN@Donc%!AsU%9wDu)_c#pz=gjCX]ACl{%B>jr(WD?O?,5_o[ZI_[KTgCoW62|' );

define( 'AUTH_SALT',        'h8os1]QF9lE{0~K&b~IEd:7Ss.-IfSr:kE2(l}{7tuNph{eX?k |@8M]a4g]5CoL' );

define( 'SECURE_AUTH_SALT', 'cB# Tom]tN1,3EF/sJ(3}8ZpqRli1E#MX$<@vR)H/4I}b~,vTQ<urI[$eX*bHYab' );

define( 'LOGGED_IN_SALT',   '{oMm_&02T,)glb8s0M%ZR^(TUP,sYd$pU7T4XdN;1[yVf;ZZLdZdlb|_fdCm`B0p' );

define( 'NONCE_SALT',       '^v&3*W:xO+O/2ls3mM>Er-,-oVZG5e}!>aMb(Ff|/`UPe/U9py*?7#Cl!`5i+S/z' );


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

 * visit the documentation.

 *

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );


define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';