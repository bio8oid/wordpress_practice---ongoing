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
define( 'DB_NAME', 'lovetoeat' );

/** MySQL database username */
define( 'DB_USER', 'admino' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rowerek' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'v[UAI<Q20,Vlb^UHEF`c=-N@ Ehrr;r|B(*7!IwvKe|S+PPlPPmK5<21Mc(V!`+j' );
define( 'SECURE_AUTH_KEY',  'q0E~>+p.FWR*a`7vk.#M^2.+UF+iqqG47cmJyX;;f,_8x#=d9WU<njyylj3R*l@e' );
define( 'LOGGED_IN_KEY',    '(b3|&dY1sh=oq7A,SUWfv1T$UNG{{4Dd<mgb<^Eue2+ni6|fO5es=*v5W2_2;v|3' );
define( 'NONCE_KEY',        '>%2pmpiSv25~RM3G+t$FARv%7 cSjy1pTN5p(LNW|PKS&Pfz_:U)53Wmox9MmzCk' );
define( 'AUTH_SALT',        'Q5Amngq!Q8{J}nMlsJ}EBox0<^eA^xj]VG0aGl&u&xKWsFa6P*e%L&G]h48tQw*P' );
define( 'SECURE_AUTH_SALT', '6#|fG23B$r*%=}uQGj1_xwIfP}Dy8oK8-[DJrkr*?}=V:]R~@Zq.EYu=FOLdk5UL' );
define( 'LOGGED_IN_SALT',   'yazz,~gJg.zIMI(9,:AR+Y68EG>0 8s`uTgBg}N5~NANCDQd9KJBWpf^%*rnFCyq' );
define( 'NONCE_SALT',       '#gm7!&A;|Rv*jp`ryy/!jt~2Lyc9f^C[TDUxCV1#olf*n3[zVN:_T iSjFS&Mq,c' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lte_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
