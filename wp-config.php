<?php

define ( 'WPLANG', 'ru_RU' );

// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( __DIR__ . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', false );
	include __DIR__ . '/local-config.php';
} else {
    define( 'WP_HOME', 'http://localhost:7001' );
    define( 'WP_SITEURL', 'http://localhost:7001/wp' );

	define( 'WP_LOCAL_DEV', true );
	define( 'DB_NAME', 'villahide' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'villahide' );
	define( 'DB_HOST', 'mysql' );
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', __DIR__ . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         'uX*QWg7NGmUoGU)DJeuNJvu+t>fAWgC2)7Yvs9c/ArqGXMuc<RE!P@DP`(q[KKS/');
define('SECURE_AUTH_KEY',  'fwiQrQ &F:MEx*BnC!Fhut)?4qaPNSBa$T+eSP Fl+Cx}aoD m:o.}-Q0+_E-.Zs');
define('LOGGED_IN_KEY',    'zG42.Xc5}~0n&>J<~-V2)RnYbUvM+e`Lq*%Wu~sMq!v|M|kRw sQ=$RH89G+O#u#');
define('NONCE_KEY',        'NzP7N$p.k;qC+Yy;8%#Ft=hZV{#IN-*>9A!OVZV/]GE0dV3T:gOt}ez<G))Ri/6X');
define('AUTH_SALT',        'SJ_>W&=PSxh3{Dn!7g!o,94bQ$xb*Wu-~%jJ}44M)C}|%CH NNks#@yj/s1NM3**');
define('SECURE_AUTH_SALT', '9A5BPH,Y!w,j^:7etz`q+%&h|:v|T;r ,W!~wrJuqSU %[[1LO -Fzm~_{W,9;+O');
define('LOGGED_IN_SALT',   ':f_jtX}yi*{FWzZWXq7,hA``]Rf_L1K^n? JXwV.09%_h#~./T#i]TIlP&B<fh&S');
define('NONCE_SALT',       '?-`XcS)cDQHHM(37y4B+%^U`n^o<4t^oSFf]B,X%%}AyH=*=;{/vV539H{[iu|:n');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// ===========================================================================================
// Disable WordPress autoupdate
// ===========================================================================================
define( 'AUTOMATIC_UPDATER_DISABLED', true );

// ===========================================================================================
// Disable plugin/theme updates from admin area
// ===========================================================================================
//define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_MODS', false );
// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', __DIR__ . '/wp/' );
require_once ABSPATH . 'wp-settings.php';
