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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plusgaming' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'MutWbqvj9nlYCXZHb8uj' );

/** Database hostname */
define( 'DB_HOST', '51.222.14.197' );

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
define( 'AUTH_KEY',         'VDezDN(/+x>Mdnv.,x<,pJ(l%cg8*Vi,-ho|4iCE|1 28pq`|9gEo]0[>h>%j,n&' );
define( 'SECURE_AUTH_KEY',  'Ml}NPMd358;p|?H&%bHw+#Ef+PfS5wc 8b{8`/}>KbNOb9K!4T`!bZ%BSZL[@;0]' );
define( 'LOGGED_IN_KEY',    '%n0-C0fJ:Lm~CYRQv2:TIdPq2zRwI+h30(m?$~IUe0~xJ(iO>ucEtz0?XaHB*+}a' );
define( 'NONCE_KEY',        '[h>!(Rh*-q>e&0;<4g_Sf[@Im t*|y/|,ONP5ciajoC;hub7=mD5>oze?)g&m5IH' );
define( 'AUTH_SALT',        'oSl}G?l6}&AsB]oiv-@A}&IUgvpy9;]|tY3SG[P2 3$@247v{jhV.~e}U#VYusFe' );
define( 'SECURE_AUTH_SALT', 'bW?I?JeA0SMYG0o7V^g7;fq|/,!UkW0-FFapi8Rd(wXgas]g^X?].||GiU7;SpJp' );
define( 'LOGGED_IN_SALT',   '0=/r_YL&p_wY=AE?~D`C&]Z#?XemGaIBR{V)-_ezfV2(70K:L,!&{fq;JPpm{4w@' );
define( 'NONCE_SALT',       'SRO|~i!o+Ue/Oq#&p#$r|{t.&9`wH$JDv|;S82,8PF}B6-9mS8@=k=LKyUc_4N((' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pgm_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
