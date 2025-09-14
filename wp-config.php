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
define( 'DB_NAME', 'leximco' );

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
define( 'AUTH_KEY',         'e|(}}M^#K[)Dudil#L|xeS}i8p=;(1Rn49!AIYL<4~CfpV_e`$ =iiU keM#gq5*' );
define( 'SECURE_AUTH_KEY',  '(3RQgQR?3@p~m(<.k!cDtc+a<H;~$ArqmeH8*7#W(5-x>eMzAQ(RAuY~q1s#7-l0' );
define( 'LOGGED_IN_KEY',    'p$rx.G l+|XV`KV{|fNbYJ,++w<r2A%y)uu.7~7gX.V3y3mRI2;h/.{jVJ4Pn8wx' );
define( 'NONCE_KEY',        'Pw1/T5Pa{@)`jL]NnQ6@$e]lK7`:|Ai2c5CDwd(>_JHl$~>FP,fu!y6^hp ~9!)u' );
define( 'AUTH_SALT',        'ivY<IYG0Tt<8{h?Ndux`~UK}7~*%*{pbH7>[P}f)vd]wZo1EeoMnE[G}p3nYWxT%' );
define( 'SECURE_AUTH_SALT', 'j(rXE+#l5p4HIIlpVc9)g,U&S4b]ggeG)0kZ=6Cf!0WF3R/>QWTVK L~wR5`D?t+' );
define( 'LOGGED_IN_SALT',   'BWLtw.d2=F{Qd<$T+CvOgS^p1G(42O7cttmh;g?*H<fO2.G@=Of2UA$vNox;fC9C' );
define( 'NONCE_SALT',       'J~E-F{OD3-`XAVd@03.EIz@360OAF3;0)&pD}p8:8[Z]ztUQsRCbyDpk-]g&8AwT' );

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
$table_prefix = 'leximco_';
@ini_set( 'upload_max_filesize' , '4096M' );
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
define( 'WP_MEMORY_LIMIT', '4096M' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
