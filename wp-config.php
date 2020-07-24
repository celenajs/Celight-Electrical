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
define( 'DB_NAME', 'sam_celight' );

/** MySQL database username */
define( 'DB_USER', 'sam_dev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S/852*963.' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'x5#19+L=KagHN<geG]H0YbthKXIfS@GV{zj/:8AJ?-Q.N1,Wkre1p.zR6jeN@vmv');
define('SECURE_AUTH_KEY',  'BhO _rL@(,X(KoDz%`!+Ca,DG:L*eI/x<i,A<40ZbbG<>S}E@-=qjN+FY{9V8sF<');
define('LOGGED_IN_KEY',    '$-74WNgF%&gyx[H:S45>Dpxn2}%zLLI=do:.,u|F=GH7+p}T79|B[X)c3[W(vqZ2');
define('NONCE_KEY',        'HK-M5~uEcJ1YgJtwNgDrC`VO*bHOsNFu4<W:d.C1*](x~u]GOC+|-e 6xF+nI,T!');
define('AUTH_SALT',        'lL|~$&nj^;uQ{y{_!,+UI=w)u)Ob:+xQ/a`f<6FU-_N:pEsdA|tJ#0gNg_v6bnrA');
define('SECURE_AUTH_SALT', 'lTSN%:O!#xey8E$fDRNDr(-}(7q-v7xBE#9~ ^M7zp0MT4e_<-s@n{GoKx_IeVq,');
define('LOGGED_IN_SALT',   '0Z2LyHZS:Sn&,?lCC24V0BcZx[OFLBn.hW6k}&g.![Ud<gi6=nhIfh;+P>?T /pW');
define('NONCE_SALT',       '&3+a*5|opBm/Y(E)4o(GKGr`ucyNTd%ZOB#=9|Sc6|$~eGx+^4K&F/r|OSNbp`6v');

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
