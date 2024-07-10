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
define( 'DB_NAME', 'u361112115_ovEZ2' );

/** MySQL database username */
define( 'DB_USER', 'u361112115_ylfiK' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tgOLoLRXQb' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'QoB;OAv^JEq/^(C;G{[R;ET[|BZy^@mLE<diZSzu_(Grte1.WfqaAGG2tc,>fpvK' );
define( 'SECURE_AUTH_KEY',   'D&n$%0i|{Yz{JAX/]$tTL:Dj1_HoLz%{yR4t0IeICCfB/t0quYBR)$0!qHo-L &}' );
define( 'LOGGED_IN_KEY',     'Ru3k|]H6F;c!t<;C|3A3F_OJt8vyV*&?=8+ 9|r1{`/].={F;5N>)q5^L2Qyu/_[' );
define( 'NONCE_KEY',         'WS>p@VgsIub]r@*,(9`0Or+j$nu!$Lew&b0El]30<.F!rxj%lp1Md+a2(nT3M2:F' );
define( 'AUTH_SALT',         ':,mC;NjS^;772j1ls2E^n4RXF0[<$o+4=P}?lMQ3NL77~+>!oOME]r:eU#<b&Gk;' );
define( 'SECURE_AUTH_SALT',  'g,X$DXD{er!eGa5P^2UotXuD4KQI[8y/VR0:]5=UarsM&:wrr!wU70e=uWFojmQI' );
define( 'LOGGED_IN_SALT',    '8iqs,yC&V%8%-rva|b1ngEpLz*b^*C2t_so@twM[;<> qNK?)IDPU96Kd_w2Ic?5' );
define( 'NONCE_SALT',        'i[aFd-<0OdbY*V9R2<GuYaDm5}T)}hm3EvR)zHm+9E(/ov2=XA4G!3aS#?cZ#PgG' );
define( 'WP_CACHE_KEY_SALT', 'dM~{rBH8WMw% bc<~3gr@9yiHhrAfJM%e/n  yd]LN]Up<bZ.,!sz[0{w*ebG+il' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', false );
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
