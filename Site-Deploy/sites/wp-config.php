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

 define( 'WP_HOME', '<Update_URL>' );
 define( 'WP_SITEURL', '<Update_URL>' );


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '<Update_DB_Name>');

/** MySQL database username */
define('DB_USER', '<Update_DB_User>');

/** MySQL database password */
define('DB_PASSWORD', '<Update_DB_Password>');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         ',%3mc~kQ5}ey(nEare&7V0wNj6|6.q%:_[M0+Z,1+>ASL2~y|]L+(~r!9AM[j@g{');
 define('SECURE_AUTH_KEY',  'T[y70w+W|)unwzn4d%?U3{YNVghodxe1fB=hL!GAccG,NKE3t}1zs$FFnWm+A+IY');
 define('LOGGED_IN_KEY',    ',y ]*w0 @_S-!Zj:r`2JH2h4C) .C(I9 O5f.)Nt|K}3`~L0+3-|@J z7BgB&tc>');
 define('NONCE_KEY',        'Xp8@%nrP|9++W}jF/Zz^o4)>MNe:G~O=R{j]E8Z2+dw3~3]??d-G#~oF.Rk%:e4N');
 define('AUTH_SALT',        '%S+~&%9b*Gk>L#z,F($l;Vtpuh/q]mJGG^ty1*?qc#cOH725SLhA!SZAZL/vW$I.');
 define('SECURE_AUTH_SALT', 'oRrx 8Hh3a&!&O.,k,/L&b8}9G/%Nh6Ruc~)S%InhrsOH+R,2z7:m/L8IDd*LYcC');
 define('LOGGED_IN_SALT',   ';K$0;>t|r4<jZPcbs<.&Czg`w=m)[zDEmP)f;sH{!DRiBDO{mF0G3a}-0{;5&Zp.');
 define('NONCE_SALT',       '&<@*p%Ns p.g,6n#x2pyn4^P?!(Fa7TmZ1!rnf,du8)i7#=/P!+~#c=:BOx{0|+S');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
