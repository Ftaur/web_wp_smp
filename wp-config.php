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
define( 'DB_NAME', 'db_wp_smp' );

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
define( 'AUTH_KEY',         ')S$R45~1#yh7,w)(cT1[#mk6-LP[BIJ/lJA[i,0(GGstkGazt3a_!=ORJ:^~<{O]' );
define( 'SECURE_AUTH_KEY',  'zGt~yuHe84<`3BmiD@[[8FXNlWPl27^rhrdB@g)Kjh^_OlKLa3!(glG4h9YWtgm^' );
define( 'LOGGED_IN_KEY',    'c)q%8Bom?)FR<_2oW4[yGBb,^}s:a_:FX9W`$hr_FHH%AfqtS>fzcQ,4rRGF;2-o' );
define( 'NONCE_KEY',        '+;[p?G&E0fEz=A2>`g LQ9zfOge*-xI/fQfzPBX3VTJ05[>-HsCB%pe^k~}y^A*[' );
define( 'AUTH_SALT',        'KYm$1=-nWd~~qsZO;t&f${<-_<T.uF{s++K9Q?z4>ZD?Fp9;eD,G9anFrCrJM; -' );
define( 'SECURE_AUTH_SALT', 'w~nZ1[TVtL@M=@EfNIpmeh^84Fc8gEyK&P-4:>u{=BKw74xW93@Ne(bm^cr:5]D^' );
define( 'LOGGED_IN_SALT',   '_T+#H/X7I>/6;=]SFDCIMY-{%>%PU+UeuLp$BEmG}]swQ=diU47Eb$aJtaX*zqbr' );
define( 'NONCE_SALT',       'l5dCA%MXG&i5RUe%%NCdgyMk*EHlWSK|`v JNil5twv0Qg|0&Xz[G~VDr!2nl#iZ' );

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
