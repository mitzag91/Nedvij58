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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id7391535_wp_500b97f97cecdb010d12bdeb817090e5' );

/** MySQL database username */
define( 'DB_USER', 'id7391535_wp_500b97f97cecdb010d12bdeb817090e5' );

/** MySQL database password */
define( 'DB_PASSWORD', '628957f2176ed418d51816d3efdb4f74c488c72d' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3r0z$ghT=14^!=X7%tf5(4^]~pA?JOg}a;,nOuv-NAZIP2V>i|/hQ7Hm.T{AzE(h' );
define( 'SECURE_AUTH_KEY',  '_;9EJ*bzL>zNJN@n}K3k7476&<t-6Zmxc+*++f7N}PQBN/czBI@Nb2eA*I4yur+!' );
define( 'LOGGED_IN_KEY',    'H8>g$j%jD)2ICe]q)>#9<{6_mlR4Q2%#`wq$yg&E%5Yg2GO09wW=*%[Wn]!byOl+' );
define( 'NONCE_KEY',        '15f:qeX6bshJ<LmPT~332k_$(E0px]y3cCinBo$~{t0Ns(Bpd%<uvwffc23V_{g;' );
define( 'AUTH_SALT',        '/P;~$wtE^djxiYx^K?*u}w~B[vre%^,v!B?Y!v,;#TEr|<&Kgk`tr((hZcTUXD9L' );
define( 'SECURE_AUTH_SALT', 'o|:M1{w=BagrwhB}j2RwTkYQbX.ap@]D$ a|(F[0b{m-Og,!dgIX[i)zu6vwLiJ]' );
define( 'LOGGED_IN_SALT',   '$d_5_}q<x^|LZ6I xKW?~N[$l<kx(y1ds90vAVp&/Ug9]91!H[qB2of-z{:S?%`&' );
define( 'NONCE_SALT',       '5=M>3n*#6)6BR[r0wW6w}oA.k*79I%3h}l}5?UuW{/-jIj^/O?Kj`n_[QAz]`n!M' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
