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
define( 'DB_NAME', 'basedatos' );

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
define( 'AUTH_KEY',         '&7]1c#;{>3a#z/h~<U[^F#cTL0nF;bE,F}wUPBtycB7dEQ7`5bf9ZFmqht^?,lUF' );
define( 'SECURE_AUTH_KEY',  '{fO&nc0uRudI}es2p#R5[u:_Nsb1?rgsk~|lKvGZ Sw_K^Vw&g8~-_&Y~5kzuA28' );
define( 'LOGGED_IN_KEY',    '%Ho%s^5;g+#-q}jM5z#WAx2]TVVBZX{|tF3HU7U;g@Rdn){xzQ{~<=_7w&:Pbnqw' );
define( 'NONCE_KEY',        'TT$6w^`XzS6f}]-ENMY6Hg4*b>:ci$E,n|y}r}0F0<7B-WMqt&mCs|V(.V1n4:+M' );
define( 'AUTH_SALT',        '0p<Ibe(!zW5RAt&EF`Ls<r@&qJlG6gwN(ToYAFvi.[k6&{#k,W1/L[PU_t!@r*$}' );
define( 'SECURE_AUTH_SALT', 'BLA[4tROXq$fm}BG>!2k6,6Ufhj6ZtRV{gZt=BSyjGbIT`C0tJ@Z!fRc6=h*i~Wp' );
define( 'LOGGED_IN_SALT',   'fsXeLB0BC/<ibqXAhrv{mv$M=xhs$&g_5S.J7vQN*2A4XqPBSN,Oz_8,DoY7^8aF' );
define( 'NONCE_SALT',       '{aM-/7LPanr{6~@[(?h7b*+AU(W_LZ#T#b@C[L!PWFpNBx=))%f~qNCdyc@UaR6[' );

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
