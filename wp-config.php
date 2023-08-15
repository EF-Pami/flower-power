<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flower-power' );

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

/** The headles mode */
define( 'HEADLESS_MODE_CLIENT_URL', 'http://www.Flower-Power' );

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
define( 'AUTH_KEY',         'icE3pw@l<VPvrVjL,x6m`^MPkFun[K`2ueVAJ=5kM2sjyP6Foh$/nI#@PZ/4(b:Z' );
define( 'SECURE_AUTH_KEY',  'mg)JQ0@j</V(&deE.f|Ckk KlsUmv<B4a`[ZC-Z/+f8DruH$!FN$uB!J.-+c=C6>' );
define( 'LOGGED_IN_KEY',    'ziN/ dYLzidO4K;KzZ;.5a~Y[ 0CMQ><%fWoh^$O)uXe5 X!cVgRb1>f)=@t${Tj' );
define( 'NONCE_KEY',        'ax|v;p4_B5Z_qP_@sy=L.Wlw1[!b;)hp]y6 7/~u(B?RO6WJD.8vRIz<D1Jk}%cc' );
define( 'AUTH_SALT',        'vM[n.@QK@K(`<R n*!awT&;Eu+C:roM8?Og?~(a5[ZqPHcjY<Z!}:ak]QC%@1b?(' );
define( 'SECURE_AUTH_SALT', ' a<`TsgL0y%DM+sKc+!2.d,*w=y}H ;6we2T;-#Llq8.(9Yj;:<F#D~aO5ew$3N{' );
define( 'LOGGED_IN_SALT',   'zW!EQ%k3w>NcGk2*!OTlU[w6N+M(g*_&7B26n{m}s4F3CnVooNimHE2(4U[&ce+A' );
define( 'NONCE_SALT',       'W5-6:@Z#,T8=7vVIHLL@{4%AO8.^t/+2)m4nhP1W8pGs%[aLF*PQ$bPB]lp$cDmJ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
