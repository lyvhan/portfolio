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
define( 'DB_NAME', 'bylykke_s_h_dkbylykke' );

/** Database username */
define( 'DB_USER', 'bylykke_s_h_dkbylykke' );

/** Database password */
define( 'DB_PASSWORD', 'Schmidt1' );

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
define( 'AUTH_KEY',         'u3>6jg2.S@G27%aRHW4FiqOi92k[31{:cBTbo~QoOv{UQ*}^*-Yy&B-O qp#cMmP' );
define( 'SECURE_AUTH_KEY',  ']j<-pbib6Ci.cIF^$-!n?p)RL{<4L KPO/<TI%LIv!3uvrg[VX>V7Ht}~22;Vx+]' );
define( 'LOGGED_IN_KEY',    'O?r<f<Aghm <<L Uk)&r<|Y1!$(:6#bpQr_W}z&SUscb5R&0q[ATJ^]XPc%U}L$V' );
define( 'NONCE_KEY',        ':Ur!J5hwI^Q<l#EI~AXQIY>fL2qkOoO7^? as9E`1~4B31^k}p0J/x_#kq8SNBRF' );
define( 'AUTH_SALT',        'P5)sqV$NfO}qbh0+o*6+^f.(<Du+j=kC6F-|tF^dd9pJ7m9Pl]~S4I{;Z)hSo`CL' );
define( 'SECURE_AUTH_SALT', '^v8+*$Ou1Qq0)Tu=+Hpw+~rPuy}n8Se1Vz^@C](noMIM@lW!Ho{pa$2vzc0_+:)M' );
define( 'LOGGED_IN_SALT',   'd{iuQI|T6/r&^ O/o_9v%h-&;VHSjtq9{%h<6JbN}UsC/TK=A7#fAuuaR*=|qTb[' );
define( 'NONCE_SALT',       'gKc1OS_ <+1}(: oN8#-ZL@t/WPW4(yDpK.Bz6YuQWm6ZejPv)^`Ss`;. zNB7n3' );

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
