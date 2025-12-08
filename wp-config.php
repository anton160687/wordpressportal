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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'uLvxsFdOBnVJnSr' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// Включаем отображение всех ошибок PHP
define('WP_DEBUG', true);

// Записываем ошибки в журнал
define('WP_DEBUG_LOG', true);

// Включаем отображение сообщений об ошибках на экране (для отладки)
define('WP_DEBUG_DISPLAY', true);
// Показываем все ошибки PHP
@ini_set('display_errors', 1);

// Принудительно используем прямую файловую систему вместо FTP
define('FS_METHOD', 'direct');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ']oo!)VAfKfkI|]E{bCS@C-l-|Ajg(Ja>+JF3$gk}1lJ~$*17uJ]zJ8{VLY_&-7my' );
define( 'SECURE_AUTH_KEY',   '>mF[&{I ,<49oS)rM7+HPets:q5!=tA4`d9Tfe7q[Wi%5{=CpW)F,gK|%>BAR//y' );
define( 'LOGGED_IN_KEY',     'c9=VWgO.!4>Nn+cJlMRhPVC+q/4B9S(}%,E|uM0/}vb$|!f<.47Ek-5Y5_NE^#/m' );
define( 'NONCE_KEY',         'zX3v=6$<b <ieo]d:a?*01r;dTzUui$I+Q;%e;6,{:yb:E#iWTV;D(`dx52,2H~?' );
define( 'AUTH_SALT',         '.?4sGdy8HTtCFUz8IAs^k<co8{;O!D;7o[U-W{fe1p4ZvGE#HZ(1B*-L*^m>T.Q9' );
define( 'SECURE_AUTH_SALT',  '?vZBbXRC}EIVxk_lm6oyMbEqpwYV%$syiSd]DQ(+l%{!`:7#vy`S[ %A~HA6yfrn' );
define( 'LOGGED_IN_SALT',    'E<w!s_]U%IE1OvJ:eo{@)@:<B#`J}!GU_N8}8|DPMUp{o7[dYMI)C=OLXZun(oQ0' );
define( 'NONCE_SALT',        'uj[*.URf{<<gKjvl26W)_]w7e-6je[Kw`!?jsyx{v,U=kda*]m!P&9MB:,m@U{US' );
define( 'WP_CACHE_KEY_SALT', 'W><Qy0a:n]sn1>MyarUy=G43MH=EvyJ6 t(Dyj4@Fy5f*uU504b#B,T0/CdE]O)O' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
