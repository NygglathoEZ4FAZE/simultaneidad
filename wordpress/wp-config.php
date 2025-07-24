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
define( 'DB_NAME', 'bdcitamedica' );

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
define( 'AUTH_KEY',         '&@^Q.wyV-wO&`.}>ER>AzVBr--.urmi.~uA%K^#8DunB1Rpa+*|SIdf*3YR<vc^<' );
define( 'SECURE_AUTH_KEY',  '9%2]y1Xy95FsJ- 4x$wQD<4tX[Z6K|l-,>({><nThR%@PXdB@9Wk*rjLUhZigb2j' );
define( 'LOGGED_IN_KEY',    '@_NJlFOKLMN>-b!t*Rw#Yp5I]=7o|b@bKiA[CGvP~P|Nxm#IcGh &vD>KlR{mlcS' );
define( 'NONCE_KEY',        'eqLcf6i=?36`uL&62E24)7&*?|*<d$S%}5BaeHJ]oDfO1lHQ,z~fr;)Z]KJJJ+Mg' );
define( 'AUTH_SALT',        'ZB+IfIIBp1%zv|Uu1{mopR,a74KUV5+I:xrH@Z ~dzuYPf{ZpUz>8w9O-r;2g&f$' );
define( 'SECURE_AUTH_SALT', '>W^u=1lNv=w(sC|bd<x,@.luP`B||@q+w#l_Yphn7~d]-5helAkY2P07v|-~ JTq' );
define( 'LOGGED_IN_SALT',   '|LS;FXDQ)u!Ei,.yx_:7VkRV<?D<?Fa9_4A8i4r/(&p]Xlv#]c}=i=z|/GjP Isg' );
define( 'NONCE_SALT',       'vSsoKECg.i-gshh2pQ5HoHkIh+5VcRBqveQW|7[`HiK=bU,AZ6YHJq_9,nB Rx+>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
