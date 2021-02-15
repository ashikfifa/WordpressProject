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
define( 'DB_NAME', 'wscube' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '7lih9C_#r%mLMfM1Rx AGY|&]Zve VbKDmo.VyJW wJLm8xnw]qkcH$i]AzqJoOq' );
define( 'SECURE_AUTH_KEY',  'ybysdg(n`3A>=/|:fD=O@HYkP6kOXL0aAmoK&|m]]:A/423DP~D.upB[%a}pYRrd' );
define( 'LOGGED_IN_KEY',    ';Twq{_@4F`L(_#d98[E{os_+r0iF0.jeHt.WyPWL(v,yQ/0]1UGtsr4/,BN2;#K[' );
define( 'NONCE_KEY',        's8xoqyf=/hl}*l21BQ<xrBeSdjffemA3$XcBO);V#A,xg@dG*3t4Gq/9uYl hg{d' );
define( 'AUTH_SALT',        '_kCLMB6eDU+cq|P?I-s1d>Zq+7K+oG5Od;U4m5>*Mwxi;VM281yDjlMt?#Rn;9]`' );
define( 'SECURE_AUTH_SALT', '3#*W6]0X?!NL+^2v_%#Vnqz]g!j>R! kIi1M3kw,iS{mc[ pXQ[xPH^]U7z ;mu+' );
define( 'LOGGED_IN_SALT',   'iCJ^qS(OR4|X+;UQ]Jeq/;Lm[)j0?9PQWn0VU#`1UZb~90}UA ]*Rw3j}IPO`Fy#' );
define( 'NONCE_SALT',       'J&3P55FeOXhBy(kDOMq#+suxgz8JM7nX}&f`H>G{YcFO_OZf^3)3>~n8<m:DwK{_' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
